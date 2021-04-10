<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="insert.css" type="text/css">
    <title>Home</title>
</head>
<body>
<header>
        <img src="https://png.pngitem.com/pimgs/s/168-1680506_smash-ball-png-white-smash-bros-logo-transparent.png" alt="ejemplo" height="128" width="256">
        <a href="Prueba_GearElectricSAS_BE\select.php" class="linkTabla">Asistentes Registrados</a>
    </header>
    <div class="container">
        <p>Por favor rellene el siguiente formulario:</p>
        <form action="Prueba_GearElectricSAS_BE/insert.php" method="POST" onsubmit="return txtboxValidation()">
            <div class="form">
                <div class="documentTypes">
                    <p class="textField">Tipo de Documento:</p>
                    <input type="radio" name="documentType" id="tarjetaDeIdentidad" value="tarjetaDeIdentidad" required>
                    <label for="tarjetaDeIdentidad">Tarjeta de Identidad</label>
                    <input type="radio" name="documentType" id="passport" value="passport" required>
                    <label for="passport">Pasaporte</label>
                    <input type="radio" name="documentType" id="cedulaCiudadania" value="cedulaCiudadania" required>
                    <label for="cedulaCiudadania">Cédula de Ciudadanía</label>
                    <input type="radio" name="documentType" id="cedulaExtranjeria" value="cedulaExtranjeria" required>
                    <label for="cedulaExtranjeria">Cédula de Extranjería</label>
                    <input type="radio" name="documentType" id="registroCivil" value="registroCivil" required>
                    <label for="cedulaExtranjeria">Registro Civil (RC)</label>
                </div>

                <div class="textBoxes">
                   <span class="textField">N°:</span><input type="text" name="numero" id="docIdN" placeholder="Aquí va su documento..." required>
                    <span class="textField">Nombre:</span> <input type="text" name="nombre" id="namePerson" placeholder="Ingrese su nombre..."   required>
                    <span class="textField">Teléfono:</span> <input type="text" name="telefono" id="tlf" placeholder="555-5555555" required>
                    <span class="textField">Correo:</span> <input type="email" name="correo" id="mail" placeholder="ejemplo@example.com" required>
                </div>
                
                <div class="btnSubmit">
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>

    </div>
    <footer>
        <p>Autor: Rubén González</p>
        <a href="mailto:artorias201001@gmail.com" class="email">artorias201001@gmail.com</a></p>
    </footer>
</body>
</html>