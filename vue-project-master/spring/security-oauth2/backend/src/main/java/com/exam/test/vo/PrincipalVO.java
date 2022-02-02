/**
 * 
 */
package com.exam.test.vo;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;

import lombok.Data;

/**
 * @author user
 *
 */
@Data
@JsonIgnoreProperties(ignoreUnknown = true)
public class PrincipalVO {
	
	private String accessTokenHash;
	private String email;
	private String fullName;
}
