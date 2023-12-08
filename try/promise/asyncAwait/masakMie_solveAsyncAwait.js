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

// penggunaan async bukanlah pengganti promise,
// namun async adalah cara penulisan
// yang membuat promise mudah dibaca

const main = async () => {
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
}

main();