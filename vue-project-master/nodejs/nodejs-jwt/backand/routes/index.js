const express = require('express');
const jwt = require('jsonwebtoken');

const secretObj = require('../config/jwt');
const hashPassword = require("../config/sha512");

const router = express.Router();

router.get('/', function(req, res, next) {

    // create token 
    const token = jwt.sign({ pw: '1234' },
        secretObj.secret,
    {
        expiresIn: '5m'
    });

    res.send(token);
    res.end();
});


router.get('/test', function(req, res, next) {
    const token = "eyJhbGciOiJIUzI1NiIsInR5cCㅅㅁㄱㅁㄴㅁNDIyNDAsImV4cCI6MTU3MTA0MjU0MH0.W0x3XN0Dvas_NN7Yc2-HOQoh6u6nKvk1JxehH9jcp-g";
    const decoded = jwt.verify(token, secretObj.secret, function(err, decoded){

        if(err) {
            // 재발급하는 부분
            if(err.name === "TokenExpiredError") {
                
            }
            console.log(err.name);
        }
    });

    if(decoded) {
        res.send("Ture");
    }else {
        res.send("False");
    }
});

router.get('/crypto', function(req, res, next) {

    const pw = hashPassword("123456", "admin");
    console.log(pw);
    res.json({value: hashPassword("123456", "admin")});
    res.end();
});

module.exports = router;