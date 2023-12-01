const fruits = ["Apple", "Banana", "Orange"];

console.log(fruits[0], fruits[2]);

for(const fruit of fruits){
    console.log(fruit);
}

const family = ['Mikel', 'Hannah', 'John'];

const [ husband, wife, child ] = family;

console.log(`Suami: ${husband}\nIstri: ${wife}\nAnak: ${child}`);