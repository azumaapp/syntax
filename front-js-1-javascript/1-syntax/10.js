function clicked1 () {
    // 데이터
    let arr = [1, 3, 3, 4, 4, 5]
    let value = 7

    // 설명 : 가장 기본적인 반복문으로 index를 찾는 방법이다.
    // 장점 : 가장 빠르다. 값, 조건에 해당하는 모든 index를 찾을 수 있다.
    // 단점 : 코드가 길고 가독성이 떨어진다.
    console.log('<<< for문으로 인덱스 검색 >>>')
    for (let i = 0; i < arr.length; i++) {
        if (value === arr[i]) {
            console.log('arr[i] ===>', i)
        }
    }

    // 설명 : 파라미터 값에 해당하는 최초의 인덱스를 찾는다. 없을 때는 -1을 꺼낸다.
    // 장점 : 코드가 짧아 가독성이 좋다. 없을 때의 값인 -1을 활용한 코딩을 할 수 있다. for문 다음으로 빠르다.
    // 단점 : 값만 참조한다. 최초 인덱스 값 1개만을 찾는다.
    console.log('\n<<< indexOf문으로 인덱스 검색 >>>')
    console.log('arr.indexOf(value) ===>', arr.indexOf(value))

    // 설명 : 파라미터 조건에 해당하는 최초의 인덱스를 찾는다. 없을 때는 -1을 꺼낸다.
    // 장점 : 코드가 짧아 가독성이 좋다. 없을 때의 값인 -1을 활용한 코딩을 할 수 있다.
    // 단점 : 처리가 느리다. 조건만 참조한다. 최초 인덱스 값 1개만을 찾는다.
    console.log('\n<<< findIndex문으로 인덱스 검색 >>>')
    const targetValue = (element) => element > 3
    console.log('arr.findIndex(targetValue) ===>', arr.findIndex(targetValue))

    // <<< 정리 >>>
    // 속도 비교 : for > indexOf >>> findIndex
    // for : 값, 조건에 해당하는 모든 인덱스. 가장 빠름.
    // indexOf : 값에 해당하는 최초 인덱스. 빠름.
    // findIndex : 조건에 해당하는 최초 인덱스. 느림.

    // <<< 연습문제 >>>
}

