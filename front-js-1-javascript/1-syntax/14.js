// DOM 객체는 HTML안의 DOM 트리안에서 위계적인 구조를 띈다.
// ★ F12 누른 뒤 Element탭으로 넘어가보면 DOM 트리를 볼 수 있다.

// 자 여기서는 a, b 변수라는 두 종류의 아들 태그(Child Tag)가 있다. 
// 그들에게 부모를 지정하여 넣어줘보자.

// 전역변수 a
let a = document.createElement("div") // "div" 태그 대신 다른 태그로도 가능
a.innerHTML = "새로 생성됐음"

// 바디에 생성(바디 맨 끝)
function create1() {
    let body = document.body
    body.appendChild(a)
}

// 원하는 태그에 생성
function create2() {
    let parent = document.querySelector("#create2")
    parent.appendChild(a)
}

// 원하는 태그에 계속 생성
function create3() {
    // 지역변수 b : 계속 새로운 Element가 생성될 수 있음
    let b = document.createElement("div")
    b.innerHTML = "새로 생성됐음"

    let parent = document.querySelector("#create3")
    parent.appendChild(b)
}

// 스타일 추가하여 생성
function create4() {
    // 아들 태그 생성
    let b = document.createElement("div")

    // 아들 키우기(?)
    b.innerHTML = "축구선수" // 교육받을 내용
    b.setAttribute("id","son") // 부여받을 정체성, 소속(identity, class등)
    b.setAttribute("class","tottenham") // 부여받을 정체성, 소속(identity, class등)
    b.style.backgroundColor="yellow" // 스타일 꾸미기

    // 부모에게 갖다 붙이기
    let parent = document.querySelector("#create4")
    parent.appendChild(b)
}

// 부모에게서 자식 객체 삭제
function delete1() {
    // 삭제할 자식 찾기
    let son = document.querySelector("#son")

    // 부모 객체 알아내기
    let parent = son.parentElement
    // 부모로부터 id="son"인 DOM 객체를 "하나씩" 떼어내기
    parent.removeChild(son)

    // DOM 객체가 DOM 트리에서 제거되면 브라우저 화면이 즉각 갱신되어 
    // DOM 객체에 의해 출력된 HTML 콘텐츠가 사라진다. 
    // 떼어낸 DOM 객체는 DOM 트리의 임의의 위치에 다시 부착할수 있다.
}

// 퀴즈: son 아이디가 없을 때 삭제를 눌러도 에러메시지가 안 나오게 예외 처리를 해보세요.

// 답:
// if (son && son.parentElement) {
//     // 부모 객체 알아내기
//     let parent = son.parentElement
//     // 부모로부터 id="son"인 DOM 객체를 "하나씩" 떼어내기
//     parent.removeChild(son)
// }