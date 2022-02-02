/**
 * 
 */
package com.test.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.test.api.entity.RoleEntity;

/**
 * @author user
 *
 */
public interface RoleRepository extends JpaRepository<RoleEntity, Long> {
	public RoleEntity findByRoleName(String roleName);
}
