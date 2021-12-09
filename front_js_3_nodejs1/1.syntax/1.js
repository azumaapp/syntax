console.log('Hello NodeJS!')

// 터미널에 node 1.js 쳐서 실행할 수 있음
let a = 1
let b = 2
let c = a + b
console.log('c:', c)

// 콘솔에서 입력값 파라미터 받기 : node 1.js hello 를 쳤을 때 hello를 아규먼트로 받는 방법
let args = process.argv
console.log(args)
console.log(args[2])