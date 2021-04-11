<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="insert.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrado</title>
</head>

<body>

    <header>
        <div class="headerTop">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Super_Smash_Bros._Ultimate_logo.svg/1280px-Super_Smash_Bros._Ultimate_logo.svg.png"
            height="128" width="480">
            <a href="select.php" class="linkTop">Visualizar</a>
            <a href="index.html" class="linkTop">Ingresar nuevo asistente</a>
        </div>
    </header>

    <div class="container">
        <?php
        include '../config.php';

        $conn = mysqli_connect($server, $username, $password, $database);

        if (!$conn) {
            die("connection failed: " . mysqli_connect_error());
        }

        $fieldDocumentType = $conn->real_escape_string($_POST['documentType']);
        $fieldDocN = $conn->real_escape_string($_POST['numero']);
        $fieldNombre = $conn->real_escape_string($_POST['nombre']);
        $fieldTlf = $conn->real_escape_string($_POST['telefono']);
        $fieldEmail = $conn->real_escape_string($_POST['correo']);

        $query = "INSERT INTO asistente (docType, docN, name, tlf, email) VALUES ('{$fieldDocumentType}','{$fieldDocN}','{$fieldNombre}','{$fieldTlf}','{$fieldEmail}')";

        if ($conn->query($query) === TRUE) {
            echo '<h1>Ingresado</h1>';
        } else {
            echo "error: " . $query . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </div>
</body>

</html>