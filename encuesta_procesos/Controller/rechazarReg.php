<?php
include "configuracion.php";

    $motivoR = $_POST['comentarioR2'];
    $elReg = $_POST['id_regR'];
    $usuarioSeguir = $_POST['usuario_rol'];

    $hoy = "select CURDATE()";
    $tiempo ="select curTime()";

     if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
             $fechaArray = mysqli_fetch_row($resultHoy);
             $horaArray = mysqli_fetch_row($resultTime);
     }

     $motivoR = $motivoR . "_[" . $fechaArray[0]."]";

    $sqlUp2 = "UPDATE registro SET color_estado = 'negro', motivo_rechazo = '$motivoR' WHERE id_encuesta = '$elReg'";
    if($pruebaUp2 = mysqli_query($conexion, $sqlUp2)){
        echo "<script> alert('Se guardaron cambios'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";

    }else{
        echo "<script> alert('Existe un error'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";

    }



?>