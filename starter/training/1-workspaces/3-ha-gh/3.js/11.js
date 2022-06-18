// 배열고차함수 : 반복문의 새로운 표현식
const arr = [1, 2, 3, 4, 5]

// for (let i = 0; i < arr.length; i++) {
//     let item = arr[i]
//     console.log(item)
// }

// forEach 용도 : for 쓰기 싫을 때, 리턴이 필요없는 경우
arr.forEach((item) => { console.log(item) })

// map 용도 : 새로운 배열을 리턴한다. 리턴이 필요한 경우
let a = arr.map((item) => { return item + 1 })
console.log(a)

// filter 용도 : 배열을 추려서 새로운 배열을 리턴한다.
let b = arr.filter((item) => { return item > 2 })
console.log(b)
