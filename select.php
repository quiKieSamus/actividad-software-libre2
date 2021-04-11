<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- login checkup process -->
    <?php
include("config.php");
session_start();
$db = mysqli_connect($server, $username, $password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $fieldEmail = mysqli_real_escape_string($db, $_POST['vEmail']);
   $fieldPassword = mysqli_real_escape_string($db, $_POST['vPassword']); 
   
   $sql = "SELECT id FROM users WHERE correo = '$fieldEmail' and contraseña = '$fieldPassword'";
   $result = mysqli_query($db, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      header("location: php/");
   }else {
      $error = "Your Login Name or Password is invalid";
      echo $error;
   }
}
?>
</body>
</html>