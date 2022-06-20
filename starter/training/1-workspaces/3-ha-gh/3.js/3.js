function act () {

    let a = [1, 3, 5, 7, 9]
    a.push(11) // 값을 추가한다
    a.splice(0, 2) // splice(인덱스위치, 몇개?)
    console.log(a)
    console.log(a.length)

    let b = [1, 3, 5, 7, 8, 9, 11, 12, 15]
    console.log('b[3] ===>', b[3])
    console.log('b.length ===>', b.length) // 배열의 길이
    console.log(b[b.length - 1]) // 마지막값

    // 배열의 추가
    let c = [1]
    c.push(2) // c = [1, 2] 뒤에 넣음
    c.push('text') // c = [1, 2, 'text'] 뒤에 넣음
    c.unshift(3) // c = [3, 1, 2, 'text'] 앞에다 넣음
    // 배열의 삭제
    c.pop() // c = [3, 1, 2] 가장 마지막 값을 하나 뺌 
    c.splice(0, 1) // c = [1, 2] 빼고싶은 인덱스, 그 인덱스로부터 몇개를 뺄건가
    console.log('c ======>', c)

    /* 
        * 반복문
        for (초기값; 조건; 수행후처리) {
            수행할 일
        } 
    */
    for (let i = 0; i < b.length; i = i + 1) {
        console.log(i, '번째 값: ', b[i])
    }

    let d = [5, 7, 8, 9, 11, 14, 16, 17]
    for (let i = 0; i < d.length; i++) {
        console.log(i, '번쨰 값:', d[i])
    }

    // 구구단 2단: 2 x 1 = 2
    for (let i = 1; i < 10; i++) {
        console.log(2 + 'x' + i + '=' + 2 * i)
        // console.log(2, 'x', i, '=', 2 * i)
        // console.log(`2x${i}=${2 * i}`)
    }

    // 구구단 3단: 3 x 1 = 3
    for (let i = 1; i < 10; i++) {
        console.log('3 x ' + i + ' = ' + 3 * i)
    }

    // 2중 for문 : 구구단 2~9단
    let left = [2, 3, 4, 5, 6, 7, 8, 9] // left.length = 8
    let right = [1, 2, 3, 4, 5, 6, 7, 8, 9] // right.length = 9
    for (let i = 0; i < left.length; i++) {
        console.log(`<${left[i]}단>`)
        for (let j = 0; j < right.length; j++) {
            let result = left[i] * right[j]
            console.log(left[i] + 'x' + right[j] + '=' + result)
        }
    }

    // TODO: 반복문 연습 문제
}
