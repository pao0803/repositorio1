<?php
  
  
  include_once("sesiones.php");

  

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        
       <div>
           <h1>.:: Administrar Contáctos ::.</h1>
           <div class="table-container">
                <table class="table">
                    <thead>
                        <th class="table_head">No.</th>
                        <th class="table_head">Nombre</th>
                        <th class="table_head">Apellidos</th>
                       <?php if ($priv=="admin"){?>
                        <th class="table_head">Acciones</th>
                      <?php } ?>
                    </thead>
                    <?php
                         include_once("conexion.php");
                        $consulta="select * from personas";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
                                <tr>
                                    <td class="table_data"><?php echo $fila['id'] ?></td>
                                    <td class="table_data"><?php echo $fila['nombre'] ?></td>
                                    <td class="table_data"><?php echo $fila['apellidos'] ?></td>
                                    <?php if ($priv=="admin") { ?>
                                    <td class="table_data" colspan="2" >
                                    <a class="btn_acciones" href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a>
                                    <a class="btn_acciones" href="eliminar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a>
                                    </td>
                                   <?php } ?>
                                </tr> 
                             <?php
                            }
                        }

                    ?>
                    
                                 
                           
                </table>
           </div>
           <h3>Existen <?php echo mysqli_num_rows($resultado) ?> contáctos</h3>
           <?php if ($priv=="admin") { ?>
           <a class="enlace_menu" href="menu.php">Menú Principal</a>
           <?php } else { ?>
           <a class="enlace_menu"  href="login.php"> <br> Cerrar Sesión</a>
           <?php } ?>
          
       </div>
    </body>
</html>