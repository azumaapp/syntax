<template>
  <v-container>
    <v-layout
      text-center
      wrap
    >
      <v-flex xs12>
        <v-img
          :src="require('../assets/logo.svg')"
          class="my-3"
          contain
          height="200"
        ></v-img>
      </v-flex>

      <v-flex>
        <!-- <v-btn @click="tokenCheck">test</v-btn> -->
        <v-btn @click="$router.push('chat')">Chat</v-btn>
      </v-flex>
      
    </v-layout>
  </v-container>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  data: () => ({}),
  computed: {
    ...mapGetters([
      'getToken'
    ])
  },
  methods: {
    /*
    tokenCheck: function () {
      // console.log(localStorage.getItem("token"));
      // console.log(this.$store.state.token);
      // axios.get('/admin/demo').then(result => {
      axios.get('/test').then(result => {
      // axios.get('/admin/test').then(result => {
        console.log(result);
        console.log(document.cookie)
      }).catch(err => {
        console.log(err.response)
        alert(err.response.data.message);
        // localStorage.removeItem("token");
        // location.href="/login";
      })
    } // tokenCheck Method
    */
  } // methods
}
</script>
