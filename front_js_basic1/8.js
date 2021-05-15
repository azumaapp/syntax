// Event

/*
    이번에는 다양한 이벤트 중심으로 구현해보겠다.
    그전에 우선, 스크립트는 바디의 끝부분, 푸터가 끝난 부분 밑에다가 설치해야한다.
    그렇지 않으면 DOM을 조작해도 변경되는 것이 없다.
    DOM이 한번 다 선언된 다음에야 DOM을 읽어서 조작할 수 있기 때문이다.

    메소드를 호출할 때, 뒤에 ()를 쓰면 지금 바로 한번 실행이고, 
    ()가 없을 때는 원하는 때에 실행이기 때문에,
    addEventListener에서는 메소드 뒤에 ()없이 쓴다.
*/

const title = document.querySelector("#title")
const BASE_COLOR = "rgb(52, 73, 94)"
const OTHER_COLOR = "#7f8c8d"

function init() {
    title.style.color = BASE_COLOR
    title.addEventListener("click", handleClick)
    title.addEventListener("contextmenu", handleContextmenu)
    window.addEventListener("offline", handleOffline)
    window.addEventListener("online", handleOnline)
    title.addEventListener("mouseenter", handleMouseenter)
}
init()

function handleClick() { alert('타이틀에 좌클릭했습니다.') }
function handleContextmenu() { alert('타이틀에 우클릭했습니다.') }
function handleOffline() { console.log('오프라인 상태입니다.') }
function handleOnline() { console.log('온라인 상태입니다.') }
function handleMouseenter() { 
    const currentColor = title.style.color
    // console.log(currentColor) // ***
    if(currentColor === BASE_COLOR) { 
        title.style.color = OTHER_COLOR
    } else {
        title.style.color = BASE_COLOR
    }
}

// 그 외의 Event Types를 알고 싶을 때의 검색어 : HTML Javascript DOM event MDN
// event의 기원을 알고 싶으면 항상 "MDN"을 검색하라!
