import React from "react";
import PropTypes from "prop-types";

// JSX, Props 설정
function ShowList({ name, picture, rating }) {
  return (
    <div>
      <h2>I like {name}</h2>
      <h4>{rating}/5</h4>
      <img src={picture} alt={name} width="300" />
    </div>
  )
}

// JSX를 호출 (함수형으로)
function RenderList(dish) {
  return <ShowList key={dish.id} name={dish.name} picture={dish.image} rating={dish.rating} />
}

// DB로부터 아래 정보들을 받아왔다고 가정
const DB = [
  {
    id:1,
    name: "ramen",
    image: "https://www.kf.or.kr/old/newsletter/newsletter_home/news/news_201807/images/sub13_1.png",
    rating: 5.0
  },
  {
    id:2,
    name: "pizza",
    image: "https://pngimg.com/uploads/pizza/pizza_PNG44078.png",
    rating: 4.7
  },
  {
    id:3,
    name: "Kimchi",
    image: "https://cdn.crowdpic.net/list-thumb/thumb_l_4EC9ECDE1F1A3AB5D62BE3544A310181.png",
    rating: "4.8"
  }
]

// PropType들의 검증
ShowList.propTypes = {
  name: PropTypes.string.isRequired,
  picture: PropTypes.string.isRequired,
  rating: PropTypes.number.isRequired
}

// 앱
function App() {
  return (
    <div>
      Hello React!
      <div>
        <hr />
        {/* foodInDB의 매핑 */}       
        {DB.map(RenderList)}

      </div>
    </div>
  )
}

export default App;
