/*
  [타입스크립트 기본 타입]

  타입스크립트의 기본 타입 12가지 : Boolean, Number, String, Object, Array, Tuple, Enum, Any, Void, Null, Undefined, Never
  사전준비 : node.js LTS버전, vscode 확장중 eslint, tslint, live server 설치(이후, "ctrl(cmd) + shift + p"로 live server를 검색해서 실행)
 */

// 타입 표기(Type Annotation) : ":"를 이용하여 자바스크립트 코드에 타입을 정의하는 방식
let str: string = 'hi'
let num: number = 10
let isLoggedIn: boolean = false
let arr1: number[] = [1,2,3] // 배열 간단 선언
let arr2: Array<number> = [1,2,3] // 배열 제너릭 선언
let tuple: [string, number] = ['hi', 10]

arr[1].concat('!'); // Error, 'number' does not have 'concat'
arr[5] = 'hello'; // Error, Property '5' does not exist on type '[string, number]'.
#Enum
이넘은 C, Java와 같은 다른 언어에서 흔하게 쓰이는 타입으로 특정 값(상수)들의 집합을 의미합니다.

enum Avengers { Capt, IronMan, Thor }
let hero: Avengers = Avengers.Capt;
이넘은 인덱스 번호로도 접근할 수 있습니다.

enum Avengers { Capt, IronMan, Thor }
let hero: Avengers = Avengers[0];
만약 원한다면 이넘의 인덱스를 사용자 편의로 변경하여 사용할 수도 있습니다.

enum Avengers { Capt = 2, IronMan, Thor }
let hero: Avengers = Avengers[2]; // Capt
let hero: Avengers = Avengers[4]; // Thor
#Any
기존에 자바스크립트로 구현되어 있는 웹 서비스 코드에 타입스크립트를 점진적으로 적용할 때 활용하면 좋은 타입입니다. 단어 의미 그대로 모든 타입에 대해서 허용한다는 의미를 갖고 있습니다.

let str: any = 'hi';
let num: any = 10;
let arr: any = ['a', 2, true];
#Void
변수에는 undefined와 null만 할당하고, 함수에는 반환 값을 설정할 수 없는 타입입니다.

let unuseful: void = undefined;
function notuse(): void {
  console.log('sth');
}
#Never
함수의 끝에 절대 도달하지 않는다는 의미를 지닌 타입입니다.

// 이 함수는 절대 함수의 끝까지 실행되지 않는다는 의미
function neverEnd(): never {
  while (true) {

  }
}
← Why TypeScript?함수 →