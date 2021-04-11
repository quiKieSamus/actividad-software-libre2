let inputEmail = document.getElementById("inputEmail");
let inputPassword = document.getElementById("inputPassword");

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






