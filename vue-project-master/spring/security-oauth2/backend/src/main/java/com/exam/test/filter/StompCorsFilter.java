package com.exam.test.filter;

import java.io.IOException;

import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.HttpServletResponse;

public class StompCorsFilter implements Filter {

	@Override
	public void doFilter(ServletRequest request, ServletResponse response, FilterChain chain)
			throws IOException, ServletException {
		HttpServletResponse res = (HttpServletResponse) response;
		res.setHeader("Access-Control-Allow-Origin", "http://localhost:8080");
		// res.setHeader("Access-Control-Allow-Origin", "https://spring-vue-deploy-demo.firebaseapp.com");
		res.setHeader("Access-Control-Allow-Credentials", "true");
		
		chain.doFilter(request, response);
	}

}
