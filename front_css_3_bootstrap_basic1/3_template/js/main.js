function activeMenu(menuNo) {
    // 모든 메뉴의 active 클래스 삭제
    document.querySelector("#menu1").classList.remove("active")
    document.querySelector("#menu2").classList.remove("active")
    document.querySelector("#menu3").classList.remove("active")
    document.querySelector("#menu4").classList.remove("active")

    // Argument에 해당하는 메뉴에만 active 클래스 추가
    console.log(menuNo, '번째 메뉴를 인자로 받았습니다.')
    let menu = document.querySelector(`#menu${menuNo}`)
    menu.classList.add("active")

    let titleButton = document.querySelector('titleButton')
    console.log(titleButton.children)
}