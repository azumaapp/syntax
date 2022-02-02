/**
 * 
 */
package com.exam.test.vo;

import lombok.Data;

/**
 * @author user
 *
 */
@Data
public class AuthoritiesVO {
	
	private Object attributes;
	private String authority;
	private TokenIdVO idToken;
	private String userInfo;
}
