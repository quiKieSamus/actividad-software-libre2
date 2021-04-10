const validateForm = () => {
    let fEmail = document.forms[login][email].value;
    if(fEmail === ""){
        alert("El correo no puede estar vacío");
        return false
    }
    
}

