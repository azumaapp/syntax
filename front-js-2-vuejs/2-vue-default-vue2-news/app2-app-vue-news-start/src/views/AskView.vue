<template>
  <div>
    Ask 페이지
    <ul v-if="ask.length > 0">
      <li
        v-for="item in ask"
        :key="item.id"
      >
        {{item.title}}
      </li>
    </ul>
    <div
      v-else
      class="red"
    >Loading...</div>
  </div>
</template>

<script>
export default {
  computed: {
    ask () {
      return this.$store.state.ask;
    }
  },
  created () {
    this.$store.dispatch('FETCH_ASK')
  }
}
</script>

<style scope>
.red {
  color: red;
  font-size: 200px;
}
</style>
