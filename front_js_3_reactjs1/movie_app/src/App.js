import React from "react";
import Potato from "./Potato";

function Food(props) {
  // function Food(props.fav) = function Food({ fav }) {
  console.log("props:", props)
  console.log("props.fav:", props.fav)
  return <h1>Potato is food!</h1>
}

function FavFood({ fav }) {
  console.log("{ fav }:", { fav })
  return <h1>My favorite food is {fav}</h1>
}

function FoodILike({ name, picture }) {
  return (
    <div>
      <h2>I like {name}</h2>
      <img src={picture} alt="" width="300" />
    </div>
  )
}

const foodInDB = [
  {
    name: "ramen",
    image: "https://www.kf.or.kr/old/newsletter/newsletter_home/news/news_201807/images/sub13_1.png"
  },
  {
    name: "pizza",
    image: "https://pngimg.com/uploads/pizza/pizza_PNG44078.png"
  },
  {
    name: "Kimchi",
    image: "https://cdn.crowdpic.net/list-thumb/thumb_l_4EC9ECDE1F1A3AB5D62BE3544A310181.png"
  }
]

function App() {
  return (
    <div>
      Hello React!
      <Potato />
      {/* ↓ fav등은 다 props(properties)이다. */}
      <Food fav="kimchi" something={true} papapapa={["hello", 1, 2, 3, 4, true]} />
      <FavFood fav="ramen" />
      <FavFood fav="pizza" />
      <FavFood fav="kimchi" />

      <div>
        <hr />
        {/* 아래의 dish => {return } 는 function (dish) {return } 에서의 dish와 같은 역할을 한다. 동일한 표현들은 그 밑에 있다. */}
        {foodInDB.map(dish => { return <FoodILike name={dish.name} picture={dish.image} /> } )}
        {/* 위와 동일(dish=>의 더욱 간소화된 버전) */}
        {foodInDB.map(dish => <FoodILike name={dish.name} picture={dish.image} /> )}
        {/* 위와 동일(dish=>의 함수형 풀버전) */}       
        {foodInDB.map(function(dish) { return <FoodILike name={dish.name} picture={dish.image} /> } )}
      </div>
    </div>
  )
}

export default App;
