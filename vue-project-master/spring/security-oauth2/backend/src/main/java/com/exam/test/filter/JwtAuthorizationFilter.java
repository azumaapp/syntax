/**
 * 
 */
package com.exam.test.filter;

import java.io.IOException;
import java.util.List;
import java.util.stream.Collectors;

import javax.servlet.FilterChain;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.security.access.AccessDeniedException;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.web.authentication.www.BasicAuthenticationFilter;
import org.springframework.util.StringUtils;

import com.exam.test.handler.CustomDeniedHandler;
import com.exam.test.provider.JwtProvider;
import com.exam.test.security.SecurityConstants;

import io.jsonwebtoken.Claims;
import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
public class JwtAuthorizationFilter extends BasicAuthenticationFilter {

	JwtProvider jwtProvider;
	
	public JwtAuthorizationFilter(AuthenticationManager authenticationManager, JwtProvider jwtProvider) {
		super(authenticationManager);
		this.jwtProvider = jwtProvider;
	}
	@Override
	protected void doFilterInternal(HttpServletRequest request, HttpServletResponse response,
									FilterChain filterChain) throws ServletException, IOException {
		
		log.info("JwtAuthorizationFilter doFilterInternal");
		log.info("URL = "+request.getRequestURL().toString());
		log.info("URI = "+request.getRequestURI());
		
		if(!request.getRequestURI().equals("/api/")) {
			UsernamePasswordAuthenticationToken authentication = getAuthentication(request, response);
			
			if(authentication != null) {
				SecurityContextHolder.getContext().setAuthentication(authentication);
				filterChain.doFilter(request, response);
			} 
		} else {
			filterChain.doFilter(request, response);
		}
	}
	
	private UsernamePasswordAuthenticationToken getAuthentication(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException {
		
		String token = request.getHeader(SecurityConstants.TOKEN_HEADER);
		
		log.info("request.getHeader(\"Host\") = "+request.getHeader("Host"));
		log.info("request.getHeader(\"Origin\") = "+request.getHeader("Origin"));
		
		CustomDeniedHandler customDeniedHandler = new CustomDeniedHandler();
		
		if(!StringUtils.isEmpty(token) && token.startsWith(SecurityConstants.TOKEN_PREFIX)) {
			
			String result = jwtProvider.tokenValid(token); 
			
			// 유효한 토큰일 경우
			if(result.equals("success")) {
				Claims claims = jwtProvider.tokenInfo(token);
				String username = claims.getSubject();
				
				List<SimpleGrantedAuthority> authorities = ((List<?>) claims
	                    .get("rol")).stream()
	                    .map(authority -> new SimpleGrantedAuthority((String) authority))
	                    .collect(Collectors.toList());
				
				if(!StringUtils.isEmpty(username)) {
					return new UsernamePasswordAuthenticationToken(username, null, authorities);
				}
			} else {
				customDeniedHandler.handle(request, response, new AccessDeniedException(result.toString()));
			}
		} else {
			customDeniedHandler.handle(request, response, new AccessDeniedException("토큰이 존재하지않음"));
		}
		
		
		return null;
	}
}