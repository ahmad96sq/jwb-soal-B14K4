const cetakGambar = (bil) => {
    if (bil % 2 === 0) {
        console.log("harus bilangan ganjil")
    } else {
        for (let i = 0; i < bil; i++) {
            let data = []
            for (let j = 0; j < bil; j++) {
                if (i === Math.floor(bil / 2)) {
                    data[j] = "*"
                } else if (j === 0) {
                    data[j] = "*"
                } else if (j === (bil - 1)) {
                    data[j] = "*"
                } else {
                    data[j] = "="
                }
            }
            console.log(data.join(" "))
        }
    }

}
cetakGambar(5)
