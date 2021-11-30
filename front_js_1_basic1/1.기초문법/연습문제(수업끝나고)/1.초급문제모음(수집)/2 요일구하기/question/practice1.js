// 2021년 a월 b일은 무슨 요일일까요?
// 파라미터 a, b
// let date = new Date(년도, 월(0이 1월, 11이 12월), 일) : 날짜 변수를 만드는 법
// getDay() : 요일을 가져오는 메소드 (리턴값이 일 0, 월 1, ....)

/**
 * 2021년의 a월 b일의 요일을 구한다.
 * @param {*} a 월 
 * @param {*} b 일
 */
function findDay(a, b) {
    let weekdays = ['일', '월', '화', '수', '목', '금', '토']
    let date = new Date(2021, a-1, b)
    let i = date.getDay() // 0~6 중에 하나가 들어감
    result = weekdays[i]
    return result
}

console.log(findDay(11, 27), '요일입니다')