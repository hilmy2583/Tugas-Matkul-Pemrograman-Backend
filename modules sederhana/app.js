const { index, store} = require('./FruitsController');

const main = () => {
    index();
    store('Mango');
};

main();