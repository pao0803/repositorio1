<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js" ></script>

<?php if ($entrar=="admin") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡B I E N V E N I D O!',
                    text:'al sistema ... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='menu.php';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="estandar") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'B I E N V E N I D O !!',
                    text:'al sistema ... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="error1") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Usuario y contraseña incorrectas ',
                    text:'por favor verifique ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='login.php';
                    });
    }
    mensaje();
</script>
<?php } ?>


<?php if ($entrar=="registrado") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'R E G I S T R O  E X I T O S O',
                    text:'en el sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='menu.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noreg") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'R E G I S T R O  N O  I N S E R T A D O',
                    text:'intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='insertar.php';
                    });
    }
    mensaje();
</script>
<?php } ?>


<?php if ($entrar=="act") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S E  A C T U A L I Z O',
                    text:'el registro correctamente en el sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='actualizar.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noact") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  A C T U A L I Z O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='actualizar.php';
                    });
    }
    mensaje();
</script>
<?php } ?>






<?php if ($entrar=="eli") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'S E  E L I M I N O',
                    text:'el registro correctamente del sistema... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='menu.php';
                    });
    }
    mensaje();
</script>
<?php } elseif ($entrar=="noeli") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'N O  S E  E L I M I N O',
                    text:'el registro, intente de nuevo ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='login.php';
                    });
    }
    mensaje();
</script>
<?php } ?>


