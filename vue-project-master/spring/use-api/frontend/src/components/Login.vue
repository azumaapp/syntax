

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
                    id="password"
                    label="Password"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                    v-model="userPw"
                    ></v-text-field>
                </v-form>
                </v-card-text>
                <v-card-actions>
                <v-spacer></v-spacer>
                <a @click="locationNaverLogin"><img src='../assets/naver_login.png' width="200" /></a>
                <a @click="test"><img src='../assets/kakao_login.png' width="200" /></a>
                <v-btn color="primary" @click="login">Login</v-btn>
                </v-card-actions>
            </v-card>
                
            </v-col>
        </v-row>
        
    </v-container>
</template>

<script>
export default {

  data: () => ({
    userId: '',
    userPw: '',
    client_id: 'GhIlT_MuU_qke9rxjV8q',
    callback_url: 'http://localhost:3000/oauth/login/type/naver',
    naver_login_url: 'https://nid.naver.com/oauth2.0/authorize?response_type=code',
    state: 123  // 이건 뭔지 모르겠음 암튼 보내야 된다고 함 비교해야함
  }),

  methods: {
    login: function () {
      this.$store.dispatch('login', {id: this.userId, pw: this.userPw})
    },  // login
    locationNaverLogin: function() {
      const random = Math.random().toString(36).substring(2, 15);
      // csrf 공격 대비를 위한 resource server와 resource owner의 인증 비교를 위한 랜덤 값
      this.naver_login_url += "&state="+random;
      location.href=this.naver_login_url;
    }, 
    test: function() {
      location.href="https://kauth.kakao.com/oauth/authorize?client_id=1026731d07732a439790b2935243d042&redirect_uri=http://localhost:3000/oauth/login/type/kakao&response_type=code"
    }
  }, // methods
  created() {
    this.naver_login_url += "&client_id=" + this.client_id
    this.naver_login_url += "&redirect_url=" + this.callback_url
  }
}
</script>
