package com.kjs.demo.controller;

import org.springframework.stereotype.Controller;
        import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class ViewController {

    @RequestMapping(value = {"/", "/about"})
    public String view() {
        return "forward:/index.html";
    }
}
