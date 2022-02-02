/**
 * 
 */
package com.exam.test.controller;

import java.util.Iterator;
import java.util.Map;

import org.springframework.messaging.handler.annotation.MessageMapping;
import org.springframework.messaging.handler.annotation.SendTo;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import com.exam.test.controller.ChatController;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
@RestController
public class ChatController {

	@MessageMapping("/chat")
    @SendTo("/topic/greetings")
    public Map<String, String> greeting(@RequestBody Map<String, String> map) {
		log.info("#############################");
		Iterator<String> it = map.keySet().iterator();
		while(it.hasNext()) {
			String key = it.next();
			log.info(key+": "+map.get(key));
		}
		
		return map;
    }
}