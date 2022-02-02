/**
 * 
 */
package com.exam.test.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

/**
 * @author user
 *
 */
@RequestMapping("admin")
@RestController
public class AdminController {

	@GetMapping({"/demo", "/"})
	public String demo() {
		return "ADMIN DEMO PAGE";
	}
}
