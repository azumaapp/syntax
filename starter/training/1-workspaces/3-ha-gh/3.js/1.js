function act () {
    // 변수 : 변하는 수
    // 상수 : 변하지 않는 수
    // 변수 선언 : let 변수 선언, const 상수 선언
    // 변수 타입 : 
    //          <값참조, let으로 선언 : Number 수, String 문자열, Boolean 논리> 
    //          <주소참조, const로 선언 : Array 배열, Object 객체, JSON>
    let a = 1
    a = 2 + 1 // 연산이 가능
    console.log(a)

    let b = '안녕' / 2 // 연산은 원칙적으로 불가능
    console.log(b)

    // Boolean 논리
    a = 1
    b = 2
    let c = (a < b) // true or false
    console.log(c)

    // Array 배열 : 인덱스(0, 1, 2...)와 값으로 구성되어 있는 변수 상자, 순서가 있다
    const d = [1, 2, 3]
    console.log('arr[0] ===> ', d[0]) // 1

    // Object 객체 : 키와 값으로 구성되어 있는 변수 상자, 순서가 없다
    const e = { id: 'yang123', pw: 'abcd1234', no: 122 }
    console.log("obj['id'] ===>", e['id']) // yang123
    console.log("obj.id ===>", e.id) // yang123

    // JSON 타입 : API 호출시 받는 데이터의 기본 형태
    // API : 서버를 통해서 DB에 정보를 생성(post), 삭제(post), 변경(post), 조회(get)하는 웹앱
    const j = [
        { id: 'yang123', pw: 'abcd1234', no: 122 },
        { id: 'park123', pw: 'efef1224', no: 123 },
        { id: 'song123', pw: 'gfgf7777', no: 124 },
        { id: 'kang123', pw: 'asdf2233', no: 125 },
        { id: 'kong123', pw: 'uyjy2131', no: 126 }
    ]
    console.log("json[0].id ===>", j[0].id) // yang123
    console.log("json[3].id ===>", j[3].id) // kang123
}