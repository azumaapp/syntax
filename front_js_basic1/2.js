function clicked() {
    // 변수(variable) 선언 = 초기화 initializing
    /*
        변수선언에는 세가지 방법이 있음
        var : let과 동일함. 예전방식. 2015년까지는 var만 있었음.
        let : 값이 변하는 변수
        const : 상수
     */
    let a = 1
    a = 2
    const b = 1
    // b = 2 // 상수를 변경시키면 에러납니다.
    // alert(a)
    // alert(b)








    // 변수의 데이터타입
    /*
        Null : 값이 없음 // 파이썬에서 none과 같음
        Number : 실수(정수, 소수를 포함)
        String : 문자열('hello')
        Boolean : 논리(true/false)
        Object : 객체 { 'key1':value1, 'key2':value2, ... } // 파이썬에서 Dict와 같음
        Array : 배열 [1, 2, 3, ...] // 파이썬에서 List와 같음
        Set : 집합 Set {1, 2, 3} // 중복제거 집합
    */

    // Null
    let null1 = null
    console.log(null1)

    // Number
    let num1 = 1
    let num2 = 2
    num1 = 2
    num2 = 3
    console.log('num1:', num1)
    console.log('num2:', num2)
    console.log('num1+num2:', num1+num2)

    // String
    let str1 = 'Hello'
    let str2 = 'JS!'
    console.log('str1:', str1)
    console.log('str2:', str2)
    console.log('str1+str2:', str1+' '+str2)

    // Boolean
    let boo1 = true
    boo1 = (num1 < num2)
    let boo2 = false
    boo2 = (num1 === num2)
    console.log('boo1:', boo1)
    console.log('boo2:', boo2)

    // Object
    let obj1 = { 'key1': 'value1', 'key2': 'value2' }
    console.log('obj1.key1:', obj1.key1)
    console.log('obj1.key2:', obj1.key2)
    // Object의 추가
    obj1.key3 = 'value3'
    console.log('obj1.key3:', obj1.key3)
    // Object의 삭제
    delete obj1.key3
    console.log('obj1.key3:', obj1.key3) // undefined 키 자체를 찾을 수가 없다. null 키를 찾긴 하지만 값이 없다.
    console.log('obj1:', obj1)

    // Array
    let arr1 = [1, 2, 3, 4, 5]
    console.log('arr1[0]:', arr1[0])
    console.log('arr1[1]:', arr1[1])
    console.log('arr1[arr1.length - 1]:', arr1[arr1.length - 1]) // 파이썬에서의 arr1[-1]
    // Array의 추가
    arr1.push(6)
    console.log('arr1:', arr1)
    // Array의 삭제
    arr1.pop() // 마지막꺼 삭제
    arr1.splice(4, 1) // 인덱스기준으로 특정값 삭제 : splice(시작위치, 제거건수)
    console.log('arr1:', arr1)

    // Array -> Set으로 전환
    let arr2 = [30, 30, 28, 28, 29, 29, 27, 27, 32, 32, 31, 31, 31]
    console.log('arr2 before:', arr2)
    const set1 = new Set(arr2) // arr2의 값으로 새로운 Set를 만든다.
    console.log('set1:', set1)
    // Set의 추가
    set1.add(33)
    console.log('set1:', set1)
    // Set -> Array로 전환
    arr2 = Array.from(set1)
    console.log('arr2 after:', arr2)






    // Object 추가학습(1) : Array와 Object의 차이 3가지, JSON 타입
    /*
        Array와 Object의 차이 3가지
        1. Array는 인덱스로 값을 꺼내고, Object는 키로 값을 꺼낸다.
        1. Array는 순서가 있고, Object는 순서가 없다.
        1. Array는 For문과 함께 쓸 수 있고, Object는 쓸 수 없다.

        JSON타입 : 고객정보 [{고객1}, {고객2}, {고객3}, ...] -> 고객1 { id : '', pw: '', name: '' }
    */
    let client1 = { 'id': 'user1', 'pw': '1', 'name': '김' }
    let client2 = { 'id': 'user2', 'pw': '2', 'name': '이' }
    let client3 = { 'id': 'user3', 'pw': '3', 'name': '박' }
    let client4 = { 'id': 'user4', 'pw': '4', 'name': '최' }
    let clientArray = [client1, client2, client3, client4]
    console.log('clientArray[2].name:', clientArray[2].name)





    // Object 추가학습(2) : 일반변수와 Object의 차이 : Object를 복사하는 방법

    // 일반 변수
    let int1 = 1
    let int2 = int1
    int1 = 2
    console.log('int2:', int2) // 1이라고 가정을 했고, 정답도 1이었다.

    // 객체
    let object1 = { 'a': 1, 'b': 2 }
    let object2 = object1
    object1.a = 2
    console.log('object2.a:', object2.a) // 1이라고 가정을 했고, 정답은 1이 아니었다. -> 왜?
    /*
        왜?
        Object는 "주소"를 참조합니다.
        선언이나 변경을 할 때에는 값이 아닌, 주소를 대입
        결국 같은 주소를 보게 됩니다.
        일반변수처럼 값만 복사하려면 주소를 복사해서 새로운 주소로 만들어주는 처리가 필요합니다.
        JSON.stringify : 문자화를 해서 카피를 한다. 그러나 이거는 객체가 아니다. 그냥 "{ a: 1, b: 2 }"라는 문자열이 된 것.
        JSON.parse : 파싱(컴퓨터가 이해할 수 있는 형태로 번역)해서 객체로 바꿔준다.
    */
    console.log('JSON.stringify(object1):', JSON.stringify(object1))
    console.log('JSON.parse(JSON.stringify(object1)):', JSON.parse(JSON.stringify(object1)))





    // Object 추가학습(3) : 콘솔로그의 정체

    /*
        콘솔은 사실, 객체입니다.
        콘솔로그는 console 객체 안의 key중 log라는 키를 사용하는 것입니다.
        이렇게, 객체 안에서 담아서 키를 처리하는 방식은 타 언어에서도 종종 사용됩니다.
        이런 객체를 다른 말로는 클래스라고도 합니다. (class = object)
        파이썬, 자바, 자바스크립트 등등 클래스 기반의 언어들은 그래서, "객체지향언어"라고 부릅니다.
     */
    console.log(console)
    console.error("이렇게 쓰면 Error 메시지를 띄웁니다.")







    


    // 캐스팅 : 데이터타입을 변환 Number(), String(), Boolean(), ....
    let cast1 = '150'
    console.log('cast1+1234:', cast1+1234)
    let cast2 = Number(cast1)
    console.log('cast2+1234:', cast2+1234)
    let cast3 = String(cast2)
    console.log('cast3+1234:', cast3+1234)
}