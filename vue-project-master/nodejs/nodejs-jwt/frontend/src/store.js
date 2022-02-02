import Vue from 'vue'
import Vuex from 'vuex'
import router from './routes/router';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    token: localStorage.getItem('token')
  },

  // state 값을 변경하는 부분
  mutations: {
    removeToken: function (state, payload) {
      state.token = null
    },
    addToken: function (state, payload) {
      state.token = localStorage.getItem('token');
    }
  },
  actions: {
    login: function (context, payload) {

      axios.post('/user/loginCheck', {
        userId: payload.id,
        userPw: payload.pw
      }).then((result) => {
        const resultData = result.data
        if (resultData.check === 1) {
          // localstorage에 토큰 저장 후 메인 화면으로 이동
          localStorage.setItem('token', resultData.token);
          context.commit('addToken');
          router.push("/");
        } else {
          alert('login failure')
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
    }
  }
})
