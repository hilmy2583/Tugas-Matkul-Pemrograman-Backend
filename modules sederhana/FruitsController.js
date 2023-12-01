const fruits = require('./data');

const index = () => {
    for(const fruit of fruits){
        console.log(fruit);
    }
};

const store = (name) => {
    fruits.push(name);
    index();
}

module.exports = { index, store };