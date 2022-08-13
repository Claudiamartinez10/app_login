<?php
session_start();

$mensaje = "";

if (isset($_POST["iniciar"])) {
   $usuario = $_POST["usuario"];
   $clave = $_POST["clave"];
   $tipo = $_POST["tipousuario"];
   $usuario = strtoupper($usuario);

   if ($usuario == "ADMIN" && $clave == "12345") {
    //variables de sesion
    $_SESSION["user"] ="CLAUDIA ELISA MARTINEZ SALVADOR";
    $_SESSION["autorizado"] =true;
    $_SESSION["tipo"] =$tipo;
       header("location: principal.php");//redireccionar a otra pagina
   }else {
    $mensaje = "Usuario y/o contraseña incorrecta";
   }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN </h2>
    <form method ="POST" action="index.php">
        <label for="">usuario: </label>
        <input type="text" name="usuario" placeholder="usuario"><br><br>
         <label for="">clave: </label>
        <input type="password" name="clave" placeholder="password"><br><br>
        <select name="tipousuario" id="">
            <option value="Administrador">Administrador</option>
            <option value="Invitado">Invitado</option>
        </select>
        <br><br>
        <button type="submit" name="iniciar">INICIAR SECCION</button>
    </form>
    <?php echo $mensaje; ?>

</body>
</html>