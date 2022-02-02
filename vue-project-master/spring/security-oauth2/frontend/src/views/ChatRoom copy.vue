<!-- NodeJS websocket -->
<template>
  <div class="inner-wrap" fluid fill-height inner-wrap>
    <Message-List :msgs="msgs" class="msg-list"></Message-List>
    <Message-Form v-on:submitMessage="sendMessage" class="msg-form"></Message-Form>
  </div>
</template>

<script>
import MessageList from '@/components/chat/MessageList.vue'
import MessageForm from '@/components/chat/MessageForm.vue'

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
      const sendMsg = {}
      const username = this.$store.getters.getUsername;

      sendMsg.msg = msg
      // sendMsg.name=this.$route.params.username
      sendMsg.name=username
      this.msgs.push(sendMsg)
      this.$el.scrollTo(0, this.$el.scrollHeight);

      // axios.post('http://localhost:3001/writeMsg', {
      //   msg: sendMsg.msg,
      //   name: sendMsg.name
      // }).then(result => {
      //   console.log(result)
      // })

      // 메세지 쐈을 때 다른 클라이언트에게 메세지를 전송하는 부분
      this.$sendMessage({
        name: username,
        msg: msg
      })
    },
  },
  created() {
    // 메세지 수신하는 부분
    this.$socket.on('chat', (data) => {
      console.log(data);
      this.msgs.push(data)
    })
    // axios.get('http://localhost:3001/getMsg').then(result => {
    //   console.log(result)
    //   this.msgs = result.data.msgs
    // })
  }
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