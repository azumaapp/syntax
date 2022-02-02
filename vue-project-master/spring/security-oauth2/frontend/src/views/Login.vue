<template>
  <LoginComponent />
</template>

<script>
import LoginComponent from '../components/Login'

export default {
  data: () => ({
    userId: '',
    userPw: ''
  }),
  methods: {
    login: function () {
      this.$store.dispatch('login', {id: this.userId, pw: this.userPw})
    } // login
  }, // methods
  components: {
    LoginComponent
  }
}
</script>
