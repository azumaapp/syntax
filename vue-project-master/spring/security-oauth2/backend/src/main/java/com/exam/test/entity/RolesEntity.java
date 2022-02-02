/**
 * 
 */
package com.exam.test.entity;

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
@Data
@Table(name="roles_tbl")
public class RolesEntity {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long idx;
	
	@Column(unique = true, nullable = false, length = 10)
	private String role;
}
