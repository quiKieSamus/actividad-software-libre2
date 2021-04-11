<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- insert for signup.html -->
<?php
    include 'config.php';

    $conn = mysqli_connect($server, $username, $password, $database);

        if (!$conn) {
            die("connection failed: " . mysqli_connect_error());
        }

        // $field = $conn->real_escape_string($_POST['documentType']);
        // $fieldDocN = $conn->real_escape_string($_POST['numero']);
        // $fieldNombre = $conn->real_escape_string($_POST['nombre']);
        $fieldEmail = $conn->real_escape_string($_POST['vEmail']);
        $fieldContraseña = $conn->real_escape_string($_POST['vPassword']);

        $query = "INSERT INTO users (correo, contraseña) VALUES ('{$fieldEmail}','{$fieldContraseña}')";
        $sql = mysqli_query($conn,"SELECT * FROM users where correo='$fieldEmail'");
        if(mysqli_num_rows($sql)>0) {
            echo 'Ya existe una cuenta asociada con este correo';
            die();
        }
        if ($conn->query($query) === TRUE) {
            echo '<p>Usuario creado con éxito</p>
                    <a href="php/index.html">Empezar a registrar</a> <a href="php/select.php">Visualizar registrados</a>';
        } else {
            echo "error: " . $query . "<br>" . $conn->error;
        }

        $conn->close();


?>
</body>
</html>