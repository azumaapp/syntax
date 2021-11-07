// 도입과 주석

// JS 주석1: 변수 지정시 변수 설명, 메소드내의 한줄 설명 등 간단히 주석달 경우

/**
 * JS 주석2: 메소드에 주석달 경우. 파라미터가 있는 경우에는 아래 행을 추가한다.
 * @param {String} parameterName1 무슨 값을 받아야하는지에 대한 파라미터 설명
 * @param {Array<Object>} parameterName2 무슨 값을 받아야하는지에 대한 파라미터 설명
 */

/**
 * 버튼 클릭시 실행하는 메소드
 */
function clicked2() {
    // 아래를 1천줄 내외의 복잡한 명령이라고 가정해보자.(실제로 대형프로젝트에서 많이 보게됨)
    // 그러면 왜 JS의 도입을 3번째 방법으로만 쓰는지 명확해질 것이다.
    let title = '경고메시지'
    let msg = '보내기'
    alert(title + ' ' + msg);
}

// 아래와 같이 메소드가 여러개 있다고 하면 파일로 나누는 게 납득가죠?
function clicked3() {
    alert('버튼 3 좌클릭 완료')
}

function rightClicked3() {
    alert('버튼 3 우클릭 완료')
}


