// 계산기 초기값 객체
const calculator = {
  // 최초 수치
  displayValue: '0',
  // 최초 연산자
  firstOperand: null,
  // 두번째 연산을 기다리는 지의 여부
  waitingForSecondOperand: false,
  // 연산자
  operator: null,
}

/**
 * 숫자를 입력한다.
 * @param {Number} digit 숫자
 */
function inputDigit(digit) {
  // 초기값 객체에서 displayValue, waitingForSecondOperand 변수를 const로 추출하여, 그 안에 숫자와 boolean 값등을 입력한다.
}

/**
 * 소수점을 입력한다.
 * @param {Number}} dot 소수점
 */
function inputDecimal(dot) {
  // 소수점이 필요하다면 추가한다.
}

/**
 * 연산자를 처리한다.
 * @param {String} nextOperator 다음 연산자 (+, -, *, /)
 * @returns 
 */
function handleOperator(nextOperator) {
    // 연산자 메소드 객체에 인자를 넣고 수행한 결과값을 calculator.firstOperand에 넣는다.
}

// 연산자 메소드(operator 변수) 5개가 포함되어 있는 객체
const performCalculation = {
  '/': (firstOperand, secondOperand) => firstOperand / secondOperand,
  '*': (firstOperand, secondOperand) => firstOperand * secondOperand,
  '+': (firstOperand, secondOperand) => firstOperand + secondOperand,
  '-': (firstOperand, secondOperand) => firstOperand - secondOperand,
  '=': (firstOperand, secondOperand) => secondOperand
}

/**
 * 계산기를 초기화한다.
 */
function resetCalculator() {
}

/**
 * 디스플레이를 업데이트한다.
 */
function updateDisplay() {
  const display = document.querySelector('.calculator-screen')
  display.value = calculator.displayValue
}

// 자동실행
updateDisplay()

// DOM
const keys = document.querySelector('.calculator-keys')

// EVENT LISTENER
keys.addEventListener('click', (event) => {
  const { target } = event
  
  if (!target.matches('button')) {
    return
  }

  if (target.classList.contains('operator')) {
    handleOperator(target.value)
		updateDisplay()
    return
  }

  if (target.classList.contains('decimal')) {
    inputDecimal(target.value)
		updateDisplay()
    return
  }

  if (target.classList.contains('all-clear')) {
    resetCalculator()
		updateDisplay()
    return
  }

  inputDigit(target.value)
  updateDisplay()
})