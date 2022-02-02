/**
 * 
 */
package com.exam.test.security;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.userdetails.User;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

import com.exam.test.entity.UserEntity;
import com.exam.test.repository.UserRepository;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Service
@Slf4j
public class UserDetailsServiceImpl implements UserDetailsService {

	@Autowired
	UserRepository userRepo;
	
	@Override
	public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
		
		log.info("UserDetailsServiceImpl loadUserByusername");
		
		UserEntity user = userRepo.findByUserId(username);
		if(user == null) {
			throw new UsernameNotFoundException(username);
		}

		List<GrantedAuthority> authorities = new ArrayList<>();
		authorities.add(new SimpleGrantedAuthority(user.getRoles().getRole()));
		
		return new User(username, user.getUserPw(), authorities);
	}
}
