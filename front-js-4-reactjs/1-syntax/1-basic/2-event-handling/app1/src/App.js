function App() {
  const onSubmit = () => {
    alert('submitted')
  }

  const onKeyUp = (event) => {
    console.log('event.keyCode: ', event.keyCode)
    if (event.keyCode === 13) { // keyCode 13은 enter이다.
      onSubmit()
    }
  }
  
  return (
    <div className="App">
      <input onKeyUp={onKeyUp} />
      <button onClick={onSubmit}>Submit</button>
    </div>
  );
}

export default App;
