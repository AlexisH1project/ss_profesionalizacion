
<?php
	
	$mysqli=new mysqli("localhost","root","s!(0n_25","bd_sistemadecontrol");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>
