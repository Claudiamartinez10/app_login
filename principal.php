<?php
session_start();
if (!$_SESSION["autorizado"]) {
    # code...
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA WEB PRINCIPAL</title>
</head>
<body>
    <h2>PAGINA WEB PRINCIPAL</h2>
    <h3>Bienvenid@ :  <?php echo $_SESSION["user"]?></h3>
    <h3>tipo de Usuario :  <?php echo $_SESSION["tipo"]?></h3>
    <a href ="cerrar.php">CERRAR SESION </a>
</body>
</html>