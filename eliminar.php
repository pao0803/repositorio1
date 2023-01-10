<?php
   include_once("sesiones.php");

   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="delete from personas where id='$id'";
   $resultado=mysqli_query($con,$consulta);

   //Variable para implementar las alertas
   $entrar="";

   if ($resultado){
        //echo "<script>
          //      alert('Registro eliminado con Éxito');
            //    location.href='administrar.php';
            // </script>";
            $entrar="eli";
   }
   else{
      //  echo "<script>
       //         alert('Registro NO eliminado... VERIFIQUE');
         //       location.href='administrar.php';
           //   </script>";
           $entrar="noeli";

   }

?>

<?php include_once("alertas.php")?>