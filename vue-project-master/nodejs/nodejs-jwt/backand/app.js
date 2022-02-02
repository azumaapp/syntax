
const express = require('express');
const sequelize = require('./models/index').sequelize;
const cors = require('cors');

const indexRouter = require('./routes/index');
const userRouter = require('./routes/user');
const adminRouter = require('./routes/admin');

const app = express();
sequelize.sync();

const corsOptions = {
    origin: 'http://127.0.0.1:8081',
    // cors와 axios response header 에러 이슈 해결
    // header의 키를 exposedHeaders에 넣어줘야 header의 값을 사용할 수 있음
    exposedHeaders: 'Authorization' 
}

app.use(cors(corsOptions));
app.use(express.json());     // body-parser

app.use('/', indexRouter);
app.use('/user', userRouter);
app.use('/admin', adminRouter);

app.listen(3000, function(){
    console.log('Port Number: 3000');
});