const express = require("express");
const router = express.Router();

// const request = require("request");
const request = require("request-promise");
const cheerio = require("cheerio");

const models = require("../models");

router.get("/test", function(req, res){
    
    res.write("Success");
    res.end();
});

router.get("/", function(req, res){

    const URL = "https://www.concepts1one.co.kr";
    const SEARCH = req.query.search;

    (async () => {
        // 검색어 count
        let searchCount = await models.Searchs.count({
            where: {searchName: SEARCH}
        }).then((results)=> {
           return results;
        });

        let productArr = new Array();
        const x = new Array();

        // 존재하지 않는 검색어일 경우 데이터를 확인하고 데이터가 존재할 경우 검색어 저장 AND 검색 결과 데이터도 저장
        if(searchCount === 0) {
            const option = {
                uri: `${URL}/shop/search_result.php`,
                method: "GET",
                qs: {
                    search_str: SEARCH
                }
            }
            
            // 몇개의 페이지가 구성되어있는지 확인하는 request
            await request(option, function(error, response, body){

                if(error) throw error;

                let $ = cheerio.load(body);
                let divSearch = $("div.prd_search");
                const checkData = divSearch.find(".empty").text();

                // 데이터가 존재할 경우
                if(checkData === ""){
                    // 데이터가 몇페이지 인지 확인
                    let btn = $("#btn_more").find("a").text().split(" ")[1];
                    firstNum = parseInt(btn.split("/")[0]);
                    secondNum = parseInt(btn.split("/")[1]);
                } else {
                    firstNum = 0;
                    secondNum = 0;
                }
            }); // end request    

            // 데이터가 존재하는 경우
            if(firstNum !== 0 && secondNum !== 0) {

                // search insert 후 index 추출
                const searchIdxData = await models.Searchs.create({searchName:SEARCH}).then( (result) => {
                    return result.dataValues.idx;
                })

                // 데이터 파싱 부분
                for(let i=1; i<secondNum-firstNum+2; i++) {
                    const option = {
                        uri: `${URL}/main/exec.php`,
                        method: "GET",
                        qs: {
                            exec_file: "skin_module/skin_ajax.php",
                            obj_id: "prd_basic",
                            _tmp_file_name: "shop/search_result.php",
                            single_module: "search_result_prd_list",
                            striplayout: 1,
                            module_page: i,
                            document_url: `https://www.concepts1one.co.kr/shop/search_result.php?search_str=${SEARCH}`,
                            search_str: SEARCH
                        }
                    } // option
                    
                    await request(option, function(error, response, body) {
                    
                        const $ = cheerio.load(JSON.parse(body).content, {xmlMode: true});
                        
                        const divSearch = $("li .box");

                        // 페이징 데이터
                        divSearch.each(function(index, elem) {

                            const infoClass = $(this).find(".info");
                            const imgClass = $(this).find(".img");

                            const product = {
                                searchIdx: searchIdxData,
                                productName: infoClass.find(".name a").text(),
                                salePrice: parseInt(infoClass.find(".price").find(".sell").text().split(",").join("").split(" ")[0]),
                                costPrice: parseInt(infoClass.find(".price").find(".consumer").text().split(",").join("").split(" ")[0]),
                                titleImg: imgClass.find(".prdimg").html()
                            }
                            x.push(product);
                        });
                    }); // request

                    productArr = productArr.concat(x);
                } // end for

                
                // 중복 데이터 제거 부분
                const refreshData = productArr.filter((item, i) => {
                    return productArr.findIndex((item2, j) => {
                        return item.productName === item2.productName;
                    }) === i;
                });
                
                await models.Product.bulkCreate(refreshData);
            } // end if
        }
        
        const resultArr = await models.Product.findAll({
            include: {model: models.Searchs, where: {searchName: SEARCH}}
        }).then((results) => {
            return results;
        })
        
        if(resultArr.length == 0) {
            res.send("empty");
        } else {
            res.send(resultArr);
        }
        
        res.end();
    })();

}); // router

module.exports = router;