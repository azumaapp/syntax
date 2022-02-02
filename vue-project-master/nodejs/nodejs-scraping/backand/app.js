const express = require("express");
const cors = require("cors");
const indexRouter = require("./routes/index");
const sequelize = require("./models/index").sequelize;

const app = express();
sequelize.sync(); // sequelize 동기화

// CORS 설정
app.use(cors())
app.use(indexRouter);

app.listen(3000, function(){
    console.log("port number: 3000");
});