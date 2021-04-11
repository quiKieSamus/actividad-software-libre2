let inputEmail = document.getElementById("inputEmail");
let inputPassword = document.getElementById("inputPassword");
let inputPassword1 = document.getElementById("inputPassword1");

const validateBoxes = () => {
    if(inputEmail.value === "") {
        alert("El campo email no puede estar vacío");
        return false;
    }
    if(inputPassword.value === "") {
        alert("El campo de la contraseña no puede estar vacío");
        return false;
    }
    return true;
}

const isPassEqual = () => {
    if(inputPassword != inputPassword1){
        alert("Las contraseñas deben ser iguales");
        return false;
    }

    return true;
}






