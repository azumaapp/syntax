package com.exam.test;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import lombok.extern.slf4j.Slf4j;

@Slf4j
@SpringBootApplication
public class SecurityOauth2Application {
	
	public static void main(String[] args) {
		log.info("##################################################");
		SpringApplication.run(SecurityOauth2Application.class, args);
	}

}
