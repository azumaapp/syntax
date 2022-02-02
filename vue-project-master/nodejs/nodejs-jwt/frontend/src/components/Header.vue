<template>
    <v-app-bar app v-if="!urlArr.includes(this.$route.path)">
      <v-toolbar-title class="headline text-uppercase">
        <span>Vuetify</span>
        <!-- <span class="font-weight-light">MATERIAL DESIGN</span> -->
        <span class="font-weight-light">{{urlArr}}</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <!-- <v-btn text href="/login" target="_blank"> -->
      <v-btn text href="/login" v-if="getToken === null">
        <span class="mr-2">LOGIN</span>
      </v-btn>
      <v-btn text @click="logoutBtn" v-else>
        <span class="mr-2">LOGOUT</span>
      </v-btn>
    </v-app-bar>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  data: () => ({
    urlArr: ['/login', '/join']
  }),
  computed: {
    ...mapGetters([
      'getToken'
    ])
  },
  methods: {
    // 화살표 함수를 쓸 경우 this.$store 사용 불가(이유 찾아보기)
    /*
    // this.$store of undefiend
    logoutBtn: () => {
      this.$store.commit('removeToken');
    },
    */
    logoutBtn: function () {
      this.$store.dispatch('logout')
    }
  }
}
</script>
