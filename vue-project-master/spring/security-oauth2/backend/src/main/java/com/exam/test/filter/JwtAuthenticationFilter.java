/**
 * 
 */
package com.exam.test.filter;

import java.util.List;
import java.util.stream.Collectors;

import javax.servlet.FilterChain;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.web.authentication.UsernamePasswordAuthenticationFilter;

import com.exam.test.provider.JwtProvider;
import com.exam.test.security.SecurityConstants;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
public class JwtAuthenticationFilter extends UsernamePasswordAuthenticationFilter {

	public final AuthenticationManager authenticationManager;
	JwtProvider jwtProvider;
	
	public JwtAuthenticationFilter(AuthenticationManager authenticationManager, JwtProvider jwtProvider) {
		this.authenticationManager = authenticationManager;
		this.jwtProvider = jwtProvider;
	}
	
	@Override
	public Authentication attemptAuthentication(HttpServletRequest request, HttpServletResponse response) {
		
		log.info("JwtAuthenticationFilter attemptAuthentication");
		log.info("hash = "+jwtProvider.toString());
		
		String username = request.getParameter("username");
		String password = request.getParameter("password");
		UsernamePasswordAuthenticationToken authenticationToken = new UsernamePasswordAuthenticationToken(username, password);
		
		return authenticationManager.authenticate(authenticationToken);
	}
	
	@Override
	protected void successfulAuthentication(HttpServletRequest request, HttpServletResponse response, 
											FilterChain filterChain, Authentication authentication) {
		
		log.info("JwtAuthenticationFilter successfulAuthentication");
		
		UserDetails user = (UserDetails) authentication.getPrincipal();
		List<String> roles = user.getAuthorities().stream().map(GrantedAuthority::getAuthority).collect(Collectors.toList());
		String token = jwtProvider.createToken(user.getUsername(), roles);
		log.info("token = "+token);
		
		response.addHeader(SecurityConstants.TOKEN_HEADER, SecurityConstants.TOKEN_PREFIX + token);
	}
}