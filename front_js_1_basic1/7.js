function clicked1() {
    // JS DOM Functions

    /*
        JS DOM이란?
            DOM은 문서 객체 모델 (Document Object Model)의 약자이다.
            DOM을 HTML이라고도 할수도 있는데,
            자바스크립트는 HTML 소스를 모두 객체로 만들어서 
            document라는 변수안으로 가져온다.
            그때 그 객체로 만들어진 변수 document를 DOM이라고 한다.
            꺼내는 방법은 단순히 document라는 변수를 꺼내면 된다.
        
        자주쓰는 DOM 명령어들
            아래 코드들은 innerHTML이나 style명령어와 함께 결합해 이것저것 바꿀 수 있음
            document.getElementById("이름")
            document.getElementByClassName("이름")
            document.getElementByName("이름")
            document.getElementByTagName("이름") : 태그이름으로 소스를 찾아냄
            ↓ 통합하기!
            document.querySelector("#id") : #id, .class, tag 다 됨!


    */

    // document : html의 모든 태그가 전부 나온다.
    // console.log(document) // ***

    // document.getElementById("title") : id가 title인 태그가 전부 나온다.
    // const title = document.getElementById("title")
    const title = document.querySelector("#title")
    // console.log(title) // *** 해당 DOM(HTML 소스)이 전부 나온다.
    // console.dir(title) // *** 해당 DOM을 가지고 내가 할 수 있는 모든 명령어가 나온다.
    
    // dir안에 나오는 명령어 중에서 DOM의 내용물을 바꾸는 명령어들을 써보자.
    title.innerHTML = "Hi! From JS"
    title.style.color = "red"
    document.title = "탭 이름 바꾸기"

}


/* 
    ★ JS는 이벤트 컨트롤러이다.
    JS는 단지 html과 css를 바꾸고 싶어서 만들어지진 않았다.
    JS는 이벤트에 반응하기 위해서 만들어졌다.
    그럼 이벤트란 뭐냐.
    이벤트는 웹사이트에서 발생하는 것들을 말하는 것이다.
    click, resize, submit, contextMenu, input change, load, before closing, closing, ...
    같은 것들이 모두 이벤트이다.
    우리는 이 이벤트를 중간에 가로챌 수 있다.       
*/

function handleResize1() {
    console.log("handleResize1()을 통해서 즉시 한번 실행된 거에요.")
}
function handleResize2() {
    console.log("handleResize2를 통해서 윈도우 사이즈가 변경될 때마다 실행되는 거에요.")
}
function handleResize3(event) {
    console.log(event)
}
function handleResize4() {
    title.style.color = "blue"
}

/*
    ★★ function을 부르는 두가지 방법
    "method()"로 부르면 지금 당장 실행하라는 뜻이 되고,    
    "method"으로만 부르면 지금 당장 실행하는게 아니라, 당신이 "원하는 때마다" 실행하게 된다.
*/

// 이 코드는 당장 한번 handleResize를 실행한다.
window.addEventListener("resize", handleResize1())

// 윈도우를 resize할 때마다 지정한 메소드를 실행한다!
window.addEventListener("resize", handleResize2)

// 윈도우를 resize할 때마다 이벤트 객체 자체를 출력해봅시다.
window.addEventListener("resize", handleResize3)

// 윈도우에 우클릭할 때 블루로 바뀌게 해봅시다.
window.addEventListener("contextmenu", handleResize4)

