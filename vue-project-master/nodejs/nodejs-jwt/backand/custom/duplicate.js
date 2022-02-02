const jwt = require('jsonwebtoken');

const secretObj = require('../config/jwt');
const models = require("../models/index");


// token 발급 함수
const createToken = function(userId, roleName, kinds) {
    let time = Math.floor(Date.now() / 1000);
    if(kinds === "accessToken") {
        // time = Math.floor(Date.now() / 1000) + (10);
        time = Math.floor(Date.now() / 1000);
    } else if(kinds == "refreshToken") {
        // time = Math.floor(Date.now() / 1000) + (60 * 60);
        time = Math.floor(Date.now() / 1000);
    } else {
        console.log("token kinds different error");
        return;
    }
    
    return jwt.sign({
        userId: userId,
        roleName: roleName,
        exp: time
    }, secretObj.secret);
};

const loginCheck = function(req, res, next) {

    const user = req.body;
    let roleName = "";
    (async() => {
        
        // 등급이 user인 사용자만 필터
        const idCheck = await models.User.findOne({
            attributes: [[ models.sequelize.fn("COUNT", "idx"), "count" ]], 
            // include: [{ model: models.Role, where: {roleName: urlInfo} }],
            include: [{ model: models.Role }],
            where: user
        }).then(result => {
            roleName = result.Role.dataValues.roleName;
            return result.dataValues.count;
        })

        const token = {
            accessToken: "",
            refreshToken: ""
        }

        // 아이디가 존재할 경우
        if(idCheck === 1) {

            // access token 발급
            token.accessToken = createToken(user.userId, roleName, "accessToken");
            // refresh token 발급
            token.refreshToken = createToken(user.userId, roleName, "refreshToken");

            // refresh token save
            models.User.update(
                { refreshToken: token.refreshToken },   // SET
                { where: user }                         // WEHRE
            );
        }
        
        res.header("Authorization", "test");
        res.json({ check: idCheck, token: token.accessToken });
    })();
}

module.exports.loginCheck = loginCheck;
module.exports.createToken = createToken;