var app = require('express')();
const fs = require('fs');
const bodyParser = require('body-parser')

app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

var server = require('http').createServer(app);
var io = require('socket.io')(server,{
  pingTimeout: 1000,
});

app.all('/*', function(req, res, next) {
  // res.header("Access-Control-Allow-Origin", "http://localhost:8080");
  // res.header("Access-Control-Allow-Headers", "X-Requested-With, Authorization");
  // res.header("Access-Control-Allow-Headers", "*");
  next();
});


// localhost:3001서버에 접속하면 클라이언트로 메세지을 전송한다
app.get('/', function(req, res) {

  var data = ""
  const textFile = 'filelist2.txt';
  
  data = fs.readFileSync(textFile, 'utf-8');
  let jsonValue = JSON.parse(data)
  const msg = { msg: 'ggggggggggggggg', name: 'adminName' }
  jsonValue.msgs.push(msg)
  console.log()
  
  fs.writeFileSync(textFile, JSON.stringify(jsonValue), 'utf8');
 
  // console.log("#####################################################")
  // console.log(newValue)
  // console.log("#####################################################")
  // console.log('readFileSync complete');

  res.send("Test")
});

// localhost:3001서버에 접속하면 클라이언트로 메세지을 전송한다
app.get('/getMsg', function(req, res) {

  let data = ""
  const textFile = 'chat-datas/chat-history.json';

  try {
    data = fs.readFileSync(textFile, 'utf-8')
    res.send(data)
  } catch {
    res.send();
  }
});

app.post('/writeMsg', function(req, res) {
  let data = "";
  const textFile = 'chat-datas/chat-history.json';
  data = fs.readFileSync(textFile, 'utf-8')

  let jsonValue = JSON.parse(data)
  const value = {msg: req.body.msg, name: req.body.name}
  jsonValue.msgs.push(value)

  fs.writeFileSync(textFile, JSON.stringify(jsonValue), 'utf8');

  res.send()
});

io.on('connection', function(socket){
  
  // 클라이언트로부터의 메시지가 수신되면
  socket.on('chat', function(data) {
    console.log('Message from %s: %s', data.name, data.msg);

    var msg = {
      name: data.name,
      msg: data.msg
    };

    // 메시지를 전송한 클라이언트를 제외한 모든 클라이언트에게 메시지를 전송한다
    socket.broadcast.emit('chat', msg);
  });

  socket.on('disconnect', function() {
    console.log('user disconnected: ' + socket.name);
  });

});

server.listen(3001);
