package com.test.api.user;

import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;

import com.test.api.entity.UserEntity;
import com.test.api.repository.RoleRepository;
import com.test.api.repository.UserRepository;

@SpringBootTest
class UserInsertTest {

	@Autowired
	UserRepository userRepo;
	
	@Autowired
	RoleRepository roleRepo;
	
	@Test
	void contextLoads() {
		
		UserEntity user = new UserEntity();
		
		user.setUserId("test2");
		user.setUserPw("123456");
		user.setUserName("test2");
		
		user.setRoleIdx(roleRepo.findByRoleName("user"));
		
		userRepo.save(user);
	}

}
