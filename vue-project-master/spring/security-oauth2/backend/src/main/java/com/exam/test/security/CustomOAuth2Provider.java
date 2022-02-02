/**
 * 
 */
package com.exam.test.security;

import org.springframework.security.oauth2.client.registration.ClientRegistration;
import org.springframework.security.oauth2.core.AuthorizationGrantType;
import org.springframework.security.oauth2.core.ClientAuthenticationMethod;

/**
 * @author user
 *
 */
/*
 * OAuth2Client에 필요한 정보들이 추가되어 있는 Builder 반환
 * 정보: redirect_uri, authorizationUri, tokenUri, userInfoUri
 */
public enum CustomOAuth2Provider {
	
    KAKAO {
    	
        @Override
        public ClientRegistration.Builder getBuilder(String registrationId) {
        	ClientRegistration.Builder builder = getBuilder(registrationId, ClientAuthenticationMethod.POST, DEFAULT_REDIRECT_URL);
        	builder.scope("profile");
        	builder.authorizationUri("https://nid.naver.com/oauth2.0/authorize");
        	builder.tokenUri("https://nid.naver.com/oauth2.0/token");
        	builder.userInfoUri("https://openapi.naver.com/v1/nid/me");
        	builder.userNameAttributeName("id");
        	builder.clientName("Kakao");
          return builder;
        }
        
    },
    
    NAVER {
    	
        @Override
        public ClientRegistration.Builder getBuilder(String registrationId) {
        	ClientRegistration.Builder builder = getBuilder(registrationId, ClientAuthenticationMethod.POST, DEFAULT_REDIRECT_URL);
        	builder.scope("profile");
        	builder.authorizationUri("https://nid.naver.com/oauth2.0/authorize");
        	builder.tokenUri("https://nid.naver.com/oauth2.0/token");
        	builder.userInfoUri("https://openapi.naver.com/v1/nid/me");
        	builder.userNameAttributeName("id");
        	builder.clientName("Naver");
          return builder;
        }
        
    };
	
    private static final String DEFAULT_REDIRECT_URL = "{baseUrl}/login/oauth2/code/{registrationId}";
    
    protected final ClientRegistration.Builder getBuilder(String registrationId, ClientAuthenticationMethod method, String redirectUri) {
		ClientRegistration.Builder builder = ClientRegistration.withRegistrationId(registrationId);
		builder.clientAuthenticationMethod(method);
		builder.authorizationGrantType(AuthorizationGrantType.AUTHORIZATION_CODE);
		builder.redirectUriTemplate(redirectUri);
		return builder;
	}
    
    public abstract ClientRegistration.Builder getBuilder(String registrationId);
}
