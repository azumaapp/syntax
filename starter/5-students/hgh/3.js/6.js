// DOM : Document Object Model
// querySelector는 DOM에서 선택한 선택자만 꺼내주는 함수
// 자바스크립트는 왜 사용하는가?
    // 1. 사용자 조작으로 HTML을 변경할 수 있다. 
    // 2. API(백엔드로 DB안의 정보를 취득하는 문)를 호출할 수 있다.

console.log(document.querySelector('#app'))

// DOM의 내용을 변경하기
function a() {
    let app = document.querySelector('#app')
    app.innerHTML = "DOM으로 변경된 내용"
}

// DOM에 내용을 추가하기
function b() {
    let div = document.createElement('div') 
    div.innerHTML = "추가된 항목"
    div.style.color = "red"
    // div = "추가된 항목"이라는 내용을 가진, 빨간색의, 새로운 div 태그 만들라는 명령
    
    let app = document.querySelector('#app') // app = <div id="app"></div>

    app.appendChild(div) // app 안에다, div 를 끼워넣기
}

// DOM에 내용을 삭제하기
function c() {
    let app = document.querySelector('#app') // app = <div id="app"></div>
    let div = app.querySelector('div')
    if (div) {
        app.removeChild(div)
    }
}