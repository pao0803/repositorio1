<?php
  
  
  include_once("sesiones.php");

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Menu:.</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>.:: Contáctos ::.</h1>
    <a href="insertar.php" class="enlace_menu">Nuevo</a>
    <a href="administrar.php" class="enlace_menu">Administrar</a>
    <a href="login.php" class="enlace_menu"><?php echo $names ?> Cerrar Sesión</a>
</body>
</html>