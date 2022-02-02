module.exports = function(sequelize, DataType){
    const searchs = sequelize.define("Searchs", {
        idx: {
            type: DataType.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            comment: "인덱스"
        },
        searchName: {
            type: DataType.STRING,
            unique: true,
            field: "search_name",
            comment: "검색어"
        }
    }, {
        timesamps: true, 
        underscore: true,
        tableName: "search_tbl",
        freezeTableName: true,
        comment: "검색어 테이블"
    });

    return searchs;
};