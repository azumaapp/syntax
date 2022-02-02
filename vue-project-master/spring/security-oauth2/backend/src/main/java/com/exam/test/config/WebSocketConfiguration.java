/**
 * 
 */
package com.exam.test.config;

import org.springframework.context.annotation.Configuration;
import org.springframework.messaging.simp.config.MessageBrokerRegistry;
import org.springframework.web.socket.config.annotation.EnableWebSocketMessageBroker;
import org.springframework.web.socket.config.annotation.StompEndpointRegistry;
import org.springframework.web.socket.config.annotation.WebSocketMessageBrokerConfigurer;

/**
 * @author user
 *
 */

@Configuration
@EnableWebSocketMessageBroker
public class WebSocketConfiguration implements WebSocketMessageBrokerConfigurer {
	
	// enableSimpleBroker: 클라이언트로 메세지를 응답해줄 때 prefix를 정의
	// setApplicationDestinationPrefixes: 클라이언트에서 메세지를 송신시 붙여줄 prefix 정의
	@Override
	public void configureMessageBroker(MessageBrokerRegistry registry) {
		registry.enableSimpleBroker("/topic");
		registry.setApplicationDestinationPrefixes("/app");
	}
	
	// 최초 소켓을 연결을 하는 경우, endpoint가 되는 url
	// 추후 javascript에서 SockJS 생성자를 통해 연결
	@Override
    public void registerStompEndpoints(StompEndpointRegistry registry) {		
        registry.addEndpoint("/spring-websocket") // 접속요청 URL
        		.setAllowedOrigins("*").withSockJS();
    }
}
