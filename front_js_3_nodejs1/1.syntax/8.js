// 1. 우리는 함수를 마치 변수의 "값"처럼 사용할 수 있다. 즉, 함수 = "값"
let a = function() {
    console.log('콜백으로 부를 처리')
}

// 2. 콜백(callback)을 사용해서 매우 긴 시간이 걸리는 함수를 나중에 처리한다.
function slowfunc(callback) {
    console.log('1번째 처리')
    console.log('2번째 처리')
    console.log('3번째 처리')
    callback()
}

slowfunc(a) // 이렇게 되면 a 함수가 callback 파라미터의 인자값으로 들어가서, a 변수안에 있는 함수가 실행된다.