const user = {
    name: 'Muhammad Hilmy',
    address: 'Bogor',
    age: 20,
    isMarried: false,
};

console.log(`Nama saya ${user.name}`);
console.log(`Saya tinggal di ${user.address}`);

const { name, address, age } = user;

console.log(`Nama saya ${name}\nSaya tinggal di ${address}\nUmur saya adalah ${age}`)