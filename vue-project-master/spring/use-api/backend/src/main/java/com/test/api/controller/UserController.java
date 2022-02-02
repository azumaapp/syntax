/**
 * 
 */
package com.test.api.controller;

import java.util.HashMap;
import java.util.Map;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestHeader;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.test.api.config.JwtProvider;
import com.test.api.entity.UserEntity;
import com.test.api.repository.UserRepository;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */

@RestController
@RequestMapping("user")
@Slf4j
public class UserController {
	
	@Autowired
	UserRepository userRepo;
	
	@Autowired
	JwtProvider jp;
	
	@PostMapping("test")
	public Object test(HttpServletRequest req, @RequestHeader(required = false, value="Authorization") String accessToken) {
		
		log.info(req.getHeader("authorization"));
		log.info("Success");
		
		return userRepo.findAll();
	}
	
	@PostMapping("loginCheck")
	public Map<String, Object> loginCheck(@RequestBody UserEntity user, HttpServletResponse res) {
		
		Map<String, Object> returnMap = new HashMap<>();
		
		UserEntity checkUser = userRepo.findByUserIdAndUserPw(user.getUserId(), user.getUserPw());
		String token = jp.createToken(checkUser);
		
		if(checkUser == null) {
			returnMap.put("check", 0);
		} else {
			returnMap.put("check", 1);
			returnMap.put("token", token);
		}
		
		return returnMap;
	}
	
	
}
