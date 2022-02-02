/**
 * 
 */
package com.test.api.config;

import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.InputStreamReader;
import java.net.URL;
import java.util.HashMap;
import java.util.Map;

import javax.net.ssl.HttpsURLConnection;
import lombok.extern.slf4j.Slf4j;

/**
 * @author user
 *
 */
@Slf4j
public class HttpConnection {

	// HTTP POST request 
	public Map<String, Object> sendPost(String targetUrl, String parameters) throws Exception {
		
		URL url = new URL(targetUrl);
		HttpsURLConnection con = (HttpsURLConnection) url.openConnection();
		
		con.setRequestMethod("POST");	// HTTP POST 메소드 설정
		con.setDoOutput(true);	// POST 파라미터 전달을 위한 설정
		// con.setRequestProperty("User-Agent", USER_AGENT);
		
		// Send post request 
		DataOutputStream wr = new DataOutputStream(con.getOutputStream());
		
		wr.writeBytes(parameters);
		wr.flush();
		wr.close();
		
		int responseCode = con.getResponseCode(); 
		BufferedReader in = new BufferedReader(new InputStreamReader(con.getInputStream()));
		String inputLine = in.readLine(); 
		in.close();
		
		Map<String, Object> map = new HashMap<>();
		map.put("response_code", responseCode);
		String datas[] = inputLine.toString().replace("{", "").replace("}", "").replace("\"", "").split(",");
		
		for(String data : datas) {
			String[] arr = data.split(":");
			map.put(arr[0], arr[1]);
		}

		// print result 
		log.info("HTTP 응답 코드 : " + responseCode);
		
		
		// Map<String, Object> map = new ObjectMapper().readValue(response.toString(), HashMap.class);		
		return map;
	}
}
