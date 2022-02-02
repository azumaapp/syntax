/**
 * 
 */
package com.exam.test.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.exam.test.entity.UserEntity;

/**
 * @author user
 *
 */
@Repository
public interface UserRepository extends JpaRepository<UserEntity, Long> {
	public UserEntity findByUserId(String userId);
}
