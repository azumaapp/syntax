// 変数
const clockContainer = document.querySelector(".clock")
const clockTitle = clockContainer.querySelector("h1")

// 関数
function getTime() {
    const date = new Date()
    const day = date.getDate()
    const hours = date.getHours()
    const minutes = date.getMinutes()
    const seconds = date.getSeconds()
    // clockTitle.innerText = `${hours}:${minutes}:${seconds}`
    clockTitle.innerText = `${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes}` : minutes}:${seconds < 10 ? `0${seconds}` : seconds}`
}

getTime()
setInterval(getTime, 1000)