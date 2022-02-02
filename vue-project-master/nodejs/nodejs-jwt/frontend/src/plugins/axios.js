"use strict";

import Vue from 'vue'
import axios from 'axios'
import router from '../routes/router'
import store from '../store'

// Full config:  https://github.com/axios/axios#request-config
// axios.defaults.baseURL = process.env.baseURL || process.env.apiUrl || '';
// axios.defaults.headers.common['Authorization'] = AUTH_TOKEN;
// axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';

let config = {
  baseURL: 'http://127.0.0.1:3000'
  // baseURL: process.env.baseURL || process.env.apiUrl || ""
  // timeout: 60 * 1000, // Timeout
  // withCredentials: true, // Check cross-site Access-Control
};

// 이 방식으로 할경우 새로고침을 하지 않으면 header 안에 있는 Authorization 값이 바뀌지 않음
// axios.defaults.headers.common['Authorization'] = localStorage.getItem("token");

const _axios = axios.create(config);

_axios.interceptors.request.use(
  function(config) {
    // 수정 부분 요청 할 때마다 localstorage 값을 가져오는 방식으로 사용
    // ###########################################################
    // 이 부분 vuex에 접근해서 토큰 값을 가져오는 걸로 해보기()
    // ###########################################################
    config.headers.common['Authorization'] = localStorage.getItem("token");
    return config;
  },
  function(error) {
    // Do something with request error
    return Promise.reject(error);
  }
);

// Add a response interceptor
_axios.interceptors.response.use(
  function(response) {
    // Do something with response data

    const configData = response.config;
    const currentUrl = configData.url.replace(configData.baseURL, '');

    // alert(currentUrl.indexOf('/user/idCheck/'));
    // REST 방식으로 값을 넘겨주는 URL 모음
    

    // axios 사용 시 interceptor 안거치는 배열
    const excludeUrls = ['/user/loginCheck', '/user/insert', '/user/idCheck/'];
    // alert(excludeUrls.indexOf(currentUrl));

    
    let result = -1;
    
    excludeUrls.find(function(element) {
      if(currentUrl.indexOf(element) === 0) {
        result = 0;
        return;
      }
    });

    // interceptor를 거쳐야하는 부분
    if(result === -1) {

      const token = response.headers.authorization;

      // 리프레쉬 토큰을 사용하여 access 토큰을 발급한 경우
      if(token) {
        store.dispatch('addToken', token);
      } else {
        const msg = response.data.msg;
        // 사용가능한 토큰이 아닐경우
        // 토큰을 없애고 다시 로그인 유도
        if(msg) {
          alert(msg);
          // 로그인 유도
          if(msg !== "Access Denied") {
            localStorage.removeItem("token");
            router.push("/login");
          } else {
            router.push("/");
          }
          
          // location.href="/login";
          throw new axios.Cancel(msg);
          
        }
        // else {}  // 사용가능한 access 토큰일 경우
      }
    }
    return response;
  },
  function(error) {
    // Do something with response error
    return Promise.reject(error);
  }
);

Plugin.install = function(Vue, options) {
  Vue.axios = _axios;
  window.axios = _axios;
  Object.defineProperties(Vue.prototype, {
    axios: {
      get() {
        return _axios;
      }
    },
    $axios: {
      get() {
        return _axios;
      }
    },
  });
};

Vue.use(Plugin)

export default Plugin;
