/**
 * 
 */
package com.exam.test.config;

import java.util.ArrayList;
import java.util.List;


import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.context.annotation.Bean;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.builders.WebSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.config.http.SessionCreationPolicy;
import org.springframework.security.config.oauth2.client.CommonOAuth2Provider;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.oauth2.client.endpoint.DefaultAuthorizationCodeTokenResponseClient;
import org.springframework.security.oauth2.client.endpoint.OAuth2AccessTokenResponseClient;
import org.springframework.security.oauth2.client.endpoint.OAuth2AuthorizationCodeGrantRequest;
import org.springframework.security.oauth2.client.registration.ClientRegistration;
import org.springframework.security.oauth2.client.registration.ClientRegistrationRepository;
import org.springframework.security.oauth2.client.registration.InMemoryClientRegistrationRepository;
import org.springframework.security.oauth2.client.web.AuthorizationRequestRepository;
import org.springframework.security.oauth2.client.web.HttpSessionOAuth2AuthorizationRequestRepository;
import org.springframework.security.oauth2.config.annotation.web.configuration.EnableOAuth2Client;
import org.springframework.security.oauth2.core.endpoint.OAuth2AuthorizationRequest;

import com.exam.test.filter.JwtAuthenticationFilter;
import com.exam.test.filter.JwtAuthorizationFilter;
import com.exam.test.handler.CustomDeniedHandler;
import com.exam.test.handler.CustomFailureHandler;
import com.exam.test.handler.CustomSuccessHandler;
import com.exam.test.provider.JwtProvider;
import com.exam.test.security.CustomOAuth2Provider;
import com.exam.test.security.UserDetailsServiceImpl;



/**
 * @author user
 * 1. security 설정을 하면 모든 경로의 접근은 Spring Security로 접근
 * 2. 인증이 되지않는 사용자는 로그인 페이지로 리다이렉션(or AccessDenied or 403 error)
 * 3. 인증처리 과정
 * 	  1> 사용자가 입력한 계정을 이용하여 데이터베이스에서 사용자 정보를 조회한 결과를 UserDetailsSevice에 담는다.
 * 	  2> 입력한 정보가 일치한다면 사용자 정보를 사용할 수 있도록 허가한다(AuthenticationProvider)
 * 4. 지금 프로젝트에서는 UserDetailsService만 개발하고 AuthenticationProvider는 스프링에서 처리하도록 구현
 */
@EnableWebSecurity
@EnableOAuth2Client	// oauth2 구성 설정
public class SecurityConfiguration extends WebSecurityConfigurerAdapter {
	
	@Autowired
	UserDetailsServiceImpl userDetailsServiceImpl;
	
	@Autowired
	CustomFailureHandler customFailureHandler;
	
	@Autowired
	CustomDeniedHandler customDeniedHandler;
	
	@Autowired
	CustomSuccessHandler customSuccessHandler;
	
	@Autowired
	JwtProvider jwtProvider;
	
//	@Autowired
//	CustomAuthenticationProvider customAuthenticationProvider;
	
	// kakao Bean 등록
	// Bean 등록 시 Boot가 자동으로 연결해주는 GOOGLE, GITHUB 등이 초기화 되서 쓸려면 InMemoryClientRegistrationRepository에 직접 넣어주어야 함
	@Bean
	public ClientRegistrationRepository clientRegistrationRepository(
			// 깔끔하게 client 값을 가져올 수 있는 방법 찾아보기
			@Value("${spring.security.oauth2.client.registration.google.client-id}") String googleClientId,
			@Value("${spring.security.oauth2.client.registration.google.client-secret}") String googleClientSecret,
			@Value("${spring.security.oauth2.client.registration.facebook.client-id}") String facebookClientId,
			@Value("${spring.security.oauth2.client.registration.facebook.client-secret}") String facebookClientSecret,
			@Value("${spring.security.oauth2.client.registration.kakao.client-id}") String kakaoClientId,
			@Value("${spring.security.oauth2.client.registration.kakao.client-secret}") String kakaoClientSecret,
			@Value("${spring.security.oauth2.client.registration.naver.client-id}") String naverClientId,
			@Value("${spring.security.oauth2.client.registration.naver.client-secret}") String naverClientSecret) {
		
		List<ClientRegistration> registrations = new ArrayList<>();
		// registrations.add(CustomOAuth2Provider.KAKAO.getBuilder("kakao").clientId(kakaoClientId).clientSecret(kakaoClientSecret).jwkSetUri("temp").build());
		registrations.add(CustomOAuth2Provider.KAKAO.getBuilder("kakao").clientId(kakaoClientId).clientSecret(kakaoClientSecret).build());
		registrations.add(
				CommonOAuth2Provider.GOOGLE.getBuilder("google")
				.clientId(googleClientId)
				.clientSecret(googleClientSecret)
				.build());
		registrations.add(
				CommonOAuth2Provider.FACEBOOK.getBuilder("facebook")
				.clientId(facebookClientId)
				.clientSecret(facebookClientSecret)
				.build());
		
		return new InMemoryClientRegistrationRepository(registrations);
	}
	
	@Bean
	public AuthorizationRequestRepository<OAuth2AuthorizationRequest> authorizationRequestRepository() {
	    return new HttpSessionOAuth2AuthorizationRequestRepository();
	}
	
	@Bean
	public OAuth2AccessTokenResponseClient<OAuth2AuthorizationCodeGrantRequest> accessTokenResponseClient() {
	    // return new NimbusAuthorizationCodeTokenResponseClient();	// Deprecated
		return new DefaultAuthorizationCodeTokenResponseClient();
		// return new SpringWebClientAuthorizationCodeTokenResponseClient();
	}
	
	@Override
	protected void configure(AuthenticationManagerBuilder auth) throws Exception {
		// auth.inMemoryAuthentication().withUser("test").password(passwordEncoder().encode("123456")).roles("USER");
		auth.userDetailsService(userDetailsServiceImpl).passwordEncoder(passwordEncoder());
		// auth.authenticationProvider(customAuthenticationProvider);
	}
	
	// security 관리가 필요없는 URL
	@Override
    public void configure(WebSecurity web) {
		web.ignoring()
		   .antMatchers("/test", "/spring-websocket/**", "/favicon.ico");
	}
	
	@Override
	protected void configure(HttpSecurity http) throws Exception {

		http.cors().and().csrf().disable();	// 개발시 에만 사용
		
		http.authorizeRequests()
				.antMatchers("/login", "/oauth_login", "/chat").permitAll().and()
			.authorizeRequests()
				.antMatchers("/user/**", "/user").hasAuthority("USER")
				.antMatchers("/admin/**", "/admin").hasAuthority("ADMIN")
				.anyRequest().authenticated().and()
			.formLogin()
				.usernameParameter("username").passwordParameter("password")
				.successHandler(customSuccessHandler)
				.failureHandler(customFailureHandler).and()
				.exceptionHandling().accessDeniedHandler(customDeniedHandler).and()
			.oauth2Login()
		      .authorizationEndpoint()
		      .baseUri("/oauth2/authorize-client")
		      .authorizationRequestRepository(authorizationRequestRepository())
		      .and().tokenEndpoint()
		      .accessTokenResponseClient(this.accessTokenResponseClient());
		http.sessionManagement()
		// SessionCreationPolicy.STATELESS 사용 시 OAuth2AuthenticationToken 못얻어옴
		// 내 생각엔 SessionCreationPolicy.STATELESS 사용하게 되면 SecurityContext를 얻기 위한 HttpSession 얻지 못해서 그런거 같다
		// .sessionCreationPolicy(SessionCreationPolicy.STATELESS)
	
		// SessionCreationPolicy.NEVER HttpSession를 사용하지 않지만 있으면 사용한다.
		.sessionCreationPolicy(SessionCreationPolicy.NEVER)
		.and()
		.addFilter(new JwtAuthenticationFilter(authenticationManager(), jwtProvider))
		.addFilter(new JwtAuthorizationFilter(authenticationManager(), jwtProvider));
		// .addFilterBefore(new JwtTokenFilter(jwtProvider), UsernamePasswordAuthenticationFilter.class);
		
	}
	
	@Bean
	public PasswordEncoder passwordEncoder() {
		return new BCryptPasswordEncoder();
	}
}
