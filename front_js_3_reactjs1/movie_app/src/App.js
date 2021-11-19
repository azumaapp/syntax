import React from "react";

// 앱
class App extends React.Component {
  state = {
    isLoading: true
  }
  componentDidMount() {
    setTimeout(() => {
      this.setState({ isLoading: false })
    }, 6000) // 6초 후 로딩이 완료될 것이다.
  }
  render() {
    const { isLoading } = this.state
    return <div>{this.state.isLoading ? "Loading..." : "We are ready"}</div>
  }
}

export default App;
