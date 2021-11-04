import React from "react";
import PropTypes from "prop-types";

// 앱
class App extends React.Component {
  // 변할 데이터를 담는 곳
  state = {
    count: 0
  }
  // currnet : 외부의 영향을 받지 않고 currentState로부터 데이터를 세팅할 수 있는 방식이다.
  add = () => {
    console.log("add")
    // this.setState({count: this.state.count + 1}) // 기존의 좋지 않은 방식
    this.setState(current => ({count: current.count + 1}))
    console.log(this.state.count)
  }
  minus = () => {
    console.log("minus")
    // this.setState({count: this.state.count - 1}) // 기존의 좋지 않은 방식
    this.setState(current => ({count: current.count - 1}))
  }
  // 렌더를 통해서 데이터를 표시
  render(){
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
