module.exports = function(sequelize, DataType) {
    const user = sequelize.define("User", {
        idx: {
            type: DataType.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            comment: "index"
        },
        roleIdx: {
            type: DataType.INTEGER,
            field: "role_idx",
            comment: "role_tbl table referrence idx"
        },
        userId: {
            type: DataType.STRING(20),
            allowNull: false,
            field: "user_id",
            unique: true,
            comment: "유저 아이디"
        },
        userPw: {
            type: DataType.STRING,
            allowNull: false,
            field: "user_pw",
            comment: "유저 비밀번호"
        },
        userEmail: {
            type: DataType.STRING,
            field: "user_email",
            comment: "유저 이메일"
        },
        refreshToken: {
            type: DataType.STRING,
            field: "refresh_token",
            comment: "유저 refresh token"
        }
    }, {
        timestamps: true,
        underscore: true,
        freezeTableName: true,
        tableName: "user_tbl",
        comment: "사용자 테이블" 
    });
    return user;
}