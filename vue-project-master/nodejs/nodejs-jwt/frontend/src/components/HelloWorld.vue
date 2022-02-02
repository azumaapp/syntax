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
        {{ this.$store.state.token }}       <!-- state 직접 접근 -->
        {{ this.$store.getters.getToken }}  <!-- getters 직접 접근 -->
        {{ getToken }}                      <!-- App.vue의 mapGetters 사용 -->
      </v-flex>

      <v-flex>
        <v-btn @click="tokenCheck">test</v-btn>
      </v-flex>
      
    </v-layout>
  </v-container>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  data: () => ({
    ecosystem: [
      {
        text: 'vuetify-loader',
        href: 'https://github.com/vuetifyjs/vuetify-loader'
      },
      {
        text: 'github',
        href: 'https://github.com/vuetifyjs/vuetify'
      },
      {
        text: 'awesome-vuetify',
        href: 'https://github.com/vuetifyjs/awesome-vuetify'
      }
    ],
    importantLinks: [
      {
        text: 'Documentation',
        href: 'https://vuetifyjs.com'
      },
      {
        text: 'Chat',
        href: 'https://community.vuetifyjs.com'
      },
      {
        text: 'Made with Vuetify',
        href: 'https://madewithvuejs.com/vuetify'
      },
      {
        text: 'Twitter',
        href: 'https://twitter.com/vuetifyjs'
      },
      {
        text: 'Articles',
        href: 'https://medium.com/vuetify'
      }
    ],
    whatsNext: [
      {
        text: 'Explore components',
        href: 'https://vuetifyjs.com/components/api-explorer'
      },
      {
        text: 'Select a layout',
        href: 'https://vuetifyjs.com/layout/pre-defined'
      },
      {
        text: 'Frequently Asked Questions',
        href: 'https://vuetifyjs.com/getting-started/frequently-asked-questions'
      }
    ]
  }),
  computed: {
    ...mapGetters([
      'getToken'
    ])
  },
  methods: {
    removeToken: function () {
      this.$store.commit('removeToken')
    },
    tokenCheck: function () {
      // console.log(localStorage.getItem("token"));
      // console.log(this.$store.state.token);
      axios.post('/user/test').then(result => {
        console.log('start');
      })
    }
  }
}
</script>
