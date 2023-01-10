<?php
  
  
  include_once("sesiones.php");

  //Variable para implementar las alertas
  $entrar="";

  if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];

      include_once('conexion.php');

      $consulta="insert into personas values(null,'$nombre','$apellidos')";

      $resultado=mysqli_query($con,$consulta);

      if ($resultado)
      {
        //echo "<script>
          //      alert('Registro insertado Exitosamente');
            //    location.href='insertar.php';
             ///script>"; 
             $entrar="registrado";
      }
      else
      {
        //echo "<script>
          //      alert('Registro No insertado, intentelo de nuevo');
            //    location.href='insertar.php';
              //</script>"; 
              $entrar="noreg";
      }

   }

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Nuevo Contacto::.</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>.:: Nuevo Contácto ::.</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombrelbl" required placeholder="Nombre" autofocus></td>
            </tr>
            <tr>
               <td><label for="apellidoslbl">Apellidos:</label></td>
                <td><input type="text" name="apellidos" id="apellidoslbl" required placeholder="Apellidos" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" Value="Enviar"   ></td>
                <td><input type="reset" name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
    </form>
    <a href="menu.php" class="enlace_menu">Menú Principal</a>
</body>
</html>
<?php include_once("alertas.php")?>