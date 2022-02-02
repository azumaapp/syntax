<template>
  <v-container>
    <v-layout
      text-center
      wrap
    >
      <v-flex>
        <div><h1>Admin Home</h1></div>
        <div>{{ this.$store.state.token }}</div>
        <v-btn @click="adminCheck">Check</v-btn>
      </v-flex>
      
    </v-layout>
  </v-container>
</template>

<script>
export default {
  methods: {
    adminCheck: function() {
      axios.get('/admin/test').then(result => {
        console.log(result);
      });
    }
  } // methods
}
</script>
