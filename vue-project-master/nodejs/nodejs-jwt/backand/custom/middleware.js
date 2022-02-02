const jwt = require('jsonwebtoken');
const jwt_decode = require('jwt-decode');

const secretObj = require('../config/jwt');
const models = require("../models/index");
const duplicate = require("./duplicate");

const tokenCheck = function(req, res, next) {
    const accessToken = req.headers.authorization;
    console.log(accessToken);
    let msg = "";
    
    const currentURL = req.originalUrl;
    const urlInfo = currentURL.split("/")[1];

    jwt.verify(accessToken, secretObj.secret, function(err, decoded) {
        
        (async () => {
            
            let afterAccessToken = null;

            // 사용 불가능한 토큰일 경우
            if(err) {
                // 기간이 만료된 토큰일 경우 리프레쉬 토큰을 사용할 수 있는지 확인
                if(err.message === "jwt expired") {
                    // jwt decoded
                    const tokenDecoded = jwt_decode(accessToken);

                    // 접근 권한이 맞을 경우 리프레쉬 토큰 재발급
                    if(tokenDecoded.roleName === urlInfo) {
                        const resultToken = await models.User.findOne({
                            attributes: ['refreshToken'],
                            include: [{ model: models.Role, attributes: ['roleName'] }],
                            where: {userId: tokenDecoded.userId}
                        }).then(result => {
                            return result;
                        });
                        
                        const refreshToken = resultToken.dataValues.refreshToken;   // refresh token
                        const roleName = resultToken.Role.dataValues.roleName;      // role name
                        
                        jwt.verify(refreshToken, secretObj.secret, function(err, decoded) {
                            // 사용가능한 refreshToken일 경우
                            if(!err) {
                                // accessToken 재발급
                                afterAccessToken = duplicate.createToken(tokenDecoded.userId, roleName, "accessToken");
                                
                                console.log(afterAccessToken);
                                res.header("Authorization", afterAccessToken);
                                msg = "Token Available";
                            } else {
                                msg = "Token expiration";
                            } // if
                        }); // jwt.verify
                    // 권한이 맞지 않을 경우
                    } else {
                        msg = "Access Denied";
                    }
                        
                } else {
                    msg = err.message;
                }
            // 사용가능한 토큰일 경우
            } else {
                console.log(decoded.roleName);
                console.log(urlInfo);
                if(decoded.roleName === urlInfo) {
                    msg = "Token Available";
                } else {
                    msg = "Access Denied";
                }
            }
            
            if(msg === "Token Available") {
                next();
            } else {
                res.json({msg: msg});
                res.end();
            }
        })(); // async
    }); // jwt.verify
};

module.exports.tokenCheck = tokenCheck;