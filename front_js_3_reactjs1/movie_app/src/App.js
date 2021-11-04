import React from "react";
import PropTypes from "prop-types";

// 앱
class App extends React.Component {
  // 변할 데이터를 담는 곳
  state = {
    count: 0
  }
  add = () => {
    console.log("add")
  }
  minus = () => {
    console.log("minus")
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
