import Vue from 'vue'
import Router from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/Login.vue'
import Join from '../views/Join.vue'
import AdminHome from '../views/admin/AdminHome'
import store from '../store'
import jwt_decode from 'jwt-decode'

Vue.use(Router)

const adminCheck = () => (to, from, next) => {
  const token = store.getters.getToken;

  // 토큰이 없을 경우
  if(token === null || token === "") {
    alert("로그인 후 다시 시도해 주시기 바랍니다.");
    next("/");

  // 토큰이 존재할 경우 
  } else {
    const decoded = jwt_decode(token);
    if(decoded.roleName !== "admin") {
      alert(`${decoded.roleName}는 접근할 수 없습니다.`);
      next("/");
    }
  }
  
  return next();   // 인증 성공 시
};

const test = () => (to, from, next) => {
  console.log(to);
  console.log(from)
  
  
  // return next();   // 인증 성공 시
};

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    { path: '/', name: 'home', component: Home, beforeEnter: test() },
    { path: '/login', name: 'login', component: Login },
    { path: '/join', name: 'join', component: Join },
    { path: '/admin', name: 'adminHome', component: AdminHome, beforeEnter: adminCheck() }
  ]
})


/*
{
  path: '/about',
  name: 'about',
  // route level code-splitting
  // this generates a separate chunk (about.[hash].js) for this route
  // which is lazy-loaded when the route is visited.
  component: () => import(
    // webpackChunkName: "about" 
  '../views/About.vue')
}
*/