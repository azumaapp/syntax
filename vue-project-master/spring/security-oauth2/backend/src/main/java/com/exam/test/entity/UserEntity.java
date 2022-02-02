/**
 * 
 */
package com.exam.test.entity;

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
	private Long idx;
	
	@Column(name="user_id", length = 20, unique = true, nullable=false)
	private String userId;
	
	@Column(name="user_pw", nullable = false)
	private String userPw;
	
	@OneToOne
	@JoinColumn(name="role_idx")
	private RolesEntity roles;
}
