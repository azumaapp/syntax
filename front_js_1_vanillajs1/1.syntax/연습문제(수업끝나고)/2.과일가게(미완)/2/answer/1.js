// 초기값
let array = [ 
    { name: 'apple', count: 2 },
    { name: 'banana', count: 7 },
    { name: 'orange', count: 3 },
]

function viewStatus() {
    // 과제 : array에 있는 모든 과일들을, 'apple은 2개 있습니다.' 이런 식으로, 모두 출력해라.
    for (let i = 0; i < array.length; i++) {
        console.log(`${array[i].name}은 ${array[i].count}개 있습니다.`)
    }
}

function oneBuy() {
    let choice = prompt('어떤 과일을 사시겠습니까?')
    // 과제 : prompt로 과일을 선택받고, 해당 과일의 count를 1씩 늘려라. 그 뒤 'banana를 1개 샀습니다.' 식으로 출력.
    // 힌트 : 만약에 banana를 입력받았다면, 
    // 해당 choice 변수와 array[i].name과 일치하는 지를 if문으로 판단.
    // 판단 결과가 true라면, 해당 array[i].count++ 해주면 되겠죠?
    // 예외처리도 부탁합니다. 만일 choice에 해당과일이 하나도 없다면, '그런 과일은 없습니다.'를 출력.    
    
    let isChoice = false

    for (let i = 0; i < array.length; i++) {
        if (array[i].name === choice) {
            isChoice = true
            array[i].count++
            console.log(`${choice}를 1개 샀습니다.`)
        }
    }

    if (!isChoice) {
        console.log(`그런 과일은 없습니다.`)
    }

    // viewStatus()
}

function oneSell() {
    let choice = prompt('어떤 과일을 파시겠습니까?')
    // 과제 : prompt로 과일을 선택받고, 해당 과일의 count를 1씩 줄여라. 그 뒤 'banana를 1개 팔았습니다.' 식으로 출력.

    let isChoice = false

    for (let i = 0; i < array.length; i++) {
        if (array[i].name === choice) {
            isChoice = true
            array[i].count--
            console.log(`${choice}를 1개 팔았습니다.`)
        }
    }

    if (!isChoice) {
        console.log(`그런 과일은 없습니다.`)
    }

    // viewStatus()
}
