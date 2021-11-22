import React from "react"
import axios from "axios"

// 앱
class App extends React.Component {
  state = {
    isLoading: true,
    movies: []
  }
  // axios : fetch 위에 있는 작은 layer, 설치 후 사용가능. npm i axios 후 사용.
  // jsonview : 크롬 확장프로그램 설치.
  // async, await의 의미 : axios가 끝날 때까지 기다렸다가 계속한다. axios가 시간이 좀 걸리기 때문.
  getMovies = async () => {
    const {
      data: {
        data : { movies }
      }
    }  = await axios.get("https://yts.mx/api/v2/list_movies.json") // JSON 취득
    console.log(movies) // {data: {data : { movies }}} = movies.data.data.movies
    this.setState({ movies, isLoading: false })
  }
  componentDidMount() {
    this.getMovies()
  }
  render() {
    const { isLoading } = this.state
    return <div>{this.state.isLoading ? "Loading..." : "We are ready"}</div>
  }
}

export default App;
