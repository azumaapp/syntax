import React, { useState } from 'react'

function App() {
  const [id, setId] = useState('')
  const [pw, setPw] = useState('')
  const onSubmit = (event) => {
    event.preventDefault() // form submit 고유의 동작을 멈추기 위해 일시적으로 썼음
    console.log(id, pw)
  }
  
  return (
    <div className='App'>
      <form onSubmit={onSubmit}>
        <input 
          type='text' 
          placeholder='id를 입력해주세요'
          value={id}
          onChange={(e) => setId(e.target.value)}
        /><br/>
        <input 
          type='text' 
          placeholder='pw를 입력해주세요'
          value={pw}
          onChange={(e) => setPw(e.target.value)}
        /><br/>
        <button type='submit'>Submit</button>
      </form>
    </div>
  );
}

export default App
