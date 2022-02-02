const express = require('express');
const middleware = require("../custom/middleware");

const router = express.Router();

// 토큰 체크하지 않는 부분
router.get('/', function(req, res, next) {
    res.write("Test");
    res.end();
});

router.use(function(req, res, next) {
    middleware.tokenCheck(req, res, next);
});

// 토큰 체크하는 부분
router.get('/test', function(req, res, next) {
    res.write("Test2");
    res.end();
});

module.exports = router;