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
public class TokenIdVO {

	private String tokenValue;
	private String accessTokenHash;
	private String email;
}
