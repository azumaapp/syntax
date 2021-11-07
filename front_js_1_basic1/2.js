function clicked1() {
    // 조건문1
    // let a = 2
    // let b = 2
    // if (a === b) {
    //     alert('a와 b가 같습니다！')
    // } else {
    //     alert('a와 b가 다르네요???')
    // }

    // 조건문2
    let a = 1
    let b = 2
    let c = 3
    if (a === b && a === c) { // And
        alert('a=b, a=c 둘 다 맞습니다！')
    } else if (a === b || a === c) { // Or
        alert('a=b, a=c 둘 중 하나는 맞습니다.')
    } else { // 그 외 모든 경우
        alert('a, b, c 셋은 서로 다릅니다.')
    }

    let b1 = (a !== b) // 서로 다르다.
    let b2 = (a === 10) // false
    let b3 = (a === "a") // false
    let b4 = (true && false) // false
    let b5 = (true || false) // true

    if (b1) {
        console.log('b1은 ', b1, '입니다.')
    }
   
    // 존재 : 참 1
    // 존재하지 않는다 : 거짓 0
    let b6 = 0 // false
    let b7 = 1 // true
    let b8 = '' // false
    let b9 = 'hello' // true
    let b10 = [] // false
    let b11 = [1] // true

    // // 오브젝트는 선언하는 순간, 별도의 공간을 만든다.
    // let o1 = {} // true
    // let o2 = { key: 'value' } // true
    // // if (o1) { // ***
    // //     alert('true입니다.') // ***
    // // } else { // ***
    // //     alert('false입니다.') // ***
    // // } // ***    

    // // 다중조건문 : 필터링
    // // if (false) { // ***
    // //     alert('false') // ***
    // // } // ***
    // // else if (false) { // ***
    // //     alert('false') // ***
    // // } // ***
    // // else if (false) {
    // //     alert('false') // ***
    // // } // ***
    // // else { // ***
    // //     alert('통과!') // ***
    // // } // ***

    // // 다중조건문 : &&(And)와 Or(||)의 사용
    // let n5 = 1
    // let n6 = 1
    // let n7 = 2
    // // if (n5 === n6 && n5 === n7) { // ***
    // //     alert('n5와 n6은 같고, n5와 n7도 같다. 둘다에만. (And 성립)') // ***
    // // } // ***
    // // if (n5 === n6 || n5 === n7) { // ***
    // //     alert('n5와 n6이 같거나, 또는 n5와 n7가 같거나. 둘중 하나거나 혹은 둘다 거나. (Or 성립)') // ***
    // // } // ***

    // // 삼항연산자 (= Ternary Operator, Ternary If, Mini If)
    // // 문법 : 조건 ? true : false경우
    // let n8 = 10
    // // n < 10 ? alert('a는 10보다 작다') : alert('a는 10보다 크거나 같다') // ***

}

