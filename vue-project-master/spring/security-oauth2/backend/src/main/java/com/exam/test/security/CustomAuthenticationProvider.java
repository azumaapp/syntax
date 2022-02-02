/**
 * 
 */
package com.exam.test.security;

import org.springframework.security.authentication.AuthenticationProvider;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.AuthenticationException;
import org.springframework.stereotype.Component;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
@Component
public class CustomAuthenticationProvider implements AuthenticationProvider {

	@Override
	public Authentication authenticate(Authentication authentication) throws AuthenticationException {
		
		log.info("CustomAuthenticationProvider authenticate");
		String principal = (String) authentication.getPrincipal();
		String credentials = (String) authentication.getCredentials();
		
		log.info("details = "+authentication.getDetails());
		log.info("principal = "+principal);
		log.info("credentials = "+credentials);
		
		log.info("name = "+authentication.getName());
		
		return null;
	}

	@Override
	public boolean supports(Class<?> authentication) {
		// TODO Auto-generated method stub
		return (UsernamePasswordAuthenticationToken.class.isAssignableFrom(authentication));
	}

}
