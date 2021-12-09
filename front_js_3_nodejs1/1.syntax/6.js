// 파일시스템 fs 다루기
// > node 6.js로 실행

// 라이브러리 임포트
const fs = require('fs')

// 파일시스템 다루기1: 파일읽기
fs.readFile('6 sample.txt', function(err, data) {
    let template = `파일을 통해 얻어온 정보 : ${data}`
    console.log(template)
})

// 파일시스템 다루기2: 파일목록을 배열로 추출하기
fs.readdir('./', function(error, filelist) {
    console.log(filelist)
})