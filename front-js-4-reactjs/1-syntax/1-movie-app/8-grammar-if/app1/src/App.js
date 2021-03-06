import React, { useState } from 'react'
// import { useEffect } from 'react'

function App() {
  const [bool, setBool] = useState(false) // bool state의 초기화
  const toggle = () => setBool(!bool) // bool의 setState
  // useEffect(() => {
  //   console.log(bool)
  // }, [bool]) // [bool] : bool을 보고 있다가, 바뀌면 콘솔에 찍는다.
  const text = bool ? 'True' : 'False' // 3항연산자
  return (
    <div className='App'>
      <h1>조건문 렌더링</h1>
      <div>
        {text}
      </div>
      <button onClick={toggle}>Toggle</button>
    </div>
  );
}

export default App
