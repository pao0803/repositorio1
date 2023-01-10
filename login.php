<?php

   session_start();

   if (isset($_SESSION))
   {
       session_destroy();
   }

   //Variable para implementar las alertas
   $entrar="";

   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $us=$_POST['usuario'];
      $ps=$_POST['contrasena'];

      include_once('conexion.php');

      $consulta="select names,user,pwd,privilegio from usuarios where user='$us' and pwd='$ps'";

      $resultado=mysqli_query($con,$consulta);

      if (mysqli_num_rows($resultado)>0)
      {
          if ($fila=mysqli_fetch_assoc($resultado))
          {
              $priv=$fila['privilegio'];
              $names=$fila['names'];

              session_start();
              $_SESSION['user']=$us;
              $_SESSION['pwd']=$ps;
              $_SESSION['privilegio']=$priv;
              $_SESSION['names']=$names;
            

              //Entre al menu de opciones 
             // echo "Usuario y contraseña correctas -Bienvenido al sistema-";

             if ($priv=="admin"){
                //echo "<script>
                //alert('-Bienvenido- $names');
               // location.href='menu.php';
             // </script>";
             $entrar="admin";
             }
             else{
               // echo "<script>
                //alert('-Bienvenido- $names');
               // location.href='administrar.php';
             // </script>";
             $entrar="estandar";
             }
            

          }
      }
      else
      {
          //echo "Usuario y contraseña incorrectas por favor verifique ...";
        // echo "<script>
                // alert('Usuario y contraseña incorrectas por favor verifique ...');
                // location.href='login.php';
              // </script>";
              $entrar="error1";
      }

   }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Acceso al sistema</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ACCESO AL SISTEMA "GESTION CONTACTOS"</h3>
    <hr>
    <img class="imglo" src="img3.png" alt="">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table align="center">
            <tr>
               <td><label for="usuariolbl">Usuario: </label></td>
               <td><input type="text" name="usuario" id="usuariolbl"  required></td>
            </tr>
            <tr>
               <td><label for="contrasenalbl">Contraseña: </label></td>
               <td><input type="password" name="contrasena" id="contrasenalbl" required></td>
            </tr>
            <tr>
               <td><input type="submit" value="Entrar"></td>
               <td><input type="reset" value="Limpiar"></td>
            </tr>
        </table>
    </form>
    <hr>
    <a  href="index.html" class="enlace_menu">Regresar Pagina Principal</a>
</body>
</html>

<?php include_once("alertas.php")?>