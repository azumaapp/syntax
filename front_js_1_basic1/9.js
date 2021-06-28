// css 파일내의 class별 id별 정의를 사용해서 스타일 바꾸기

/*
    지난번에는 다양한 이벤트 중심으로 JS 상에서 style을 바꾸었지만,
    이번에는 그보다 더 많은 사람들이 사용하는, CSS 파일을 나누어서 CSS 상에서의
    변경을 해보도록 하겠다.
*/

function init() {
    const title = document.querySelector("#title")
    title.addEventListener("click", handleClick)
    title.addEventListener("contextmenu", handleContextmenu)    
}

init()

function handleClick() {
    // console.log('title.className: ', title.className) // *** class 이름꺼내기
    if(title.className !== "topic") {
        title.className = "topic"
    } else {
        title.className = "" // 문제발생! 이걸 쓰면 버튼 클래스가 지워져버림
    }
    console.log(title)
}

// 위 문제 해결법 : classList 사용해서, 다른 클래스마저 지워지는 것을 방지
function handleContextmenu() {
    if(!title.classList.contains("topic")) {
        title.classList.add("topic")
    } else {
        title.classList.remove("topic")
    }
    console.log(title)
}

// 위보다 더더욱 간단한 해결법 : 위와 똑같은 로직임, 위는 어떤 구조인지 알려주기 위해서 일부러 한 것임
function clicked1() {
    title.classList.toggle("topic")
}

