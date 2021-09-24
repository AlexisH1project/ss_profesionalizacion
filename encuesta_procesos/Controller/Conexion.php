<?PHP
$serverName = "10.1.249.247"; //serverName\instanceName
$connectionInfo = array( "Database"=>"bd_profss", "UID"=>"profesional1", "PWD"=>"profesional");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
/*if( $conn ) {
     echo "Conexi&oacute;n establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
?>