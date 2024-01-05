db.customers.insertOne({
    _id: "Human",
    name: "Muhammad Hilmy"
})

db.products.insertMany([
    {
        _id: 1,
        name: "Chetos",
        price: new NumberLong(5000)
    },
    {
        _id: 2,
        name: "Kopi Nescafe",
        price: new NumberLong(3000)
    },
    {
        _id: 3,
        name: "Mie Sedap",
        price: new NumberLong(8000)
    }
]);