
// ★ Array나 Object를 복사하는 방법
// 일반 변수
a = 1 // 변수명 a, b는 위에서 한번 선언했으므로 다시 let은 안쓴다.
b = a
a = 2
console.log(b) // 1

// Object 변수
c = { a: 1, b: 2 }
d = c
c.a = 2
console.log(d.a)

// Array 변수
let e = [1]
f = e
f[0] = 2
// 아래의 e[0]는 아직 1 이어야 할 게 왜 2로 바뀌어 있을까?
console.log('e[0] 1이어야하는데?:', e[0])

/*
    왜?
    Array, Object는 "주소"를 참조합니다.
    선언이나 변경을 할 때에는 값이 아닌, 주소를 대입
    결국 같은 주소를 보게 됩니다.
    일반변수처럼 값만 복사하려면 주소를 복사해서 새로운 주소로 만들어주는 처리가 필요합니다.
    JSON.stringify : 문자화를 해서 카피를 한다. 그러나 이거는 객체가 아니다. 그냥 "{ a: 1, b: 2 }"라는 문자열이 된 것.
    JSON.parse : 파싱(컴퓨터가 이해할 수 있는 형태로 번역)해서 객체로 바꿔준다.
*/
console.log('JSON.stringify(object):', JSON.stringify(c))
console.log('JSON.parse(JSON.stringify(object)):', JSON.parse(JSON.stringify(c)))
console.log('JSON.parse(JSON.stringify(array)):', JSON.parse(JSON.stringify(e)))

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
