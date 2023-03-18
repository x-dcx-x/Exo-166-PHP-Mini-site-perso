let password = document.getElementById("id-password");
let passwordConfirm = document.getElementById("id-password-repeat");
let username = document.getElementById("id-username");
let age = document.getElementById("id-age");
let envoyer =document.getElementById("id-envoyer")

function checkPassword (){
    if (password.value !== passwordConfirm.value){
        passwordConfirm.setCustomValidity("les mots de passe ne sont pas identique !");
    }
    else {
        passwordConfirm.setCustomValidity('')
    }
}
password.addEventListener("change", checkPassword);
passwordConfirm.addEventListener("keyup",checkPassword);

console.log("js loaded");
