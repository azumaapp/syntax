function clicked1() {
    // 조건문
    const a = 2
    const b = 2
    // if (a === b) { // ***
    //     alert('맞습니다！') // ***
    // } // ***
    const c = (a !== b) // false
    const d = ("10" === 10) // false
    const e = ("A" === "a") // false
    // alert(c) // ***
    // alert(d) // ***
    // alert(e) // ***
    const f = (true && false) // false
    const g = (true || false) // true    
    // alert(f) // ***
    // alert(g) // ***
    const h = (c && g) // false
    const i = (c || g) // true
    // alert(h) // ***
    // alert(i) // ***

    const n1 = 1
    const n2 = 2
    const b1 = n1 > n2
    const b2 = n1 < n2
    // if (b1) { // = if (n1 > n2) { // ***
    //     alert('true입니다.') // ***
    // } else { // ***
    //     alert('false입니다.') // ***
    // } // ***
    
    // 존재 : 참 1
    // 존재하지 않는다 : 거짓 0
    // a = 1 참, b = 0 거짓
    // a = ' ' 참, b = '' 거짓
    const n3 = 0 // false
    const n4 = 1 // true
    const s1 = '' // false
    const s2 = 'hello' // true
    const a1 = [] // false
    const a2 = [1] // true

    // 오브젝트는 선언하는 순간, 별도의 공간을 만든다.
    const o1 = {} // true
    const o2 = { key: 'value' } // true
    // if (o1) { // ***
    //     alert('true입니다.') // ***
    // } else { // ***
    //     alert('false입니다.') // ***
    // } // ***    

    // 다중조건문 : 필터링
    // if (false) { // ***
    //     alert('false') // ***
    // } // ***
    // else if (false) { // ***
    //     alert('false') // ***
    // } // ***
    // else if (false) {
    //     alert('false') // ***
    // } // ***
    // else { // ***
    //     alert('통과!') // ***
    // } // ***

    // 다중조건문 : &&(And)와 Or(||)의 사용
    const n5 = 1
    const n6 = 1
    const n7 = 2
    // if (n5 === n6 && n5 === n7) { // ***
    //     alert('n5와 n6은 같고, n5와 n7도 같다. 둘다에만. (And 성립)') // ***
    // } // ***
    // if (n5 === n6 || n5 === n7) { // ***
    //     alert('n5와 n6이 같거나, 또는 n5와 n7가 같거나. 둘중 하나거나 혹은 둘다 거나. (Or 성립)') // ***
    // } // ***

    // 삼항연산자 (= Ternary Operator, Ternary If, Mini If)
    // 문법 : 조건 ? true : false경우
    let n8 = 10
    // n < 10 ? alert('a는 10보다 작다') : alert('a는 10보다 크거나 같다') // ***

}

