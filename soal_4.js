// function cetak_gambar(e) {

//     if (e % 2 === 0) {
//         console.log('harus bilangan ganjil!')
//     } else {
//         let s = '';

//         for (var a = 1; a <= e; a++) {
//             s += '* ';
//             for (var b = 1; b <= e - 2; b++) {
//                 s += '= ';
//                 if (a === 3) {
//                     var date = s.replace("=", "*");
//                     s += date;
//                 }
//             }
//             s += '* ';
//             s += '\n';

//         }
//         console.log(s);
//     }

// }

// cetak_gambar(5);


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