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
    </div>
  );
}

export default App;
