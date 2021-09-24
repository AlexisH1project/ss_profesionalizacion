<?php

include "../entidades/usuarios.php";
class usuariosDatos{
	function insertarUsuarios($usuario,$pass){
		include "../../encuesta_procesos/Controller/Conexion.php";
		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = $pass;
		// mysqli_select_db($con,"bd_profss");
		$sql = "INSERT INTO usuarios (usuario,contrasena) VALUES(?,?)";
		
		if(sqlsrv_query($conn, $sql, array($usuarios->usuario,$usuarios->contrasena))){
			return true;
		}else{
			return false;
		}
		// mysqli_close($con);
	}
	
    function validar($usuario,$pass){
		include "../../encuesta_procesos/Controller/Conexion.php";

		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = $pass;
		$sql = "SELECT * FROM usuarios WHERE usuario= ? and contrasena= ?";
        
     	$consulta = sqlsrv_query($conn,$sql,array($usuarios->usuario,$usuarios->contrasena));
      if($fila = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)){
		 if($fila['usuario'] == $usuarios->usuario && $fila['contrasena']==$usuarios->contrasena){
                return true;
            }else{
	            return false;
			}
	    }else{
			return false;

		}
	}
}
?>