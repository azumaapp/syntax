/**
 * 
 */
package com.exam.test.controller;

import java.io.IOException;
import java.net.URISyntaxException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
@RestController
public class DemoController {

	@RequestMapping("/test")
	public void test(HttpServletRequest req, HttpServletResponse res) throws URISyntaxException, IOException {
		log.info("DemoController test");
	}
}
