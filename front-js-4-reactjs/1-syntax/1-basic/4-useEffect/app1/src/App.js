import React, { useState, useEffect } from 'react'

function App() {
  // 초기값 설정
  const [count1, setCount1] = useState(0)
  const [count2, setCount2] = useState(0)

  useEffect(() => {
    console.log('count1: ', count1)
    console.log('count2: ', count2)
  }, [count1, count2])

  useEffect(() => {
    console.log('최초 렌더링 때만 실행')
  }, []) // state를 []로 비워두면, 최초 렌더링 때만 실행된다.
  
  const addCount1 = () => {
    setCount1(count1 + 1)
  }

  return (
    <div className='App'>
      <h1>useEffect</h1>
      {/* useEffect 훅으로 처리하는 것은, 
        이벤트에 사전에 만든 함수를 넣거나, 
        직접 만들어 넣는 경우 두가지로 구현가능하다. */}
      <button onClick={addCount1}>Click1</button> 
      <button onClick={() => setCount2(count2 + 1)}>Click2</button>
    </div>
  );
}

export default App
