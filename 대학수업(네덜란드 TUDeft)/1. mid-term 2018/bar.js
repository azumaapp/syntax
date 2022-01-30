// bar.js
var player1 = require('./foo');
var player2 = require('./foo');

player1.setName("Bob");
player2.setName("Alice");

player1.increaseHealth(10);
player2.increaseHealth(5);

console.log(player1.name + "/" + player1.health);
console.log(player2.name + "/" + player2.health);