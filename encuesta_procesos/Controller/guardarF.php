<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<?php
include "Conexion.php";
									$concatenarNombDoc = $_POST['guardarDoc'];
									$leerMov = $_POST['id_env'];
									
								    $unidad = $_POST['unidadSelct'];
									$domUr = $_POST['domUR'];
									
									$rfc_tur = strtoupper($_POST['rfc_u']); // --------------------falta 
									$listaCompleta = $_POST['listaDoc'];
									$elApellido1 = strtoupper($_POST['apellido1']);


									$elApellido2 = strtoupper($_POST['apellido2']);
									$elNombre = strtoupper($_POST['nombre']);
									$elPuesto = $_POST['puesto'];
									$elDom_t = $_POST['dom_titular'];
									$elCorreo_t = strtolower($_POST['correo']);
									$rfc_t = strtoupper($_POST['rfc_t']); // --------------------falta 
									$elCorreo_tA = strtolower($_POST['correoA']); // --------------------falta
									$elNum_t = $_POST['num_t'];
									$laExt_t = $_POST['ext'];
									
									$elDom_j = $_POST['dom_titular_j'];
									$elApellido1_j = strtoupper($_POST['apellido1_j']);
									$elApellido2_j = strtoupper($_POST['apellido2_j']);
									$elNombre_j = strtoupper($_POST['nombre_j']);
									$elPuesto_j = $_POST['puesto_j'];
									$elCorreo_j = strtolower($_POST['correo_j']);
									$elCorreo_jA = strtolower($_POST['correoA_j']); // --------------------falta
									$elNum_j = $_POST['num_j'];
									$laExt_j = $_POST['ext_j'];
									$elCel_j = $_POST['cel_j'];// --------------------falta
									
									$rfc_ep = strtoupper($_POST['rfc_ep']); // --------------------falta 
									$elApellido1_ep = strtoupper($_POST['apellido1_ep']);
									$elApellido2_ep= strtoupper($_POST['apellido2_ep']);
									$elPuesto_ep = $_POST['puesto_ep'];
									$elNombre_ep= strtoupper($_POST['nombre_ep']);
									$elCorreo_ep = strtolower($_POST['correo_ep']);
									$elCorreo_epA = strtolower($_POST['correoA_ep']); // --------------------falta
									$elNum_ep= $_POST['num_ep'];
									$laExt_ep= $_POST['ext_ep'];
									$elCel_ep = $_POST['cel_ep'];// --------------------falta


                                    // $bandera = 0;
                                    //----------------Sacamos la Hora 
				$hoy = "SELECT CONVERT(VARCHAR(10),getdate(),23)";
				 if ($resultHoy = sqlsrv_query($conn,$hoy)) { 
						 $fechaArray =  sqlsrv_fetch_array($resultHoy, SQLSRV_FETCH_NUMERIC);
				 }
				// $h_id = str_replace ( ":", '',$horaArray[0] ); 
				$f_id = str_replace ( "-", '',$fechaArray[0] ); 				
                                   	// if ($leerMov == "x") { //$res1Check<1
                                   		$newsql = "INSERT INTO registro(
											   					ur,
																domicilio_ur,
																rfc_t,
																nombre_t,
																apellido1_t,
																apellido2_t,
																puesto_t,
																domicilio_t,
																correo_oft,
																correo_perst,
																tel_t,
																ext_t,
																rfc_j,
																nombre_j,
																apellido1_j,
																apellido2_j,
																puesto_j,
																domicilio_j,
																correo_ofj,
																correo_persj,
																tel_j,
																ext_j,
																cel_j,
																rfc_e,
																nombre_e,
																apellido1_e,
																apellido2_e,
																puesto_e,
																correo_ofe,
																correo_perse,
																tel_e,
																ext_e,
																cel_e,
																ine,
																fmp,
																aur,
																fechaCaptura,
																id_doc,
																color_estado,
																usuario_asignado,
																password_asignado,
																fechaEnvioUsuario,
																motivo_rechazo
																) VALUES (
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?,
																	?
																)";
										$params_insert_formu = array(
																	$unidad,			
																	$domUr,
																	$rfc_tur,
																	$elNombre,
																	$elApellido1,
																	$elApellido2,
																	$elPuesto,
																	$elDom_t,
																	$elCorreo_t,
																	$elCorreo_tA,
																	$elNum_t,
																	$laExt_t,
																	$rfc_t,
																	$elNombre_j,
																	$elApellido1_j,
																	$elApellido2_j,
																	$elPuesto_j,
																	$elDom_j,
																	$elCorreo_j,
																	$elCorreo_jA,
																	$elNum_j,
																	$laExt_j,
																	$elCel_j,
																	$rfc_ep,
																	$elNombre_ep,
																	$elApellido1_ep,
																	$elApellido2_ep,
																	$elPuesto_ep,
																	$elCorreo_ep,
																	$elCorreo_epA,
																	$elNum_ep,
																	$laExt_ep,
																	$elCel_ep,
																	'',
																	'',
																	'',
																	$fechaArray[0],
																	$f_id,
																	'verde',
																	'',
																	'',
																	'',
																	''
																	);
                                   		if($datasub = sqlsrv_query($conn, $newsql, $params_insert_formu)){
                                   		
			?>

										<div class="alert alert-success">
											¡Bien! Tu Solicitud fue enviada correctamente
											<a href="../formu_p.php" class="alert-link">Salir</a>
										</div>
<?php
                                   		 }else{
?>
											<div class="alert alert-danger">
												¡Error! 
											<a href="../formu_p.php" class="alert-link">Intentar de nuevo </a>
											</div> 
<?php											
                                           }
?>