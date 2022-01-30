function increaseHealth (tokens) {
    exports.health++;
}

function decreaseHealth (tokens) {
    exports.health--;
    if( exports.health <0) {
        exports.health = 0;
    }
}

function setName (name) {
    exports.name = name;
}

exports.health = 0;
exports.name = "John Doe";
exports.increaseHealth = increaseHealth;
exports.decreaseHealth = decreaseHealth;
exports.setName = setName;