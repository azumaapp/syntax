/**
 * 
 */
package com.exam.test;

import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.security.crypto.password.PasswordEncoder;

import com.exam.test.entity.UserEntity;
import com.exam.test.repository.RoleRepository;
import com.exam.test.repository.UserRepository;

/**
 * @author user
 *
 */
@SpringBootTest
public class AddMemberTest {

	@Autowired
	UserRepository userRepo;
	
	@Autowired
	RoleRepository roleRepo;

	@Autowired
	PasswordEncoder passwordEncoder;
	
	@Test
	public void test() {
		
		UserEntity user = new UserEntity();
		
		
		for(int i=0; i<100; i++) {
			
			user.setUserId("test00"+i);
			user.setUserPw(passwordEncoder.encode("123456"));
			user.setRoles(roleRepo.findByRole("USER"));
			
			userRepo.save(user);
			user = new UserEntity();
		}
		
	}
}
