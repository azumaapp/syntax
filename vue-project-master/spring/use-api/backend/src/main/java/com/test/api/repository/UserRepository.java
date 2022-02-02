/**
 * 
 */
package com.test.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.test.api.entity.UserEntity;

/**
 * @author user
 *
 */
public interface UserRepository extends JpaRepository<UserEntity, Long> {
	public UserEntity findByUserId(String userId);
	public UserEntity findByUserIdAndUserPw(String userId, String userPw);
}
