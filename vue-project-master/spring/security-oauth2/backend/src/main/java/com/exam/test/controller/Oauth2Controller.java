/**
 * 
 */
package com.exam.test.controller;

import java.io.UnsupportedEncodingException;
import java.net.URI;
import java.net.URISyntaxException;
import java.net.URLEncoder;
import java.security.Principal;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletResponse;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.security.oauth2.client.authentication.OAuth2AuthenticationToken;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.exam.test.provider.JwtProvider;
import com.exam.test.security.SecurityConstants;
import com.exam.test.vo.ParsingVO;
import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;

import lombok.extern.slf4j.Slf4j;


/**
 * @author user
 *
 */

@Slf4j
@RestController
public class Oauth2Controller {
	
//	@Autowired
//	private OAuth2AuthorizedClientService authorizedClientService;
	
	@Autowired
	private JwtProvider jwtProvider;
	
	@RequestMapping("/")
	public ResponseEntity<String> home(Principal principal, OAuth2AuthenticationToken authentication, HttpServletResponse res) throws JsonProcessingException, URISyntaxException, UnsupportedEncodingException {
	// public Principal home(Principal principal, OAuth2AuthenticationToken authentication, Authentication auth, HttpServletResponse res) throws JsonProcessingException, URISyntaxException, UnsupportedEncodingException {
		
		log.info("Oauth2Controller home");
		
		if(!principal.equals(null)) {
			// Client info
			// 이걸 사용해도 accessToken을 아무런 구현없이 accessToken을 뿌려주지만
			// 일반 로그인에서 사용하는 토큰을 뿌려주기 위해 쓰지 않음
//			OAuth2AuthorizedClient client = authorizedClientService.loadAuthorizedClient(
//					authentication.getAuthorizedClientRegistrationId(), authentication.getName());
			
			ObjectMapper objectMapper = new ObjectMapper();
			// objectMapper.configure(DeserializationConfig.Feature.FAIL_ON_UNKNOWN_PROPERTIES, false);
			String serialize = objectMapper.writeValueAsString(principal);
			ParsingVO parsing = objectMapper.readValue(serialize, ParsingVO.class);
			
			// 인증이 된 요청이면 true 아니면 false
			if(parsing.isAuthenticated()) {
				// 여기서 parsing.getName() 으로만 확인하지 않는 이유는 혹시나 다른 Resource Server의 
				// 값과 같은 값이 나올수도 있을거같아서 parsing.getAuthorizedClientRegistrationId() 값도 같이 비교
				parsing.getAuthorizedClientRegistrationId();	// Resource Server(google, naver 등) 종류
				parsing.getName();								// Resource Server에서 id 대신 리턴해주는 private한 값
				
				// DB에서 이러한 값이 있는지 체크
				
				// redirect라서 header에 담아도 값이 없어져버림
				List<String> roles = new ArrayList<>();
				roles.add(parsing.getAuthorities().get(0).getAuthority().replace("ROLE_", ""));
				// 여기선 cookie에 담고 클라이언트에서 cookie 확인 후 존재하면 localStorage에 담고 삭제하는 로직을 만듦
				Cookie cookie = new Cookie("Authorization", URLEncoder.encode(
						SecurityConstants.TOKEN_PREFIX+jwtProvider.createToken(parsing.getName(), roles), "utf-8"));
//				cookie.setSecure(true); // https
//				cookie.setHttpOnly(true);
//				cookie.setPath("/");
				// cookie.setDomain("spring-vue-deploy-demo.firebaseapp.com");
			    res.addCookie(cookie);
			}
		} // if
		
		// String uri = "https://localhost:3000/test";
		String uri = "http://localhost:8080";
		// String uri = "https://spring-vue-deploy-demo.firebaseapp.com";
	    URI location = new URI(uri);
	    
	    HttpHeaders headers = new HttpHeaders();
	    headers.set("Content-Type", "text/html");
	    headers.setLocation(location);
	    // headers.set("Set-Cookie", "Authorization="+SecurityConstants.TOKEN_PREFIX+token+"; secure; HttpOnly; SameSite=None");
	    
	    return new ResponseEntity<String>(headers, HttpStatus.SEE_OTHER);
	    // return principal;
	}
}
