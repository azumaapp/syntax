module.exports = function(sequelize, DataType) {
    const role = sequelize.define("Role", {
        idx: {
            type: DataType.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            comment: "index"
        },
        roleName: {
            type: DataType.STRING,
            allowNull: false,
            unique: true,
            field: "role_name",
            comment: "등급 이름"
        }
    }, {
        timestamps: true,
        underscore: true,
        freezeTableName: true,
        tableName: "role_tbl",
        comment: "등급 테이블" 
    });

    return role;
}