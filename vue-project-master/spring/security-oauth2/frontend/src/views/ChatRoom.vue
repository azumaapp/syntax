<!-- Spring STOMP -->
<template>
  <div class="inner-wrap" fluid fill-height inner-wrap>
    <Message-List :msgs="msgs" class="msg-list"></Message-List>
    <Message-Form v-on:submitMessage="sendMessage" class="msg-form"></Message-Form>
  </div>
</template>

<script>
import MessageList from '@/components/chat/MessageList.vue'
import MessageForm from '@/components/chat/MessageForm.vue'
import StompConnect from "@/assets/js/customStomp.js"

export default {
  name: 'ChatRoom',
  components: {
    'Message-List': MessageList,
    'Message-Form': MessageForm
  },
  data: () => ({
    msgs: []
  }),
  methods: {
    sendMessage(msg) {
      StompConnect.sendMessage(msg)
    },
  },
  created() {
    StompConnect.connection(this.msgs)
  },
  beforeDestroy() {
    StompConnect.disConnection()
  },
}
</script>

<style>
.msg-form {
  bottom: -28px;
  position: absolute;
  left: 0;
  right: 0;
}
.msg-list {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 60px;
  overflow-x: scroll;
}
</style>