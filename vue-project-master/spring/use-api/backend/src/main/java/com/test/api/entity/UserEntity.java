/**
 * 
 */
package com.test.api.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

import lombok.Data;

/**
 * @author user
 *
 */
@Entity
@Data
@Table(name="user_tbl")
public class UserEntity {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	public Long idx;
	
	@Column(name="user_id", unique = true, length = 20, nullable = false)
	public String userId;
	
	@Column(name="user_pw", nullable = false)
	public String userPw;
	
	@OneToOne
	@JoinColumn(name="role_idx")
	public RoleEntity roleIdx;

	@Column(name="user_name", length = 30)
	public String userName;

	@Column(name="refresh_token")
	public String refreshToken;
}
