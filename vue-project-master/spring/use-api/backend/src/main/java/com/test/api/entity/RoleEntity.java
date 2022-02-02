/**
 * 
 */
package com.test.api.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import lombok.Data;

/**
 * @author user
 *
 */
@Entity
@Table(name="role_tbl")
@Data
public class RoleEntity {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	public Long idx;
	
	@Column(name="role_name", length = 30, nullable = false, unique = true)
	public String roleName;
}
