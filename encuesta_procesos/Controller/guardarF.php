<?php
include "configuracion.php";
									$concatenarNombDoc = $_POST['guardarDoc'];
									$leerMov = $_POST['id_env'];


								    $unidad = $_POST['unidadSelct'];
									$domUr = $_POST['domUR'];
									$listaCompleta = $_POST['listaDoc'];
									$elApellido1 = strtoupper($_POST['apellido1']);
									$elApellido2 = strtoupper($_POST['apellido2']);
									$elNombre = strtoupper($_POST['nombre']);
									$elPuesto = $_POST['puesto'];
									$elDom_t = $_POST['dom_titular'];
									$elCorreo_t = strtoupper($_POST['correo']);
									$elNum_t = $_POST['num_t'];
									$laExt_t = $_POST['ext'];
									
									$elDom_j = $_POST['dom_titular_j'];
									$elApellido1_j = strtoupper($_POST['apellido1_j']);
									$elApellido2_j = strtoupper($_POST['apellido2_j']);
									$elNombre_j = strtoupper($_POST['nombre_j']);
									$elPuesto_j = $_POST['puesto_j'];
									$elCorreo_j = strtoupper($_POST['correo_j']);
									$elNum_j = $_POST['num_j'];
									$laExt_j = $_POST['ext_j'];
									
									$elApellido1_ep = strtoupper($_POST['apellido1_ep']);
									$elApellido2_ep= strtoupper($_POST['apellido2_ep']);
									$elNombre_ep= strtoupper($_POST['nombre_ep']);
									$elCorreo_ep = strtoupper($_POST['correo_ep']);
									$elNum_ep= $_POST['num_ep'];
									$laExt_ep= $_POST['ext_ep'];

                                    // $bandera = 0;
// if($bandera == 1){
				// 	echo '<script type="text/javascript"> alert("No puede ser registrado este movimiento, ya que existe un último movimiento de esta persona en bandeja de rechazo, Se sugiere editar el rechazo."); </script>';
				// }else
                                    // // ***********************************buscamos todos los datos por si existe un mov similar 
                                    //                 $datosDobles = "SELECT id_estructura, color_estado FROM registro WHERE ur = '$unidad' AND correo_t = '$elCorreo_t' AND apellido1_t = '$elApellido1' AND apellido2_t = '$elApellido2_j' AND nombre_t = '$elNombre_j' AND tel_t = '$elNum_t' AND ext_t = '$laExt_t'  ORDER BY id_encuesta DESC";
                                    //                 if($resRechazo = mysqli_query($conexion, $datosDobles)){
                                    //                     $rechazoActual = mysqli_fetch_row($resRechazo);
                                    //                     if($rechazoActual[1] == "negro"){
                                    //                         $bandera = 1;
                                    //                     }
                                    //                 }	

                                    //----------------Sacamos la Hora 
				$hoy = "select CURDATE()";
				$tiempo ="select curTime()";

				 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
						 $fechaArray = mysqli_fetch_row($resultHoy);
						 $horaArray = mysqli_fetch_row($resultTime);
				 }
				$h_id = str_replace ( ":", '',$horaArray[0] ); 
				$f_id = str_replace ( "-", '',$fechaArray[0] ); 
									
                                   	// if ($leerMov == "x") { //$res1Check<1
                                   		$newsql = "INSERT INTO registro(
											   					ur,
																domicilio_ur,
																nombre_t,
																apellido1_t,
																apellido2_t,
																puesto_t,
																domicilio_t,
																correo_t,
																tel_t,
																ext_t,
																nombre_j,
																apellido1_j,
																apellido2_j,
																puesto_j,
																domicilio_j,
																correo_j,
																tel_j,
																ext_j,
																nombre_e,
																apellido1_e,
																apellido2_e,
																correo_e,
																tel_e,
																ext_e,
																ine,
																fmp,
																aur,
																fechaCaptura,
																id_doc,
																color_estado				
																) VALUES (
																	'$unidad',			
																	'$domUr',
																	'$elNombre',
																	'$elApellido1',
																	'$elApellido2',
																	'$elPuesto',
																	'$elDom_t',
																	'$elCorreo_t',
																	'$elNum_t',
																	'$laExt_t',
																	'$elNombre_j',
																	'$elApellido1_j',
																	'$elApellido2_j',
																	'$elPuesto_j',
																	'$elDom_j',
																	'$elCorreo_j',
																	'$elNum_j',
																	'$laExt_j',
																	'$elNombre_ep',
																	'$elApellido1_ep',
																	'$elApellido2_ep',
																	'$elCorreo_ep',
																	'$elNum_ep',
																	'$laExt_ep',
																	'',
																	'',
																	'',
																	'$fechaArray[0]',
																	'$f_id$h_id',
																	'verde'
																)";

                                   		if($datasub = mysqli_query($conexion,$newsql)){
                                   		// 	if($datasub2 = mysqli_query($conexion,$datosDobles)){
		                                //    		$extid =mysqli_fetch_row($datasub2);
										//     	$res1Check = mysqli_num_rows($datasub2);
		                                //    		$banderaid = $extid[0];
		                                //    	}	
                                   		}else{
                                               echo "NO SE HISO EL INSERT";
                                           }
                                   	// }

?>