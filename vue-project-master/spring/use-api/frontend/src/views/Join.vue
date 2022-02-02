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
          <v-toolbar-title>Join form</v-toolbar-title>
          <v-spacer></v-spacer>
          </v-toolbar>
          <v-card-text>
            <v-form @submit.prevent="handleSubmit">
              <v-row>
                <v-text-field
                label="ID"
                name="ID"
                prepend-icon="person"
                type="text"
                v-model="userId"
                ></v-text-field>
                <v-btn color="primary" @click="idCheck">Check</v-btn>
              </v-row>

              <v-text-field
              id="password"
              label="Password"
              name="password"
              prepend-icon="lock"
              type="password"
              v-model="userPw"
              ></v-text-field>

              <v-text-field
              id="useremail"
              label="User Email"
              name="useremail"
              prepend-icon="mdi-email"
              type="text"
              v-model="userEmail"
              ></v-text-field>

              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn type="submit" color="primary">Join</v-btn>
              </v-card-actions>
            </v-form>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>

export default {
  data: () => ({
    userId: "",
    userPw : "",
    userEmail: "",
    idConfirm: 0
  }),
  methods: {
    handleSubmit: function() {
      if(this.idConfirm === 0) {
        alert("ID perform a check for overlapping Identification");
      } else if(this.idConfirm === 1) {
        axios.post('/user/insert', {
          userId: this.userId,
          userPw: this.userPw,
          userEmail: this.userEmail
        }).then((result) => {
          console.log(result);
          if(result.data.msg === "success") {
            // location.href="/login";
            this.$router.push("/login");
          }
        })
      } else {
        alert("error");
      }
    },
    idCheck: function() {
      
      axios.get(`/user/idCheck/${this.userId}`).then((res) => {
        if(res.data.result === 0){
          this.idConfirm = 1;
        } else {
          alert("Duplicate ID exists");
          this.idConfirm = 0;
        }
      })
    } // idcheck
  } // methods
}
</script>
