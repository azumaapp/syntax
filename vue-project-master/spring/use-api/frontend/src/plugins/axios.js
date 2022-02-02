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
  // baseURL: 'http://localhost:8181/api'
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
    // config.headers.common['Content-Type'] = 'application/json'
    // config.headers.common['Content-Type'] = 'application/x-www-form-urlencoded'
    // config.headers.common['access-control-allow-origin'] = "*"
    // config.headers.common['Sec-Fetch-Site'] = "same-origin"
    config.headers.common['Authorization'] = localStorage.getItem("token")
    
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
