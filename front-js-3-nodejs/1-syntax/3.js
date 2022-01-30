const fs = require('fs')

// readFileSync : 순서대로 1, File, 2... 순의 처리를 할 것이다. File을 처리하는 중간에 타임공백이 생긴다.
console.log('<동기처리>')
console.log('1 처리')
let result = fs.readFileSync('3 sample.txt')
console.log(`${result}`)
console.log('2 처리')
console.log('3 처리')
console.log('4 처리')
console.log('5 처리')

// readFile : 콜백을 통해서 비동기 처리를 할 것이다. 차이점을 비교해보자.
// → readFile는 비동기 함수이다.
// → ★★★ 비동기 함수는 마지막 파라미터에 "error와 response(=result)를 리턴하는 함수"가 인자로 들어간다.
console.log('\n<비동기처리>')
console.log('1 처리')
fs.readFile('3 sample.txt', 'utf8', function(error, response) {
    // ↓ 아래 부분은 아래가 다 처리된 뒤에 "나중에 돌아와서 호출하는 부분"으로 이러한 호출을 "콜백(callback)"이라고 한다.
    console.log(response)
})
// 아래에 있는 것들은, 파일 로딩하는 시간 동안에, 놀지 않고 "먼저" 처리하게 될 것이다.
console.log('2 처리')
console.log('3 처리')
console.log('4 처리')
console.log('5 처리')