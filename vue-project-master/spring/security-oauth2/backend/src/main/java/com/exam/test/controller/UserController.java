package com.exam.test.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import lombok.extern.slf4j.Slf4j;

@RequestMapping("user")
@RestController
@Slf4j
public class UserController {

	@GetMapping({"/demo", "/", "/test"})
	public String demo() {
		log.info("UserController demo");
		return "User DEMO PAGE";
	}
}
