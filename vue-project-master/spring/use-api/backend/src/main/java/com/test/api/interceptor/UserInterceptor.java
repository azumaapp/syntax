/**
 * 
 */
package com.test.api.interceptor;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.web.servlet.HandlerInterceptor;
import org.springframework.web.servlet.ModelAndView;

import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
public class UserInterceptor implements HandlerInterceptor {

	
	@Override
    public boolean preHandle(HttpServletRequest request, HttpServletResponse response, Object handler) 
    		throws Exception {
		
		boolean flag = false;
		
		if(!request.getMethod().equals("OPTIONS")) {
			log.info(request.getHeader("Authorization"));
			
		} else {
			log.info("OPTIONS");
			response.setHeader("Access-Control-Allow-Origin", "*");
			response.setHeader("Access-Control-Allow-Headers", "authorization");
			
			flag = false;
		}
		
        return flag;
    }
 
    @Override
    public void postHandle(HttpServletRequest request, HttpServletResponse response, Object handler,
            ModelAndView modelAndView) throws Exception {
        
    }
 
    @Override
    public void afterCompletion(HttpServletRequest request, HttpServletResponse response, Object handler, Exception ex)
            throws Exception {
        
    }
}
