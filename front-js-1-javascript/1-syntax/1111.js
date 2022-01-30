    // 호이스팅 : js보다 변수선언부터 먼저 실행되고 (= 값) 으로 재할당된다.
    console.log(hoisting)
    // 따라서 위의 콘솔로그 결과값은 undefined가 된다.
    // 아래처럼 선언되기 전인데도, 참조 에러가 안뜨고, 
    // undefined가 뜨는 것으로 선언이 먼저 됐음을 알 수 있다.
    let hoisting = 1
