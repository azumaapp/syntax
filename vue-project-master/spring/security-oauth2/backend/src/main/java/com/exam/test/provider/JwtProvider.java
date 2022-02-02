/**
 * 
 */
package com.exam.test.provider;

import java.io.IOException;
import java.util.Date;
import java.util.List;


import org.springframework.stereotype.Component;

import com.exam.test.security.SecurityConstants;

import io.jsonwebtoken.Claims;
import io.jsonwebtoken.ExpiredJwtException;
import io.jsonwebtoken.Jwts;
import io.jsonwebtoken.MalformedJwtException;
import io.jsonwebtoken.SignatureAlgorithm;
import io.jsonwebtoken.UnsupportedJwtException;
import io.jsonwebtoken.security.Keys;
import io.jsonwebtoken.security.SignatureException;
import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
@Component
public class JwtProvider {
	
	private String JWT_SECRET = SecurityConstants.JWT_SECRET;
	private String TOKEN_PREFIX = SecurityConstants.TOKEN_PREFIX;
	private String TOKEN_TYPE = SecurityConstants.TOKEN_TYPE;
	private String TOKEN_ISSUER = SecurityConstants.TOKEN_ISSUER;
	private String TOKEN_AUDIENCE = SecurityConstants.TOKEN_AUDIENCE;
	// private int TOKEN_EXPIRED = 864000000;
	private int TOKEN_EXPIRED = 1;
	
	private byte[] getSecretKey() {
		return JWT_SECRET.getBytes();
	}
	
	private String getReplaceToken(String token) {
		return token.replace(TOKEN_PREFIX, "");
	}
	
	public String createToken(String username, List<String> roles) {
		
		String token = Jwts.builder()
			.signWith(Keys.hmacShaKeyFor(getSecretKey()), SignatureAlgorithm.HS512)
			.setHeaderParam("typ", TOKEN_TYPE)
			.setIssuer(TOKEN_ISSUER)
			.setAudience(TOKEN_AUDIENCE)
			.setSubject(username)
			.setExpiration(new Date(System.currentTimeMillis() + TOKEN_EXPIRED))
			.claim("rol", roles)
			.compact();
		
		return token;
	}
	
	public String tokenValid(String token) throws IOException {
		
		String result = "false";
		
		try {
			Jwts.parser().setSigningKey(getSecretKey()).parseClaimsJws(getReplaceToken(token));
			result = "success";
		} catch (ExpiredJwtException exception) {
            log.warn("Request to parse expired JWT : {} failed : {}", token, exception.getMessage());
            result = exception.getMessage();
            // Refresh token을 사용할 경우 Refresh token을 가져온 후 유효한 토큰일 경우 result를 success로 바꾼 후 accessToken 발급
        } catch (UnsupportedJwtException exception) {
            log.warn("Request to parse unsupported JWT : {} failed : {}", token, exception.getMessage());
            result = exception.getMessage();
        } catch (MalformedJwtException exception) {
            log.warn("Request to parse invalid JWT : {} failed : {}", token, exception.getMessage());
            result = exception.getMessage();
        } catch (SignatureException exception) {
            log.warn("Request to parse JWT with invalid signature : {} failed : {}", token, exception.getMessage());
            result = exception.getMessage();
        } catch (IllegalArgumentException exception) {
            log.warn("Request to parse empty or null JWT : {} failed : {}", token, exception.getMessage());
            result = exception.getMessage();
        }
		
		return result;
	}
	
	public Claims tokenInfo(String token) {
		
		Claims claims = null;
		
		try {
			claims = Jwts.parser().setSigningKey(getSecretKey()).parseClaimsJws(getReplaceToken(token)).getBody();
		} catch (ExpiredJwtException exception) {
            log.warn("Request to parse expired JWT : {} failed : {}", token, exception.getMessage());
        } catch (UnsupportedJwtException exception) {
            log.warn("Request to parse unsupported JWT : {} failed : {}", token, exception.getMessage());
        } catch (MalformedJwtException exception) {
            log.warn("Request to parse invalid JWT : {} failed : {}", token, exception.getMessage());
        } catch (SignatureException exception) {
            log.warn("Request to parse JWT with invalid signature : {} failed : {}", token, exception.getMessage());
        } catch (IllegalArgumentException exception) {
            log.warn("Request to parse empty or null JWT : {} failed : {}", token, exception.getMessage());
        }
		
		return claims;
	}
}
