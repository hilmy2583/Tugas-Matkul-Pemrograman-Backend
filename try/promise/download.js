const download = () => {
    return new Promise((resolve, reject) => {
        const status = true;

        setTimeout(() => {
            if(status){
                console.log("Download Selesai");
            }
            else{
                console.log("Download Gagal");
            }
        }, 5000);
    });
}

console.log(download());

// atau

download()
    .then((res) => {
        console.log(res);
    })
    .catch((err) => {
        console.log(err);
    });