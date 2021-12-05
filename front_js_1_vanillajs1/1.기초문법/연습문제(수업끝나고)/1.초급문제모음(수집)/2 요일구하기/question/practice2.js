// 2021년 a월 b일은 무슨 요일일까요?
// 파라미터 a, b
// let date = new Date(년도, 월(0이 1월, 11이 12월), 일) : 날짜 변수를 만드는 법
// getDay() : 요일을 가져오는 메소드 (리턴값이 일 0, 월 1, ....)

// DOM
let result = document.querySelector("#result")

// EVENT LISTENER
document.addEventListener("keyup", changeHTML)
document.addEventListener("click", changeHTML)

/**
 * HTML의 요일 부분을 변경한다.
 */
function changeHTML() {
    console.log('이벤트작동했음')
    let month = document.getElementById("month").value
    let day = document.getElementById("day").value
    result.innerHTML = `2021년 ${month}월 ${day}일은 ${findDay(month, day)}요일입니다.`
}

/**
 * 2021년의 a월 b일의 요일을 구한다.
 * @param {Number} a 월 
 * @param {Number} b 일
 */
function findDay(a, b) {
    return ['일', '월', '화', '수', '목', '금', '토'][new Date(2021, a-1, b).getDay()]
}