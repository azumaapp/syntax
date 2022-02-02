/**
 * 
 */
package com.exam.test.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.exam.test.entity.RolesEntity;

/**
 * @author user
 *
 */
@Repository
public interface RoleRepository extends JpaRepository<RolesEntity, Long> {
	public RolesEntity findByRole(String role);
}
