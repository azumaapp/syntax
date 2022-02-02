/**
 * 
 */
package com.test.api.controller;

import java.util.Enumeration;
import java.util.Iterator;
import java.util.Map;

import javax.servlet.http.HttpServletRequest;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.servlet.ModelAndView;

import com.test.api.config.HttpConnection;
import com.test.api.config.JwtProvider;
import com.test.api.entity.UserEntity;
import com.test.api.repository.UserRepository;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@RestController
@Slf4j
public class DemoController {
	
	@Autowired
	UserRepository userRepo;
	
	@Autowired
	JwtProvider jwt;
	
	@RequestMapping("/")
	public String demo() {
		
		UserEntity user = userRepo.findByUserId("test");
		
		String token = jwt.createToken(user);
		log.info(""+jwt.tokenCheck(token));
		return token;
	}
	
	@RequestMapping("test")
	public ModelAndView test(HttpServletRequest request, @RequestParam Map<String, String> map) throws Exception {
		
		Enumeration<String> headerNames = request.getHeaderNames();
		while(headerNames.hasMoreElements()) {
			String key = headerNames.nextElement();
			String value = request.getHeader(key);
			log.info(key+": "+value);
		}
		
		String requestUrl = "https://nid.naver.com/oauth2.0/token";
		String parameters = "grant_type=authorization_code&client_id=GhIlT_MuU_qke9rxjV8q&client_secret=5TU0Q885AU";
		
		Iterator<String> keys = map.keySet().iterator();
		while(keys.hasNext()) {
			String key = keys.next();
			// log.info("key: "+key+", value: "+map.get(key));
			parameters += "&"+key+"="+map.get(key);
		}
		
		HttpConnection http = new HttpConnection();
		Map<String, Object> map1 = http.sendPost(requestUrl, parameters);
		
		String accessToken = (String) map1.get("access_token");
		// String refreshToken = (String) map1.get("refresh_token");
		
		if((Integer) map1.get("response_code") == 200) {
			// response.setHeader("Authorization", accessToken);
		}
		
		// get 방식 redirect가 아닌 POST 방식이나 header로 vue client에 값을 전송할 수 있는지 확인해보기
		return new ModelAndView("redirect:http://127.0.0.1:8080?token="+accessToken);
	}
	
	@RequestMapping("test1")
	public void test(HttpServletRequest request) throws Exception {
		
		Enumeration<String> headerNames = request.getHeaderNames();
		while(headerNames.hasMoreElements()) {
			String key = headerNames.nextElement();
			String value = request.getHeader(key);
			log.info(key+": "+value);
		}
		
		// return request.getHeader("Authorization");
	}
	
}
