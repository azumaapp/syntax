<template>
  <div>
    Ask 페이지
    <button @click="fetchAsk">ASK Load</button>

    <ul v-if="ask.length > 0">
      <li
        v-for="item in ask"
        :key="item.id"
      >
        <update-form :item="item"></update-form>
        <hr>
      </li>
    </ul>
  </div>
</template>

<script>
import UpdateForm from "../components/UpdateForm.vue";

export default {
  components: {
    UpdateForm,
  },
  data () {
    return {
      isUpdate: false,
      updateAskValue: null,
    }
  },
  computed: {
    ask () {
      return this.$store.state.ask;
    }
  },
  methods: {
    fetchAsk () {
      this.$store.dispatch('FETCH_ASK')
    },
    deleteAsk (id) {
      console.log('id: ', id);
      this.$store.commit('DELETE_ASK', id)
    },
    onInputView (user) {
      this.isUpdate = !this.isUpdate
      this.updateAskValue = user
    },
    updateAsk (id) {
      const datas = {
        id, // id: id, 처럼 같은 경우 생략 가능
        user: this.updateAskValue
      }
      this.$store.commit('UPDATE_ASK', datas)
    }
  }
}
</script>