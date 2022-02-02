/**
 * 
 */
package com.exam.test.config;

import java.util.Arrays;

import org.springframework.boot.web.servlet.FilterRegistrationBean;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import com.exam.test.filter.StompCorsFilter;


/**
 * @author user
 *
 */
@Configuration
public class StompConfiguration {
	
	@Bean
	public FilterRegistrationBean<StompCorsFilter> stompFilter() {
		FilterRegistrationBean<StompCorsFilter> bean = new FilterRegistrationBean<>();
		bean.setFilter(new StompCorsFilter());
		bean.setUrlPatterns(Arrays.asList("/spring-websocket/*"));
		return bean;
	}
	
	// cookie domain regist configuration
//	@Bean
//	public WebServerFactoryCustomizer<TomcatServletWebServerFactory> cookieProcessorCustomizer() {
//	    return (serverFactory) -> serverFactory.addContextCustomizers(
//	            (context) -> context.setCookieProcessor(new LegacyCookieProcessor()));
//	}
}
