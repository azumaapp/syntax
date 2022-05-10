function init () {
    /*
        함수와 파라미터
        펑션(함수) : 메소드
        파라미터 : 아규먼트를 받는 곳
        아규먼트(인자, 인자값) : 사용자가 파라미터에 입력하는 값
    */

    // 파라미터가 없는 함수1
    greet1() // ***
    // 파라미터가 없는 함수2
    cal1() // ***

    // 파라미터가 있는 함수1
    let name = prompt('이름이 뭐에요?') // ***
    greet2(name) // ***
    // 파라미터가 있는 함수2
    let a = Number(prompt('a값은?')) // ***
    let b = Number(prompt('b값은?')) // ***
    cal2(a, b) // ***
}

// 파라미터가 없는 함수1
function greet1 () {
    console.log('환영합니다!')
}

// 파라미터가 없는 함수2
function greet2 (nameInput) {
    console.log(nameInput + '님 환영합니다!')
}

// 파라미터가 있는 함수1
function cal1 () {
    let a = 1
    let b = 2
    let result = a + b
    console.log(result + '=' + a + '+' + b)
}

// 파라미터가 있는 함수2
function cal2 (a, b) {
    let result = a + b
    console.log(result + '=' + a + '+' + b)
}

init()