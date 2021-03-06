import React, { useState, useRef } from 'react'


// 위 예제에서는 onReset 함수에서 input 에 포커스를 하는 focus() DOM API 를 호출해주었습니다.
// 이제 브라우저에서 인풋에 값을 입력한 다음에 초기화를 눌러보세요. 이름 input 에 포커스가 잘 잡히나요?

function InputSample() {
  const [inputs, setInputs] = useState({
    name: '',
    nickname: ''
  })

  // 1. 비구조화 할당 : inputs State를 다음 변수에 각각 할당
  const { name, nickname } = inputs

  // 3. 사용자가 키를 누르면 실행
  const onKeyUp = e => {
    // 4. e.target 에서 name 과 value 를 추출
    const { value, name } = e.target
    // 5. 기존의 input 객체를 복사한 뒤, name 키를 가진 값을 value로 설정
    setInputs({
      ...inputs, // 5-1. 기존의 input 객체를 복사한 뒤
      [name]: value // 5-2. name 키를 가진 값을 value 로 설정
    })
  }

  // 7. useRef() 를 사용하여 Ref 객체를 만듦
  const nameInput = useRef()

  // 9. onReset이 실행될 때
  const onReset = () => {
    // 10. Input을 초기화함
    setInputs({
      name: '',
      nickname: ''
    })
    // 11. Ref객체의 .current값에 .focus를 줘서 포커스화
    nameInput.current.focus()
  }

  return (
    <div>
      <input
        name="name"
        placeholder="이름"
        // 2. name을 value에 할당하고, 사용자의 onChange event를 핸들링하여 함수 onKeyUp에 연동해서, 사용자가 키를 누를 때 onKeyUp이 실행되게 함
        onChange={onKeyUp}
        value={name}
        // 8. ref객체를 "원하는 DOM"에 설정하면, Ref객체의 .current값이 "원하는 DOM"을 가리키게 됨
        ref={nameInput}
      />
      <input
        name="nickname"
        placeholder="닉네임"
        onChange={onKeyUp}
        value={nickname}
      />
      {/* 6. onReset 버튼을 만든다. 여기서 사양이 누르면 특정 인풋을 focus 주는 사양이라면, 이때가 바로 "특정 DOM을 찾아야하는 useRef가 필요한 시점"이 된다. */}
      <button onClick={onReset}>초기화</button>
      <div>
        <b>값: </b>
        {name} ({nickname})
      </div>
    </div>
  );
}

export default InputSample