// 함수는 값이다. 따라서 변수에 담아서 사용할 수도 있다.
// 이번에는 리턴이 있는 함수를 통해서, 
// 함수가 어떻게 변수에 담길 수 있는지,
// 함수가 어떻게 변수의 값이 될 수 있는지 알아보겠다.

// ★ 리턴값(return value) : 함수의 결과값
// 리턴값이 있으면 함수를 변수처럼 값으로 사용할 수 있다.
function ab(a, b) {
    return a + b
}
let aa = ab(1, 2)
console.log('리턴값 담은 변수인 aa:', aa)

// ★ 변수에 함수를 넣을 때는, 다음과 같이 함수명을 생략하고 사용할 수 있다.
let bb = function(a, b) { return a + b}
console.log('리턴값 담은 변수인 bb(1, 2):', bb(1, 2))

// ★ 화살표 함수(arrow function expression) :
// 함수를 변수처럼 값으로 사용하고 싶을 때 위 보다 더 간편하게 표현하는 방법이다.
// ( A ) => { B } 방식의 함수는 function(A) { B } 와 의미가 같다.
let cc = ( a, b ) => { return a + b }
console.log('화살표함수 cc(1, 2):', cc(1, 2))