function activeMenu(menuNo) {
    // 초기화 : 기존 메뉴 li 태그들이 갖고 있을 active 클래스들을 모두 지워준다.
    document.querySelector("#menu1").classList.remove("active")
    document.querySelector("#menu2").classList.remove("active")
    document.querySelector("#menu3").classList.remove("active")
    document.querySelector("#menu4").classList.remove("active")

    console.log(menuNo)
    // 해당 메뉴에만 active클래스를 더해준다.
    if (menuNo == 1) {
        let menu = document.querySelector("#menu1")
        menu.classList.add("active")
        let title = document.querySelector("#title")
        let titleText = document.querySelector("#titleText")
        let titleButton = document.querySelector("#titleButton")
        title.innerHTML = "코딩 카페"
        titleText.innerHTML = "코딩 카페는 다양한 코딩 수업을 제공합니다."
        titleButton.innerHTML = "소개 영상 보기"

    } else if (menuNo == 2) {
        let menu = document.querySelector("#menu2")        
        menu.classList.add("active")
        let title = document.querySelector("#title")
        let titleText = document.querySelector("#titleText")
        let titleButton = document.querySelector("#titleButton")
        title.innerHTML = "강의실"
        titleText.innerHTML = "사용자가 원하는 다양한 강의를 들으실 수 있습니다."
        titleButton.innerHTML = "강의 듣기"

    } else if (menuNo == 3) {
        let menu = document.querySelector("#menu3")
        menu.classList.add("active")
        let title = document.querySelector("#title")
        let titleText = document.querySelector("#titleText")
        let titleButton = document.querySelector("#titleButton")
        title.innerHTML = "문의"
        titleText.innerHTML = "어떤 질문이든 환영합니다."
        titleButton.innerHTML = "문의하기"

    } else if (menuNo == 4) {
        let menu = document.querySelector("#menu4")
        menu.classList.add("active")        
        let title = document.querySelector("#title")
        let titleText = document.querySelector("#titleText")
        let titleButton = document.querySelector("#titleButton")
        title.innerHTML = "로그인"
        title.style.color = "red"
        titleText.innerHTML = "어서오세요."
        titleButton.innerHTML = "로그인하기"

    }
}