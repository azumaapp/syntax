import React from "react";
import PropTypes from "prop-types";

// 앱
class App extends React.Component {
  // 생명주기상 BeforeMount 단계에서 실행하는 함수
  constructor(props) {
    super(props) // props에 대해서는 일단 신경쓰지 말 것
    console.log("hello")
  }
  // 생명주기상 AfterMount 단계에서 실행하는 함수
  componentDidMount() {
    console.log("component rendered")
  }
  // 생명주기상 AfterUpdate 단계에서 실행하는 함수
  componentDidUpdate() {
    console.log("component updated")
  }


  // 변할 데이터를 담는 곳
  state = {
    count: 0
  }
  // currnet : 외부의 영향을 받지 않고 currentState로부터 데이터를 세팅할 수 있는 방식이다.
  add = () => {
    // this.setState({count: this.state.count + 1}) // 기존의 좋지 않은 방식
    this.setState(current => ({count: current.count + 1}))
    // console.log('add ===> ', this.state.count)
  }
  minus = () => {
    // this.setState({count: this.state.count - 1}) // 기존의 좋지 않은 방식
    this.setState(current => ({count: current.count - 1}))
    // console.log('minus ===> ', this.state.count)
  }
  // 렌더를 통해서 데이터를 표시
  // 생명주기상 Mount, Update 등등의 rendering(mounting, updating, ...ing) 단계에서 실행하는 함수
  render() {
    console.log("I am rendering")
    return (
      <div>
        <h1>The number is: {this.state.count}</h1>
        <button onClick={this.add}>Add</button>
        <button onClick={this.minus}>Minus</button>
      </div>
    )
  }
}

export default App;
