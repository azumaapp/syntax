/**
 * 
 */
package com.test.api.config;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.servlet.config.annotation.CorsRegistry;
import org.springframework.web.servlet.config.annotation.InterceptorRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;

import com.test.api.interceptor.UserInterceptor;

/**
 * @author user
 *
 */

@Configuration
// @EnableWebMvc // spring boot일 경우 필요없음
public class WebMvcConfig implements WebMvcConfigurer {

	@Bean
 	public UserInterceptor userInterceptor() {
		return new UserInterceptor();
	}
	
	@Override
	public void addInterceptors(InterceptorRegistry registry) {
		registry.addInterceptor(userInterceptor()).addPathPatterns("/user/**").excludePathPatterns("/user/loginCheck");
	}
	
	@Override
	public void addCorsMappings(CorsRegistry registry) {
		
		registry.addMapping("/**")	// 모든 매핑에 대한
				.allowedMethods("GET", "POST")
				.allowedOrigins("http://localhost:8080", "http://127.0.0.1:8080")
                .allowCredentials(true).maxAge(3600);
	}
}
