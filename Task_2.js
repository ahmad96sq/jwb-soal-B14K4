const huruf = /^[a-z0-9_]{5,12}$/;
const angka = /[0-9]*/;
const special = /[/_.!]/g;
const kapital = /[A-Z]/g;


function usernameValidity(user) {
    if (user.length >= 5 &&
        user.length <= 12 &&
        huruf.test(user)) {
        return true;
    }
    return false;
}


function passwordValidity(pass) {
    if (pass.length == 7 &&
        pass.match(special).length == 1 &&
        pass.match(angka).length == 1 &&
        pass.match(kapital).length == 5

    ) {
        return true;
    }
    return false;
}

console.log(usernameValidity('fiona_mareta')); // true
console.log(usernameValidity('fionamareta9')); // true
console.log(usernameValidity('FIONA-mareta')); // false
console.log(passwordValidity('1WORLD!')); // true