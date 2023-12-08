const persiapan = () => {
    return new Promise((resolve) => {
        setTimeout(function() {
            resolve("Mempersiapkan Bahan ...");
        }, 3000);
    });
}
const rebusAir = () => {
    return new Promise((resolve) => {
        setTimeout(function(){
            resolve("Merebus Air ...");
        }, 7000);
    });
}
const masak = () => {
    return new Promise((resolve) => {
        setTimeout(function(){
            resolve("Memasak Mie ...");
        }, 5000);
    });
}
const main = () => {
    persiapan()
        .then((res) => {
            console.log(res);
            return rebusAir();
        })
        .then((res) => {
            console.log(res);
            return masak();
        })
        .then((res) => {
            console.log(res);
        });
}

main();