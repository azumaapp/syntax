import React from "react";

function ShowList({ name, picture }) {
  return (
    <div>
      <h2>I like {name}</h2>
      <img src={picture} alt={name} width="300" />
    </div>
  )
}

function RenderList(dish) {
  return <ShowList key={dish.id} name={dish.name} picture={dish.image} />
}

const DB = [
  {
    id:1,
    name: "ramen",
    image: "https://www.kf.or.kr/old/newsletter/newsletter_home/news/news_201807/images/sub13_1.png"
  },
  {
    id:2,
    name: "pizza",
    image: "https://pngimg.com/uploads/pizza/pizza_PNG44078.png"
  },
  {
    id:3,
    name: "Kimchi",
    image: "https://cdn.crowdpic.net/list-thumb/thumb_l_4EC9ECDE1F1A3AB5D62BE3544A310181.png"
  }
]

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
