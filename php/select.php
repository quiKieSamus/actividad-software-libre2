<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="select.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Asistentes</title>
</head>

<body>
    <header>
        <div class="headerTop">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Super_Smash_Bros._Ultimate_logo.svg/1280px-Super_Smash_Bros._Ultimate_logo.svg.png"
            height="128" width="480">
            <a href="index.html" class="linkRegistro">Ingresar nuevo asistente.</a>
        </div>
        <div class="search">
            <label for="txtFilter">Busqueda por nombre:</label>
            <input type="text" name="filter" id="txtFilter" onkeyup="filterSearch(3)" placeholder="Busque un nombre...">
        </div>
    </header>
    <div class="container">
        <?php
        include '../config.php';
        $mysqli = new mysqli($server, $username, $password, $database);
        $query = "SELECT * FROM asistente";

        echo '<table border="0" cellspacing="2" cellpadding="2" id="tableAssist"> 
                    <tr> 
                        <th> <font face="Arial">Id</font> </th> 
                        <th> <font face="Arial">Tipo de Documento</font> </th> 
                        <th> <font face="Arial">N° del Documento</font> </th> 
                        <th> <font face="Arial">Nombre</font> </th> 
                        <th> <font face="Arial">Teléfono</font> </th> 
                        <th> <font face="Arial">Correo</font> </th> 
                    </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $fieldDocumentType = $row["docType"];
                $fieldDocN = $row["docN"];
                $fieldNombre = $row["name"];
                $fieldTlf = $row["tlf"];
                $fieldEmail = $row["email"];

                echo '<tr> 
                                    
                                    <td>' . $id . '</td> 
                                    <td>' . $fieldDocumentType . '</td> 
                                    <td>' . $fieldDocN . '</td> 
                                    <td>' . $fieldNombre . '</td> 
                                    <td>' . $fieldTlf . '</td> 
                                    <td>' . $fieldEmail . '</td>
                                </tr>';
            }
            $result->free();
        }
        ?>
    </div>
</body>
<script src="select.js"></script>

</html>