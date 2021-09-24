<?php
include "Conexion.php";

    $laCuenta = $_POST['user'];
    $laContra = $_POST['passw'];
    $elReg = $_POST['id_reg'];
    $usuarioSeguir = $_POST['usuario_rol'];

	$hoy = "SELECT CONVERT(VARCHAR(10),getdate(),23)";
    if ($resultHoy = sqlsrv_query($conn,$hoy)) { 
            $fechaArray =  sqlsrv_fetch_array($resultHoy, SQLSRV_FETCH_NUMERIC);
    }
    $sqlUp = "UPDATE registro SET color_estado = ?, usuario_asignado = ?, password_asignado = ?, fechaEnvioUsuario = ? WHERE id_encuesta = ?";
    $pruebaUp = sqlsrv_query($conn, $sqlUp, array('guinda', $laCuenta,$laContra, $fechaArray[0], $elReg));
    
    $rows_affected = sqlsrv_rows_affected($pruebaUp);
    if( $rows_affected === false) {
        die( print_r( sqlsrv_errors(), true));
    } elseif( $rows_affected == -1) {
        echo "<script> alert('No existe informacion para actualizar'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";
    } else {
        echo "<script> alert('Se guardaron cambios'); window.location.href = '../consultaEstado.php?usuario_rol=$usuarioSeguir'</script>";
    }



?>