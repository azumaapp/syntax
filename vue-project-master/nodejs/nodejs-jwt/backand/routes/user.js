const express = require('express');

const jwt = require('jsonwebtoken');

const secretObj = require('../config/jwt');
const models = require("../models/index");

const router = express.Router();

const middleware = require("../custom/middleware");
const duplicate = require("../custom/duplicate");

// 아이디 체크
router.get('/idCheck/:id', function(req, res, next){

    (async () => {
        const idCheck = await models.User.findAndCountAll({
            where: {userId: req.params.id}
        }).then((results) => {
            return results.count;
        });

        res.json({result: idCheck});
        res.end();
    })();
});

router.post('/insert', function(req, res, next) {

    (async () => {
        
        const roleIdx = await models.Role.findOne({
            where: {roleName: 'user'},
            attributes: ['idx']
        }).then((result) => {
            return result.dataValues.idx;
        })

        const user = req.body;
        user.roleIdx = roleIdx;
        
        const resultData = await models.User.create(user).then((result) => {
            return "success";
        }).catch((err) => {
            return "error";
        });

        res.send({msg: resultData});
        res.end();
    })(); // async
}); // router

// user login check router
router.post('/loginCheck', function(req, res, next) {
    duplicate.loginCheck(req, res, next);
});

///////////////////////////////////////////////////
// 토큰 체크하는 middleware (interceptor)
router.use(function(req, res, next) {
    middleware.tokenCheck(req, res, next);
});
//////////////////////////////////////////////////
// 이 아래부터는 토큰 체크가 필수인 라우터
router.post('/test', function(req, res, next) {
    
    console.log("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@");
    // es.json({msg: "Token Available"});
    res.end();

}); // router


module.exports = router;