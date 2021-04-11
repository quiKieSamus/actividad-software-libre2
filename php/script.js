let txtDocId = document.getElementById("docIdN");
let txtName = document.getElementById("namePerson");
let txtTelefono = document.getElementById("tlf");
let txtCorreo = document.getElementById("mail");




// let docIdLength = txtDocId.value.length;
// let nameLength = txtName.value.length;
// let tlfLength = txtTelefono.value.length;
// let correoLength = txtCorreo.value.length;
// const txtboxes = [docIdLength, nameLength, tlfLength, correoLength];


const txtboxValidation = () => {
    if (txtDocId.value.length > 20) {
        alert("El número del documento no puede pasar los 20 caracteres.");
        return (false);
    } else if (txtName.value === null || txtName.value.length === 0 ||txtName.value.length > 100) {
        alert("El nombre no puede tener mas de 100 caracteres, vacío ni letras.");
        return (false);
    } else if (isNaN(txtTelefono.value)) {
        alert("El campo del telefono solo acepta números.");
        return (false);
    }
    return (true)
}

const onlyLetters = (ev, input) => {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (ev) {
            var charCode = ev.which;
        }
        else {
            return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode === 32)) {
            return true;
        }
        else {
            return false;
        }
    }
    catch (e) {
        alert(e.Description);
    }
}
