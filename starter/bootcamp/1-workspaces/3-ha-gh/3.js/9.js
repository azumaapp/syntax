// 리턴 : 함수의 결과값
// const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9]

// function act (value) {
//     for (let i = 0; i < arr.length; i++) {
//         if (arr[i] === value) {
//             return value + '가 있다'
//         }
//     }
// }

// let a = act(5)
// console.log(a)

function noReturn () {
    console.log()
}

function yesReturn () {
    return 5
}

let a = noReturn()
let b = yesReturn()
console.log('a: ', a)
console.log('b: ', b)
