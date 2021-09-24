<?php
include "Conexion.php";

    $motivoR = $_POST['comentarioR2'];
    $elReg = $_POST['id_regR'];
    $usuarioSeguir = $_POST['usuario_rol'];

	$hoy = "SELECT CONVERT(VARCHAR(10),getdate(),23)";
    if ($resultHoy = sqlsrv_query($conn,$hoy)) { 
            $fechaArray =  sqlsrv_fetch_array($resultHoy, SQLSRV_FETCH_NUMERIC);
    }
    $motivoR = $motivoR . "_[" .$fechaArray[0]."]";
    $sqlUp2 = "UPDATE registro SET color_estado = ?, motivo_rechazo = ? WHERE id_encuesta = ?";
    $params_up= array('negro',$motivoR, $elReg);
    
    // $rows_affected = sqlsrv_rows_affected($pruebaUp2);

    // if( $rows_affected === false) {
        // die( print_r( sqlsrv_errors(), true));
    // } else
    if( $pruebaUp2 = sqlsrv_query($conn, $sqlUp2, $params_up)) {
        echo "<script> alert('Se guardaron cambios'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";
    } else {
        echo "<script> alert('No existe informacion para actualizar'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";
    }

?>