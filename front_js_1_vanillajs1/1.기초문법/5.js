// 백틱
// `` 백틱을 쓰면 줄바꿈도 인식하고 '나 "등의 부호도 위계와 관계없이 자유롭게 쓸 수 있다.    
console.log(
    `
    줄바꿈 OK
    ' " 기호사용 OK
    `
)

// 백틱과 템플릿 리터럴(Template Literal, 한국어로 템플릿 문자열)
function introduce(name, job, age) {
    // `` 백틱과 ${} 템플릿 리터럴를 통해서 ''+변수+'' 등을 일일이 입력하는 귀찮음을 해소할 수 있다.
    // *** 아래 return이 의미하는 바가 무엇인지는 아래 clicked1 메소드에서 확인해보자.
    return `hello ${name}! My job is ${job}. I am ${age} years old.`
}




// *** 리턴값 이용하기
function clicked1() {
    // 함수형 프로그래밍에서 Method는 기본적으로 뱉어내는 리턴값이 있다. 
    // 예를 들어, pi라는 메소드가 있고 이는 3.14라는를 리턴값이 있다.
    // 예로 let a = pi() 를 하게 되면 a에 3.14가 들어가게 해주는 것이다. 
    // 이렇게 하면 함수를 단순 명령 수행뿐 아니라 그 결과값을 마치 일종의 변수처럼 쓸 수 있게 되는 것이다.
    // 리턴값이 없으면 Void Method라고 한다.

    // 여기서 result 변수안에는 위의 introduce 함수의 리턴 값이 들어가게 된다. 
    const result = introduce("Yang", "a developer", 13)

    // 리턴값이 콘솔에 뜨는지 확인하자.
    console.log(result)
}




// 백틱에서의 삼항연산자(Ternery Operator) 문법
// = `${조건 ? `${true일경우 변수}`: false일 경우 변수}`
const a = 3
const b = 10
const c = 5
console.log(`${a}:${b}:${c}`)
// 10보다 적을 땐 0을 붙여서 01, 02... 이런식으로 나오도록 하려면?
console.log(
    `${a < 10 ? `0${a}` : a}:${b < 10 ? `0${b}` : b}:${c < 10 ? `0${c}` : c}`
)
