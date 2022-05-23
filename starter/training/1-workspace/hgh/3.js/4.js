function leftClick () {
    // Document Object Model : JS는 HTML을 Document라고 한다. 그 Document를 "조작하기 위해" 객체화해서 만들어놓은 것을 DOM이라 한다.
    let a = document.querySelector('#test')
    a.innerHTML = '안녕'
}

function rightClick () {
    let a = document.querySelector('#test')
    a.innerHTML = '헬로우'
}