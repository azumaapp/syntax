/**
 * @param numbers Array<number> 配列
 * @param target number 目標の数字
 */
function sumExists(numbers, target) {
    if(numbers.length > 1 && target === numbers[0] + numbers[1]) {
            return true;
    }
    return false;
}


// 整数の配列が与えられます。配列から2つの異なる要素の和を取り、指定された数を作れるかどうかを教えてください。
// 例：
// [1, 2, 3], 3 => True (1 + 2 = 3)
// [1, 1, 1], 2 => True (1 + 1 = 2)
// [1, 1, 1], 3 => False
// [1], 2 => False
// [1, 1], 2 => True
// [1, 3], 2 => False