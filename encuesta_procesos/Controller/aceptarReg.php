<?php
include "configuracion.php";

    $laCuenta = $_POST['user'];
    $laContra = $_POST['passw'];
    $elReg = $_POST['id_reg'];
    $usuarioSeguir = $_POST['usuario_rol'];

    $hoy = "select CURDATE()";
    $tiempo ="select curTime()";

     if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
             $fechaArray = mysqli_fetch_row($resultHoy);
             $horaArray = mysqli_fetch_row($resultTime);
     }

    
    $sqlUp = "UPDATE registro SET color_estado = 'guinda', usuario_asignado = '$laCuenta' , password_asignado = '$laContra', fechaEnvioUsuario = '$fechaArray[0]' WHERE id_encuesta = '$elReg'";
    if($pruebaUp = mysqli_query($conexion, $sqlUp)){
        echo "<script> alert('Se guardaron cambios'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";

    }else{
        echo "<script> alert('Existe un error'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";

    }



?>