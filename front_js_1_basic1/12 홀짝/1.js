let oddEven = prompt('홀짝?')
let pc_oddEven = null
if (!oddEven) {
    console.log('값을 입력하세요.')
} else if (oddEven == '홀' || oddEven == '짝') {
    if (Math.trunc(Math.random()*10)%2 == 1) {
        pc_oddEven = '홀'
    } else {
        pc_oddEven = '짝'
    }
    if (oddEven != pc_oddEven) {
        console.log('틀렸습니다')
    } else if (oddEven == pc_oddEven) {
        console.log('맞았습니다')
    }        
    console.log('컴퓨터의 값:', pc_oddEven)
} else {
    console.log('홀짝 중 하나를 입력하세요.')
}