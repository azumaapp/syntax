function clicked1 () {
    // 데이터
    let arr = [1, 3, 3, 4, 4, 5]
    let value = 4

    // 설명 : 가장 기본적인 반복문이다.
    // 장점 : 가장 빠르다.
    // 단점 : 코드가 길고 가독성이 떨어진다.
    console.log('<<< for문 >>>')
    for (let i = 0; i < arr.length; i++) {
        if (value === arr[i]) {
            console.log('arr[i] ===>', arr[i])
        }
    }

    // 설명 : 파라미터 개수에 따라 「value, index, array자체」 모두를 취할 수 있다.
    // 장점 : 멀티플레이. 
    // 단점 : 「return」값을 취할 수 없다.
    console.log('\n<<< forEach문 >>>')
    arr.forEach(function (value, index, arr) { console.log('value, index, arr ===>', value, index, arr) })

    // 설명 : 「value, index, array자체」 모두를 취할 수 있다.
    // 장점 : 멀티플레이. 새 배열을 return값으로 취할 수 있다.
    // 단점 : 느리다. 대용량 배열 처리시 메모리 overflow 가능성이 있다.
    console.log('\n<<< map문 >>>')
    let mappedArr = arr.map(function (value, index, arr) { console.log('value, index, arr ===>', value, index, arr); return value + 1 })
    console.log('mappedArr ===>', mappedArr)

    // 설명 : 「return누적값, value, index, array자체」모두를 취할 수 있다.
    // 장점 : 「return」값을 취할 수 있다. for 이외에 가장 빠르고, 가장 확장성이 높다. 가장 완벽한 반복문.
    // 단점 : 사용하기가 어렵다.
    console.log('\n<<< reduce문 >>>')
    let reducedArr = arr.reduce(function (accumluate, value, index, array) { console.log('return누적값, value, index, array ===>', accumluate, value, index, array); return accumluate + value })
    console.log('reducedArr ===>', reducedArr)

    // 설명 : 조건에 해당하는 값이 몇개 있는지를 검색해서, 배열에 담아서 표시한다.
    // 장점 : 짧다.
    // 단점 : 용도가 「배열 필터링」으로 한정되어 있다.
    console.log('\n<<< filter문 >>>')
    let filteredArr = arr.filter(function (item) { return item === value }) // newArr === [ 4, 4 ]
    console.log('filteredArr ===>', filteredArr)

    // <<< 정리 >>>
    // 속도 비교 : for > reduce > filter > forEach > map > $.each(jquery)
    // for : 기본. 빠름.
    // forEach : 리턴이 필요없을 때, for 대신 가장 많이 사용
    // map : 새로운 배열을 리턴
    // reduce : 누적값이나 새로운 배열을 리턴
    // filter : 조건식 리턴값으로 필터링된 배열을 리턴

    // 연습문제
    // let test = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
    // 1. test 배열에서, 2의 배수인 것을 출력하라.
    // 2. test 배열에서, 2의 배수이자 3의 배수인 것을 출력하라.
    // 3. test 배열에서, 3의 배수이자 4의 배수인 것을 배열에 담아 배열로 출력하라.
    // 4. test 배열에서, 3의 배수이자 5의 배수인 것을 배열에 담아 배열의 길이를 출력하라.
    // 5. test 배열에서, 모든 값을 더해서 출력하라.
}