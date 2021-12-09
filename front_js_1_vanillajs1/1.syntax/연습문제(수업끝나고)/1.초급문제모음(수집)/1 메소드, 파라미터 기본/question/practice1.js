/**
 * @param numbers Array<number> 配列 // [1, 2, 3]
 * @param target number 目標の数字 // 3
 */
function sumExists(numbers, target) {
    console.log('=======================')
    console.log('numbers=', numbers)
    console.log('target=', target)
    
    if (numbers.length > 1) {
        answer = numbers[0] + numbers[1]
    } else {
        answer = numbers[0]
    }
    if (answer === target) {
        return true
    } else {
        return false
    }
}


let a = [1, 2, 3]
let b = 3
console.log(sumExists([1, 2, 3], 3))
console.log(sumExists([1, 1, 1], 2))
console.log(sumExists([1, 1, 1], 3))
console.log(sumExists([1], 2))
console.log(sumExists([1, 1], 2))
console.log(sumExists([1, 3], 2))

// 整数の配列が与えられます。配列から2つの異なる要素の和を取り、指定された数を作れるかどうかを教えてください。
// 例：
// [1, 2, 3], 3) => True (1 + 2 = 3)
// [1, 1, 1], 2 => True (1 + 1 = 2)
// [1, 1, 1], 3 => False
// [1], 2 => False
// [1, 1], 2 => True
// [1, 3], 2 => False