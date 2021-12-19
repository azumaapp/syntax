/**
 * 메뉴를 클릭했을 때 흰색으로 만듭니다.
 * @param {Number} no 메뉴번호
 */
function activeMenu(no) {
    let target = document.querySelector(`#menu${no}`)
    target.classList.add("active")
}