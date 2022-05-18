// Array나 Object를 복사하는 방법

// 일반 변수
a = 1 // 변수명 a, b는 위에서 한번 선언했으므로 다시 let은 안 쓴다.
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
// 아래의 e[0]는 아직 1 이어야 할 게 왜 2로 바뀌어 있는 원인은?
console.log('e[0] 1이어야하는데?:', e[0])

/*
    원인
    Array, Object는 "주소"를 참조한다.
    선언이나 변경을 할 때에는 값이 아닌, 주소를 대입.
    결국 같은 주소를 보게 된다.

    해결
    일반변수처럼 값만 복사하려면 
    주소를 복사해서 새로운 주소로 만들어주는 처리가 필요하다.
*/



// 해결책1. JSON 함수를 사용
// JSON.stringify : 문자화를 해서 카피를 한다. 그러나 이 결과는 객체가 아니다. 그냥 "{ a: 1, b: 2 }"라는 문자열이 된 것.
// JSON.parse : 파싱(컴퓨터가 이해할 수 있는 형태로 번역)해서 객체로 바꿔준다.
console.log('JSON.stringify(object):', JSON.stringify(c))
console.log('JSON.parse(JSON.stringify(object)):', JSON.parse(JSON.stringify(c)))
console.log('JSON.parse(JSON.stringify(array)):', JSON.parse(JSON.stringify(e)))



// 해결책2. Object.assign(빈객체, 복사할 객체) 함수를 사용
// 첫번째는 빈객체, 두번째는 복사하고 싶은 객체를 넣으면 빈객체 안에 a 객체가 복사되어 들어가서, a객체와 참조주소(reference)가 달라진다.
// let a = { c:1 }
// let b = Object.assign({}, a)
// a.c = 2
// console.log(a.c) // 2
// console.log(b.c) // 1
// console.log(a === b) // a와 b는 다른 객체가 되므로 false



// 해결책3 : spread syntax를 사용
// let a = { c:1 }
// let b = { ...a } // ...a를 하면 a객체의 껍데기를 벗겨내고 a안의 알맹이만 빼서 b라는 새 객체에 넣어준다.
// a.c = 2
// console.log(a.c) // 2
// console.log(b.c) // 1
// console.log(a === b) // a와 b는 다른 객체가 되므로 false



// * 객체 안에 객체가 있는 경우에는 「JSON 함수」를 사용한 방법으로만 해결이 가능하다.
// let a = { a: { a: {}, b: {} }, b: { a: {}, b: {} } }



