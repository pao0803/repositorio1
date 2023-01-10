<?php
   include_once("sesiones.php");

   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="select * from personas where id='$id'";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   //Variable para implementar las alertas
   $entrar="";

   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       $id=$_POST['id'];
       $nombre=$_POST['nombre'];
       $apellidos=$_POST['apellidos'];

       $consulta="update personas set nombre='$nombre',apellidos='$apellidos' where id='$id'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
           //echo "<script>
             //       alert('.:: Registro Actualizado con Exito ::.');
               //     location.href='administrar.php';
                //</script>";
                $entrar="act";
       }
       else{
            //echo "<script>
              //      alert('Fallo la actualización, intentelo de nuevo ...');
                //    location.href='actualizar.php';
                 // </script>";
                 $entrar="noact";
       }


   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Actualizar Contacto::.</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>.:: Actualizar Contácto ::.</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombrelbl" required placeholder="Nombre" autofocus value="<?php echo $fila['nombre'] ?>"></td>
            </tr>
            <tr>
               <td><label for="apellidoslbl">Apellidos:</label></td>
                <td><input type="text" name="apellidos" id="apellidoslbl" required placeholder="Apellidos" value="<?php echo $fila['apellidos'] ?>" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" Value="Guardar"   ></td>
                <td><input type="reset" name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
    </form>
    <a href="menu.php" class="enlace_menu">Menú Principal</a>
</body>
</html>

<?php include_once("alertas.php")?>
