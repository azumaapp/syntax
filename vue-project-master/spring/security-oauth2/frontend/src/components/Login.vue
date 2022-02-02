<template>
    <v-container
    class="fill-height"
    fluid
    >
        <v-row
            align="center"
            justify="center"
        >
            <v-col
            cols="12"
            sm="8"
            md="4"
            >
            <v-card class="elevation-12">
                <v-toolbar
                color="primary"
                dark
                flat
                >
                <v-toolbar-title>Login form</v-toolbar-title>
                <v-spacer></v-spacer>

                <v-tooltip right>
                    <template v-slot:activator="{ on }">
                    <v-btn
                        @click="$router.push('/join')"
                        color="primary"
                    >
                        JOIN
                    </v-btn>
                    </template>
                    <span>Codepen</span>
                </v-tooltip>
                </v-toolbar>
                <v-card-text>
                <v-form>
                    <v-text-field
                    label="Login"
                    name="login"
                    prepend-icon="person"
                    type="text"
                    v-model="userId"
                    ></v-text-field>

                    <v-text-field
                    label="Password"
                    autocomplete="off"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                    v-model="userPw"
                    ></v-text-field>
                </v-form>
                </v-card-text>
                <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" @click="login">Login</v-btn>
                
                </v-card-actions>
                <v-card-actions>
                <v-img
                    :src="require('../assets/facebook_login.png')"
                    class="my-3"
                    contain
                    height="50"
                    width="1"
                    @click="loginFacebook"
                ></v-img>
                <v-img
                    :src="require('../assets/naver_login.png')"
                    class="my-3"
                    contain
                    height="50"
                    width="1"
                    @click="loginNaver"
                ></v-img>
                <v-img
                    :src="require('../assets/kakao_login.png')"
                    class="my-3"
                    contain
                    height="50"
                    width="1"
                    @click="loginKakao"
                ></v-img>
                <v-img
                    :src="require('../assets/google_login.png')"
                    class="my-3"
                    contain
                    height="50"
                    width="1"
                    @click="loginGoogle"
                ></v-img>
              </v-card-actions>
            </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
function randomString() {
    return Math.random().toString(36).substring(2, 15);
}
export default {
  data: () => ({
    userId: '',
    userPw: '',
    facebook: {
        url: "https://www.facebook.com/dialog/oauth",
        client_id: 457224128230213,
        redirect_uri: "http://localhost:3000/api/oauth2/authorize-client/facebook"
        // redirect_uri: "https://test.spring-vue-deploy-demo.firebaseapp.com:3000/oauth2/authorize-client/facebook"
    },
    naver: {
        url: "https://nid.naver.com/oauth2.0/authorize?response_type=code",
        client_id: "GhIlT_MuU_qke9rxjV8q",
        redirect_uri: "http://localhost:3000/api/oauth2/authorize-client/naver"
        // redirect_uri: "https://test.spring-vue-deploy-demo.firebaseapp.com:3000/oauth2/authorize-client/naver"
    }, 
    google: {
        url: "https://accounts.google.com/o/oauth2/v2/auth?response_type=code&scope=openid",
        client_id: "659835413987-9g3fb7q88rpvfcdp4a4io568qv5lmehc.apps.googleusercontent.com",
        redirect_uri: "http://localhost:3000/api/oauth2/authorize-client/google"
        // redirect_uri: "https://test.spring-vue-deploy-demo.firebaseapp.com:3000/oauth2/authorize-client/google"
    },
    kakao: {
        url: "https://kauth.kakao.com/oauth/authorize?response_type=code&scope=profile",
        client_id: "1026731d07732a439790b2935243d042",
        redirect_uri: "http://localhost:3000/api/oauth2/authorize-client/kakao"
        // redirect_uri: "https://test.spring-vue-deploy-demo.firebaseapp.com:3000/oauth2/authorize-client/kakao"
    },
    state: randomString()
    
  }),
  methods: {
    login: function () {
      this.$store.dispatch('login', {id: this.userId, pw: this.userPw})
    }, // login
    loginFacebook: function() {
        const api = this.facebook;
        location.href=`${api.url}?client_id=${api.client_id}&redirect_uri=${api.redirect_uri}&state=${this.state}`
    },
    loginKakao: function() {
        const api = this.kakao;
        location.href=`${api.url}&client_id=${api.client_id}&redirect_uri=${api.redirect_uri}&state=${this.state}`
    }, 
    loginGoogle: function() {
        const api = this.google;
        location.href=`${api.url}&client_id=${api.client_id}&redirect_uri=${api.redirect_uri}&state=${this.state}`
    },
    loginNaver: function() {
        const api = this.naver;
        location.href=`${api.url}&client_id=${api.client_id}&redirect_uri=${api.redirect_uri}&state=${this.state}`
    }
  } // methods
}
</script>
