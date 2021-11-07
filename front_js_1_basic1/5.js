function clicked1() {
    // 백틱, 리턴    

    // introYang은 introduce 함수의 리턴 값이다.
    const introYang = introduce("Yang", "a developer", 13)

    // 리턴값으로 콘솔을 띄우거나 리턴값으로 얼럿을 띄우거나...등등 여러가지로 사용 가능하다.
    // console.log(introYang) // ***
    // alert(introYang) // ***

    // calculator 객체(=클래스)는 plus에서 a + b를 반환한다. minus에서 a - b를 반환한다.
    const calculator = {
        plus: function(a, b) {
            return a + b
        },
        minus: function(a, b) {
            return a - b
        }
    }

    // 플러스와 마이너스의 결과값을 구해보자.
    const plus = calculator.plus(5, 5)
    const minus = calculator.minus(10, 5)
    console.log(plus)
    console.log(minus)
}

function introduce(name, job, age) {
    // `` 백틱과 ${}를 통해서 ''+변수+'' 등을 일일이 입력하는 귀찮음을 해소할 수 있다.
    return `hello ${name}! My job is ${job}. I am ${age} years old.`
}

// 백틱에서의 삼항연산자(Ternery Operator) 문법
// = `${조건 ? `${true일경우 변수}`: false일 경우 변수}`
const a = 3
const b = 10
const c = 5
// console.log(`${a}:${b}:${c}`)
// 10보다 적을 땐 0을 붙여서 01, 02... 이런식으로 나오도록 하려면?
console.log(
    `${a < 10 ? `0${a}` : a}`
)
