import Vue from 'vue'
import Vuex from 'vuex'
import router from '../routes/router';
import Axios from 'axios';
import qs from 'querystring'

Vue.use(Vuex)

function parseJwt (tokenValue) {
  const token =  tokenValue.replace("Bearer ", "");
  var base64Url = token.split('.')[1];
  var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
  var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
      return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
  }).join(''));

  return JSON.parse(jsonPayload);
};

export default new Vuex.Store({
  state: {
    token: localStorage.getItem('token'),
    username: localStorage.getItem('token') == null ? null : parseJwt(localStorage.getItem('token')).sub
  },

  // state 값을 변경하는 부분
  mutations: {
    removeToken: function (state, payload) {
      state.token = null
      state.username = null
    },
    addToken: function (state, payload) {
      state.token = localStorage.getItem('token');
      state.username = state.token == null ? null : parseJwt(localStorage.getItem('token')).sub
    }
  },
  actions: {
    login: function (context, payload) {

      axios.post("/login", qs.stringify({
        username: payload.id,
        password: payload.pw
      }), {
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      }).then(result => {
        // console.log(result);
        const token = result.headers.authorization;
        if(token !== undefined) {
          localStorage.setItem('token', token);
          
          context.commit('addToken');
          router.push("/");
        } else {
          alert("정보가 없습니다.");
        }
      })
    }, // login
    logout: function (context) {
      localStorage.removeItem('token')
      context.commit('removeToken')
    }, // logout
    addToken: function (context, payload) {
      localStorage.setItem('token', payload);
      context.commit('addToken');
    }
  },

  getters: {
    getToken: function (state) {
      return state.token
    },
    getUsername: function(state) {
      return state.username
    } 
  }
})
