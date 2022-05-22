function act () {

    let a = 3
    let b = 0
    if (a < b) {
        console.log('b가 커요')
    }
    else if (a === b) {
        console.log('같아요')
    }
    else {
        console.log('a가 커요')
    }

    // apple 6, people 4 변수가 있는데
    // apple수가 people 수보다 같거나 많은 경우 '충분해요'를 출력
    let apple = 3
    let people = 0
    if (people !== 0) { // 0이 아닌경우
        if (apple >= people) {
            console.log('충분해요')
        }
        else {
            console.log('안녕')
        }
    }
    else {
        console.log('사람이 없는데요?')
    }

    // apple 5, banana 4, people 3
    // apple, banana가 사람보다 같거나 많을 때 : '사과와 바나나가 충분합니다.'
    // apple만 많을 때 : '사과만 충분합니다.'
    // banana만 많을 때 : '바나나만 충분합니다.'
    // 둘다 많지 않을 때 : '사과와 바나나 모두 부족합니다'
    console.log('<복습>')
    let banana = 4
    apple = 5
    people = 3

    // 사과 많아요
    if (people <= apple) {
        // 바나나 많아요
        if (people <= banana) {
            console.log('사과와 바나나가 충분합니다.')
        }
        // 바나나 적어요
        else {
            console.log('사과만 충분합니다.')
        }
    }
    // 사과 적어요
    else {
        // 바나나 많아요
        if (people <= banana) {
            console.log('바나나만 충분합니다.')
        }
        // 바나나 적어요
        else {
            console.log('사과와 바나나 모두 부족합니다')
        }
    }

    // snack 4, food 3, dog 2
    // snack, food가 dog보다 같거나 많을 때 : 'snack, food가 충분합니다.'
    // snack만 많을 때 : 'snack만 충분합니다.'
    // food만 많을 때 : 'food만 충분합니다.'
    // 둘다 많지 않을 때 : 'snack, food 모두 부족합니다'
    let snack = 1
    let food = 1
    let dog = 2
    if (snack >= dog) {
        if (food >= dog) {
            console.log('snack, food가 충분합니다.');
        }
        else {
            console.log('snack만 충분합니다.');
        }
    }
    else {
        if (food >= dog) {
            console.log('food만 충분합니다.');
        }
        else {
            console.log('snack, food가 부족합니다.');
        }
    }

    // TODO: 다음시간 ||(or) 와 &&(and) 사용법 익히기
}