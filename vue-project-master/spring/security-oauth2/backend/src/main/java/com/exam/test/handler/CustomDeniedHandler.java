/**
 * 
 */
package com.exam.test.handler;

import java.io.IOException;
import java.time.LocalDateTime;
import java.util.HashMap;
import java.util.Map;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.security.access.AccessDeniedException;
import org.springframework.security.web.access.AccessDeniedHandler;
import org.springframework.stereotype.Component;

import com.fasterxml.jackson.databind.ObjectMapper;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
@Component
public class CustomDeniedHandler implements AccessDeniedHandler {

	@Override
	public void handle(HttpServletRequest request, HttpServletResponse response,
			AccessDeniedException accessDeniedException) throws IOException, ServletException {
		log.info("CustomDeniedHandler handle");
		
		response.setContentType("application/json;charset=UTF-8");
        response.setStatus(403);
        response.setLocale(null);
        Map<String, String> map = new HashMap<String, String>();
        map.put("message", accessDeniedException.getMessage());
        map.put("timestamp", LocalDateTime.now().toString());
        
        ObjectMapper objectMapper = new ObjectMapper();
        response.getWriter().write(objectMapper.writeValueAsString(map));
	}

}
