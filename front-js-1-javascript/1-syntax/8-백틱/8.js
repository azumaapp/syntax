// 백틱 : 「`」형태의 백틱을 쓰면 줄바꿈도 인식하고 「',　"」등의 부호도 위계와 관계없이 자유롭게 쓸 수 있다.
function init () {
    console.log(
        `
            줄바꿈 OK
            ' " 기호사용 OK
        `
    )

    // 백틱과 리턴 : 여기서 result 변수안에는 위의 introduce 함수의 리턴 값이 들어가게 된다. 
    // const result = backtick("Yang", "a developer", 13)
    // console.log(result)

    // 백틱과 삼항연산자 : 삼항연산자를 활용할 수도 있다.
    // ternery()
}

// 백틱과 리턴
function backtick (name, job, age) {
    // 템플릿 리터럴(Template Literal, 템플릿 문자열) : `` 백틱과 ${} 템플릿 리터럴를 통해서 ''+변수+'' 등을 일일이 입력하는 귀찮음을 해소할 수 있다.
    return `hello ${name}! My job is ${job}. I am ${age} years old.`
}

// 백틱에서의 삼항연산자(Ternery Operator)
function ternery () {
    const a = 3
    const b = 10
    const c = 5
    console.log(`${a}:${b}:${c}`)
    // 삼항연산자를 이용해 10보다 적을 땐 0을 붙여서 01, 02... 이런식으로 나오도록 하기
    console.log(
        // 문법 : `${조건 ? `${true일경우 변수}`: false일 경우 변수}`
        `${a < 10 ? `0${a}` : a}:${b < 10 ? `0${b}` : b}:${c < 10 ? `0${c}` : c}`
    )
}

init()