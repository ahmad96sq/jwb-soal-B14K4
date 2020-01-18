function cek_kata(str) {
    const a = typeof (str);
    if (a == "string") {

        const arr = str.split(" ");
        const pnjng = arr.length;
        for (let i = 0; i <= arr.length; i++) {
            if (arr[i] >= 0) {
                arr.splice(0, 1);
            }
        }
        console.log(arr.length + '/' + pnjng);
    } else {
        console.log('Parameter harus string!');
    }
}

cek_kata('ini adalah sebuah kata');
cek_kata('2 pasang sandal hilang');
cek_kata(33);