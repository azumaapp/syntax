// 파일읽기 기능
// > node 6.js로 실행
const fs = require('fs')

fs.readFile('6 파일읽기기능.txt', function(err, data) {
    let template = `파일을 통해 얻어온 정보 : ${data}`
    console.log(template)
})
