/**
 * 
 */
package com.exam.test.config;

import org.springframework.context.annotation.Configuration;
import org.springframework.web.servlet.config.annotation.CorsRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;

/**
 * @author user
 *
 */
@Configuration
public class WebMvcConfigration implements WebMvcConfigurer {
	
	@Override
	public void addCorsMappings(CorsRegistry registry) {
		registry.addMapping("/**")
				// .allowedOrigins("http://localhost:8080", "ws://localhost:8080")
				.allowedOrigins("https://spring-vue-deploy-demo.firebaseapp.com", "http://localhost:8080", "https://localhost:3000", "ws://spring-vue-deploy-demo.firebaseapp.com")
				.allowedMethods("OPTIONS", "POST", "GET")
				.allowedHeaders("content-type", "Access-Control-Allow-Headers", "Authorization")
				.exposedHeaders("Authorization", "status", "Location");
	}
}
