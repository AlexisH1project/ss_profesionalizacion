
<html>
	<head>
		<meta charset="utf-8">
		<title>Consulta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<link href='css/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>
		<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/estilossicon.css">

		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>

		<link rel="stylesheet" href="css/estilossicon.css">

	<style type="text/css">
			.derecha   { float: right; }
			.izquierda   { float: left; }
		  <style>


		table {
			width: 100%;
			display:block;
		}
		thead {
			display: inline-block;
			width: 100%;
			height: 60px;
			background: white;
		}
		tbody {
			max-height: 400px;
			display: inline-block;
			width: 100%;
			overflow: scroll;
		}

		th, td{
			min-width: 190px;
			max-width: 200px;
		}

			.container-4 input#search{
			width: 130px;
			height: 30px;
			background: #fff;
			border: none;
			font-size: 10pt;
			font-family: 'Arial', sans-serif;
			font-weight: 400;
			float: left;
			color: #00000;
			padding-left: 15px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			}

			.container-4 button.icon{
			-webkit-border-top-right-radius: 5px;
			-webkit-border-bottom-right-radius: 5px;
			-moz-border-radius-topright: 5px;
			-moz-border-radius-bottomright: 5px;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			
			border: none;
			background: #fff;
			height: 30px;
			width: 50px;
			color: #4f5b66;
			opacity: 0;
			font-size: 10pt;
			
			-webkit-transition: all .55s ease;
			-moz-transition: all .55s ease;
			-ms-transition: all .55s ease;
			-o-transition: all .55s ease;
			transition: all .55s ease;
			}

			.container-4:hover button.icon, .container-4:active button.icon, .container-4:focus button.icon{
				outline: none;
				opacity: 1;
				margin-left: -50px;
			}
			
			.container-4:hover button.icon:hover{
				background: white;
			}

			.select-css {
			display: block;
			font-size: 10pt;
			font-family: 'Arial', sans-serif;
			height: 30px;
			font-weight: 400;
			color: #4f5b66;
			line-height: 1.3;
			padding: .4em 1.4em .3em .8em;
			width: 110px;
			max-width: 100%; 
			box-sizing: border-box;
			margin: 0;
			border: 1px solid #aaa;
			box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
			border-radius: .3em;
			-moz-appearance: none;
			-webkit-appearance: none;
			appearance: none;
			background-color: #fff;
			background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
			linear-gradient(to bottom, #ffffff 0%,#f7f7f7 100%);
			background-repeat: no-repeat, repeat;
			background-position: right .7em top 50%, 0 0;
			background-size: .65em auto, 100%;
			}
			.select-css::-ms-expand {
			display: none;
			}
			.select-css:hover {
			border-color: #888;
			}

			.select-css option {
			font-weight:normal;
			}
			input {
			text-transform: none;
			}
			.divisor {
			border-top:3pt solid black;
			}
		  </style>


		  <script type="text/javascript">

			$(document).ready(function(){
				$(document).on('keydown', '.unexp', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_ur.php",
								type: 'post',
								dataType: "json",
								data: {
									busqueda: request.term,request:1
								},
								success: function(data){
									response(data);
								}
							});
						},
						select: function (event, ui){
							$(this).val(ui.item.label);
							var buscarid = ui.item.value;
							$.ajax({
								url: 'resultados_ur.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2
								},
								dataType: 'json',
								success:function(response){
									var len = response.length;
									if(len > 0){
										var idx2 = response[0]['idx2'];
										var unexp = response[0]['unexp'];
										document.getElementById('unexp_'+indice).value = unexp;
									}
								}
							});
							return false;
						}
					});
				});
				

				$('#data_table').Tabledit({
						deleteButton: false,
						editButton: false,
						columns: {
						identifier: [0, 'id'],
						editable: [[6,'entregaUnidad'],[7,'relacionesL'],[8,'validacionPersonal']]
						},
						hideIdentifier: true,
						url: 'editTabla.php'
				});

			
			});

			function enviarRutaDoc(nombre, carpeta){
				// var ruta = nombre;
				// let extencion = ruta.split('.');
				// // ext =  extencion[2];
				// ext =  "pdf";
				// nombre	= '\\513EBMJ01VEPA\Docs_pzcion\INE\GAPE710401HGR_AUR_.pdf';

				// if(ext == "PDF" || ext == "pdf"){
				// 	$('#modalPDF').modal('show');
				// 	$('#idframePDF').attr('src',nombre);
				// }else{
				// 	$('#modalPDF').modal('hide');
				// 	verDoc(nombre,ext);
				// }
				
				laExtencion = "pdf";
				window.open('./Controller/controllerDescarga.php?nombreDecarga='+nombre+'&extencion='+laExtencion+'&subCarpeta='+carpeta);

			
			}

			function eliminarReq_aceptar(){
				$('#MotivoRechazoCap').removeAttr("required");
			}

			function eliminarReq_rechazo(){
				$('#user').removeAttr("required");
				$('#passw').removeAttr("required");
			}

			function escribirIdReg(id){
				console.log("el id REGISTRO ES: "+ id);
				
				document.getElementById('id_reg').value = id;
			}

			function escribirIdRegR(id){
				console.log("el id REGISTRO ES: "+ id);
				
				document.getElementById('id_regR').value = id;
			}
			

		</script>



	</head>
		<br>
	<body onload="nobackbutton();">
			<?php
				include "Controller/Conexion.php";
				$usuarioSeguir =  $_GET['usuario_rol'];
				// $dir_subidaMov = './Controller/documentos/';
				$consulta = "SELECT id_rol FROM usuarios WHERE usuario = ?";
				if($resultadoSelect = sqlsrv_query($conn, $consulta, array($usuarioSeguir))){
					$rowUser = sqlsrv_fetch_array($resultadoSelect);
					
					if($rowUser['id_rol'] == 6){

			?>
			<br>

	
		  				<a  href= <?php echo ("'./menuPrincipal.php?usuario_rol=$usuarioSeguir'");?>><img class="img-responsive" src="img/ss1_up.png" height="90" width="280"/></a>

			<?php
					}else{
			?>
		  			<a  href= <?php echo ("'./menuPrincipal.php?usuario_rol=$usuarioSeguir'");?>><img class="img-responsive" src="img/ss1_up.png" height="90" width="280"/></a>
			<?php

					}
				}
			?>

		<nav class="navbar fixed-top navbar-expand-lg navbar-dark plantilla-input fixed-top">
		    <div class="container">
		      <div class="collapse navbar-collapse" id="navbarResponsive">

		        <ul class="navbar-nav ml-auto">  
		     <li class="nav-item">    
		        	<section class="search-sec">
    		</section>
</li>  
		          <li class="nav-item">
		            <a class="nav-link" href='../LoginMenu/vista/cerrarsesion.php'>CERRAR SESIÓN</a>
		          </li>
		        </ul>
		      </div>
		    </div>
		  </nav>		
		  <br>
		<center>			

		<center>	

				
			<h3 class="estilo-color plantilla-subtitulospr">Sistema de Control para Registros de Formulario.</h3>
				<br>
				<h5 class=" plantilla-subtitulop"> DIRECCIÓN DE INTEGRACIÓN DE PUESTOS Y SERVICIOS PERSONALES - DIPSP</h5>
				<br>
				<h3>Consulta de Estado Formulario</h3>
				<br>
				

			<form method="post" action=""> 
				<div class="plantilla-inputve text-center">
					<div class="form-row">
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-labe estilo-colorg" for="elRfc">RFC:</label>
								<input type="text" class="form-control border-dark" id="rfc" name="rfc" value="<?php if(isset($_POST['rfc'])){ echo $_POST['rfc']; } ?>"  maxlength="13">
							</div>
					
						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label estilo-colorg" for="nombreB">Nombre:</label>
								<input type="text" class="form-control border-dark" id="nombreBus" name="nombreBus" value="<?php if(isset($_POST['nombreBus'])){ echo $_POST['nombreBus']; } ?>" maxlength="40">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label estilo-colorg" for="apellidoB">Apellido Paterno:</label>
								<input type="text" class="form-control border-dark" id="apellidoBus" name="apellidoBus" value="<?php if(isset($_POST['apellidoBus'])){ echo $_POST['apellidoBus']; }  ?>" maxlength="30">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label estilo-colorg" for="apellidoM">Apellido Materno:</label>
								<input type="text" class="form-control border-dark" value="<?php if(isset($_POST['apellidoMb'])){ echo $_POST['apellidoMb']; } ?>" id="apellidoMb" name="apellidoMb" maxlength="30">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label estilo-colorg" for="unidadB">Unidad:</label>
								<div class="col">
									<div class="form-group col-md-12">
											<select class="form-control border-dark" name="unidadBus">
												<?php
												include "Controller/Conexion.php";

												$consulta = "SELECT descripcion FROM ct_unidades";
												$registrosCur = sqlsrv_query($conn, $consulta);
												if( $registrosCur === false ){
													echo "Error al ejecutar consulta.</br>";
												}  else {
													$contador=0;
														while($resUr= sqlsrv_fetch_array($registrosCur)) {
															$contador++;
												?>
													<option value="<?php echo $resUr['descripcion']; ?>"><?php echo utf8_encode($resUr['descripcion']); ?></option>
												<?php 
													}
												}
												?>          	          
											</select>
									</div>
									</div>
							</div>

						</div>
					</div>
			
				<div class="col-sm-12">
					<div class="form-row">

					<div class="form-group col-md-12">
						<div class="col text-center">
								<input type="submit" name="buscar" onclick="'<?php $_GET['usuario_rol']; ?>'" class="btn btn btn-danger tamanio-button plantilla-input text-white bord" value="Buscar">
							<br>
						</div>
					</div>

					</div>
				</div>
			</form>
			<form enctype="multipart/form-data" method="post" action="">
				<div class="form-group col-md-12">
						<div class="col text-center">
								<input type="submit" class="btn btn-secondary" name="borrar" value="Borrar">
						</div>
					</div>
			</form>
		</div>
	
	</div>
					
		<br>
		<div class="card bg-secondary text-white">
						<div class="card-body plantilla-inputg"><h2>Registros Actuales</h2></div>
		</div>
		<div class="table-responsive">
		<table class="table table-striped table-bordered" style="margin-bottom: 0;  font-size:70%;" >
			
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
							
							<th scope="titulo" style="display: none;" class="sticky"></th>
							<th scope="titulo"  style="text-align: center" class="sticky">*</th>
							<th scope="titulo"  style="text-align: center" class="sticky">Tipo</th>
							<th scope="titulo"  style="text-align: center" class="sticky">Unidad</th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">RFC </th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Nombre </th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Apellido P </th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Apellido M </th>
							 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Puesto </th>
							 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Domicilio </th>
							 <th scope="titulo" style="text-align: center" class="sticky">Correo institucional </th>
							 <th scope="titulo" style="text-align: center" class="sticky">Correo personal </th>
						      <th scope="titulo"  style="text-align: center" class="sticky">Telefono Oficina </th>
						      <th scope="titulo"  style="text-align: center" class="sticky">Contacto Cel. </th>
						      <th scope="titulo"  style="text-align: center" class="sticky">INE</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">FOMOPE</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">ACUSE</th>

						   </tr>
						</thead>
				 <tbody>
				 <?php
			include "Controller/Conexion.php";

			$sql = "SELECT * FROM registro WHERE color_estado = ?";
			$idMatriz = 0;
			$cont_tabla1 = 0;
			$imprimirNoExiste = 0;
			if ($result = sqlsrv_query($conn, $sql, array('verde'))) {
				 while($ver = sqlsrv_fetch_array($result, SQLSRV_FETCH_NUMERIC)){
							$nombreAdescargar = $ver[13]."_";
						 ?>
					<tr class="divisor">
						<td rowspan="4">
							<h4><?php echo "#".$idMatriz ?></h4>
				 		</td>
						<td>
							<h4>UNIDAD</h4>
						</td>
							<td><?php echo $ver[1] ?></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><?php echo $ver[2] ?></td>

					</tr>
					<tr>
						<td>
							<h4>TITULAR</h4>
						</td>
							<td></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[5] ?></td>
							<td><?php echo $ver[6] ?></td>
							<td><?php echo $ver[7] ?></td>
							<td><?php echo $ver[8] ?></td>
							<td><?php echo $ver[9] ?></td>
							<td><?php echo $ver[10] ?></td>
							<td><?php echo $ver[11]." Ext. ".$ver[12]?></td>
					</tr>
					<tr>
						<td>
							<h4>JEFATURA DEL PROGRAMA</h4>
						</td>
							<td></td>
							<td><?php echo $ver[13] ?></td>
							<td><?php echo $ver[14] ?></td>
							<td><?php echo $ver[15] ?></td>
							<td><?php echo $ver[16] ?></td>
							<td><?php echo $ver[17] ?></td>
							<td><?php echo $ver[18] ?></td>
							<td><?php echo $ver[19] ?></td>
							<td><?php echo $ver[20] ?></td>
							<td><?php echo $ver[21]." Ext. ".$ver[22]?></td>
							<td><?php echo $ver[23] ?></td>
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'INE_.pdf'; ?>', 'INE' )"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> INE</button>
							</td>						
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'FMP_.pdf';?>', 'FMP')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> FMP</button>
							</td>
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'AUR_.pdf'; ?>', 'AUR')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> ACUSE</button>
							</td>
							<td>
								<button type="button" name="aceptarUser" id="aceptarUser" class="btn btn-secondary color_boton" onclick="escribirIdReg(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#aceptarUserModal" >Aceptar</button>
							</td>
							<td>
								<button type="button" name="rechazoInicial" id="rechazoInicial" class="btn btn-danger" onclick="escribirIdRegR(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#RechInicial" >Rechazar</button>
							</td>
					</tr>
					<tr>
						<td>
							<h4>ENCARGADO DEL PROGRAMA</h4>
						</td>
							<td></td>
							<td><?php echo $ver[24] ?></td>
							<td><?php echo $ver[25] ?></td>
							<td><?php echo $ver[26] ?></td>
							<td><?php echo $ver[27] ?></td>
							<td><?php echo $ver[28] ?></td>
							<td></td>
							<td><?php echo $ver[29] ?></td>
							<td><?php echo $ver[30] ?></td>
							<td><?php echo $ver[31]." Ext. ".$ver[32]?></td>
					</tr>
						<?php 
							//$matriz = array($idMatriz => $ver[0] );
							$matriz[$idMatriz]= $ver[0];							
							$idMatriz++;
						}
							
						
						}else{
							echo '<script type="text/javascript">alert("Error en la conexion");</script>';
							echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
						}
						?>
						<td>
							<h2>TOTAL:</h2>
						</td>
						<td>
							<h3>	<?php echo $idMatriz; ?>	</h3>
						</td>
		 </tbody>
		</table>

	<?php

			if(isset($_POST['buscar'])){// $_SERVER['REQUEST_METHOD'] == 'POST' if(){
							
							$rfcBuscar = $_POST['rfc'];
							$nombreBuscar = $_POST['nombreBus'];
							$apellidoBuscar = $_POST['apellidoBus'];
							$apellidomBuscar = $_POST['apellidoMb'];
							$unidadCompleta = utf8_encode($_POST['unidadBus']);
							$arrayUnidad = explode(" ", $unidadCompleta);
							if(count($arrayUnidad) > 1){
								$unidadBuscar = $arrayUnidad[0];
								 
							}else{
								$unidadBuscar = $unidadCompleta;
							}
							
							$banderaFomope = 0;
// ****************************** Filtro de busqueda				

 							if($unidadBuscar != ""){

								$sql = "SELECT * FROM registro WHERE ur = ?";
 							
 							}
?>
<div class="col-sm-12">
				
					<div class="card bg-secondary text-white">
						    <div class="card-body"><h2>Consulta</h2></div>
					</div>
	<!-- <div style="overflow-x:auto;"> 
		En el id de table se consulta que rol es para que solo esa persona pueda editar los apartados
	-->
	<div class="table-responsive">
		<table class="table table-striped table-bordered" style="margin-bottom: 0;  font-size:70%;" >
			
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
							
							<th scope="titulo" style="display: none;" class="sticky"></th>
							<th scope="titulo"  style="text-align: center" class="sticky">Unidad</th>
							 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">RFC</th>
							 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Puesto</th>
							 <th scope="titulo" style="text-align: center" class="sticky">Correo institucional</th>
							 <th scope="titulo" style="text-align: center" class="sticky">Correo personal</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">Telefono Oficina</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">INE</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">FOMOPE</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">ACUSE</th>
						   </tr>
						</thead>
				 <tbody>
	
				          <?php


							$idMatriz = 0;
							$imprimirNoExiste = 0;
							$params_busqueda = array($unidadCompleta);
							if ($result = sqlsrv_query($conn,$sql,$params_busqueda)) {
								
						while($ver = sqlsrv_fetch_array($result, SQLSRV_FETCH_NUMERIC)){
							$nombreAdescargar = $ver[13]."_";
						 ?>

						<tr>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[13] ?></td>
							<td><?php echo $ver[17] ?></td>
							<td><?php echo $ver[19] ?></td>
							<td><?php echo $ver[20] ?></td>
							<td><?php echo $ver[21]." Ext. ".$ver[22]?></td>
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'INE_.pdf'; ?>', 'INE')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> INE</button>
							</td>						
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'FMP_.pdf';?>', 'FMP')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> FMP</button>
							</td>
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'AUR_.pdf'; ?>', 'AUR')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> ACUSE</button>
							</td>
							<td>
								<button type="button" name="aceptarUser" id="aceptarUser" class="btn btn-secondary color_boton" onclick="escribirIdReg(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#aceptarUserModal" >Aceptar</button>
							</td>
							<td>
								<button type="button" name="rechazoInicial" id="rechazoInicial" class="btn btn-danger" data-toggle="modal" data-target="#RechInicial" >Rechazar</button>
							</td>
						</tr>
						<?php 
							//$matriz = array($idMatriz => $ver[0] );
							$matriz[$idMatriz]= $ver[0];							
							$idMatriz++;
						}
						
						}else{
							echo '<script type="text/javascript">alert("Error en la conexion");</script>';
						}
						?>
						<td>
							<h2>TOTAL:</h2>
						</td>
						<td>
							<h3>	<?php echo $idMatriz; ?>	</h3>
						</td>
						<?php
		}
?>
		 </tbody>
		</table>
		<div class="modal fade bd-example-modal-lg" id="modalPDF" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<iframe id="idframePDF"
					title="Archivo PDF"
					frameborder="0"
					width="100%"
					height="600px"
					>
				</iframe>
				</div>
			</div>
		</div>
		<br>
		<br>
	</div>
	</div>	
	<!-- *******************************model aceptar con todo y user -->
					<div class="modal fade" id="aceptarUserModal" tabindex="-1" role="dialog" aria-labelledby="aceptarUserModal" aria-hidden="true">
						<form method="post" action="./Controller/aceptarReg.php">
							  
							<div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="aceptarUserModal">ACEPTAR</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
									  <div class="form-row">
										  <div class="col">
											  <div class="form-group col-md-8">
												<img src="./img/user.png" height="17" width="20" id='userImg' class="col-sm-2">
												<input type="text" class="form-control border-dark text-transform: lowercase" value="<?php if(isset($_POST['user'])){ echo $_POST['user']; } ?>" placeholder ="Usuario/Correo" id="user" name="user" required>
											</div>
											<input type="text" style= "display:none" class="form-control border-dark" id="id_reg" name="id_reg">
											<input type="text" style= "display:none" class="form-control border-dark" id="usuario_rol" value='<?php  echo $usuarioSeguir; ?>' name="usuario_rol">

										<div class="form-group col-md-8">
											<img src="./img/pass.png" height="17" width="20" id='userImg' class="col-sm-2">
									  		<input type="text" class="form-control border-dark" value="<?php if(isset($_POST['passw'])){ echo $_POST['passw']; } ?>" placeholder ="Contraseña" id="passw" name="passw" required>
									  	</div>
									</div>
								  </div>
									
										

							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">REGRESAR</button>
									<input type="submit" class="submit btn btn-secondary color_boton" id="aceptaR" onclick="eliminarReq_aceptar()" name="accionA"  value="Aceptar">
							      </div>
							     
							    </div>
							  </div>
							</div>
						</form>
					</div>

<!-- *********************model del RECHAZO  -->
					 <div class="modal fade" id="RechInicial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<form method="post" action="./Controller/rechazarReg.php">
						 	
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Rechazo por captura</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							         <textarea class="form-control border border-dark" id="MotivoRechazoCap" rows = "4" name="comentarioR2" placeholder="Redactar rechazo" required></textarea>
									 <input type="text" style= "display:none" class="form-control border-dark" id="id_regR" name="id_regR">
									 <input type="text" style= "display:none" class="form-control border-dark" id="usuario_rol" value='<?php  echo $usuarioSeguir; ?>' name="usuario_rol">
							       
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">REGRESAR</button>
									<input type="submit" class="btn btn-danger" id="rechI" onclick="eliminarReq_rechazo()" name="accionR"  value="Aceptar rechazo por captura">
							      </div>
							     
										</div>
									</div>
								</div>
							</form>

				</div>

					<!-- <form method="post" action="./generarFiltroExcel/reporteBusqueda.php">
							<input type='hidden' name='array' class='btn btn btn-success text-white bord' value='<?php  echo serialize($matriz); ?>'>
							<input type='hidden' name='usuario_rol' class='btn btn btn-success text-white bord' value='<?php  echo $usuarioSeguir; ?>'>
							<input type='submit' name='accionBoton' class='derecha btn btn btn-success text-white bord' value="Reporte">
							<br>
							<br>
							<br>

					</form> -->
				<!-- 	<div id="result" style="display: none;"> -->
		<!-- *************************************************************tabla de rechazos -->
<div class="card bg-secondary text-white">
				<div class="card-body plantilla-inputg"><h2>Rechazos</h2></div>
</div>
<div class="table-responsive">
<table class="table table-striped table-bordered" style="margin-bottom: 0;  font-size:70%;" >
	
				<thead>
					<tr>
					<!-- <td>Observacion</td>
					<td>ID Fomope</td> -->
					
					<th scope="titulo" style="display: none;" class="sticky"></th>
					<th scope="titulo"  style="text-align: center" class="sticky">Unidad</th>
					 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">RFC</th>
					 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Puesto</th>
					 <th scope="titulo" style="text-align: center" class="sticky">Correo institucional</th>
					 <th scope="titulo" style="text-align: center" class="sticky">Correo personal</th>
					  <th scope="titulo"  style="text-align: center" class="sticky">Telefono Oficina</th>
					  <th scope="titulo"  style="text-align: center" class="sticky">INE</th>
					  <th scope="titulo"  style="text-align: center" class="sticky">FOMOPE</th>
					  <th scope="titulo"  style="text-align: center" class="sticky">ACUSE</th>
				   </tr>
				</thead>
		 <tbody>
		<?php
	$sql = "SELECT * FROM registro WHERE color_estado = ?";

	$idMatriz = 0;
	$imprimirNoExiste = 0;
	if ($result = sqlsrv_query($conn,$sql, array('negro'))) {
		 while($ver = sqlsrv_fetch_array($result, SQLSRV_FETCH_NUMERIC)){
					$nombreAdescargar = $ver[13]."_";
				 ?>

				<tr>
					<td><?php echo $ver[1] ?></td>
					<td><?php echo $ver[13] ?></td>
					<td><?php echo $ver[17] ?></td>
					<td><?php echo $ver[19] ?></td>
					<td><?php echo $ver[20] ?></td>
					<td><?php echo $ver[21]." Ext. ".$ver[22]?></td>
					<td>
						<button  onclick="enviarRutaDoc('<?php $nombreAdescargar.'INE_.pdf'; ?>', 'INE')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> INE</button>
					</td>						
					<td>
						<button  onclick="enviarRutaDoc('<?php $nombreAdescargar.'FMP_.pdf';?>', 'FMP')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> FMP</button>
					</td>
					<td>
						<button  onclick="enviarRutaDoc('<?php $nombreAdescargar.'AUR_.pdf'; ?>', 'AUR')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> ACUSE</button>
					</td>
					<td>
						<button type="button" name="aceptarUser" id="aceptarUser" class="btn btn-secondary color_boton" onclick="escribirIdReg(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#aceptarUserModal" >Aceptar</button>
					</td>
					<td>
						<button type="button" name="rechazoInicial" id="rechazoInicial" class="btn btn-danger" onclick="escribirIdRegR(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#RechInicial" >Rechazar</button>
					</td>
				</tr>
				<?php 
					//$matriz = array($idMatriz => $ver[0] );
					$matriz[$idMatriz]= $ver[0];							
					$idMatriz++;
				}
					
				
				}else{
					echo '<script type="text/javascript">alert("Error en la conexion");</script>';
				}
				?>
				<td>
					<h2>TOTAL:</h2>
				</td>
				<td>
					<h3>	<?php echo $idMatriz; ?>	</h3>
				</td>
 </tbody>
</table>

<!-- ************************************tabla de aceptados -->
<div class="card bg-secondary text-white">
				<div class="card-body plantilla-inputg"><h2>Aceptados</h2></div>
</div>
<div class="table-responsive">
<table class="table table-striped table-bordered" style="margin-bottom: 0;  font-size:70%;" >
	
<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
							
							<th scope="titulo" style="display: none;" class="sticky"></th>
							<th scope="titulo"  style="text-align: center" class="sticky">*</th>
							<th scope="titulo"  style="text-align: center" class="sticky">Tipo</th>
							<th scope="titulo"  style="text-align: center" class="sticky">Unidad</th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">RFC </th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Nombre </th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Apellido P </th>
							  <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Apellido M </th>
							 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Puesto </th>
							 <th scope="titulo" style="text-align: center" style="width: 400px" class="sticky">Domicilio </th>
							 <th scope="titulo" style="text-align: center" class="sticky">Correo institucional </th>
							 <th scope="titulo" style="text-align: center" class="sticky">Correo personal </th>
						      <th scope="titulo"  style="text-align: center" class="sticky">Telefono Oficina </th>
						      <th scope="titulo"  style="text-align: center" class="sticky">Contacto Cel. </th>
						      <th scope="titulo"  style="text-align: center" class="sticky">INE</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">FOMOPE</th>
						      <th scope="titulo"  style="text-align: center" class="sticky">ACUSE</th>

						   </tr>
						</thead>
				 <tbody>
				 <?php
			include "Controller/Conexion.php";

			$sql = "SELECT * FROM registro WHERE color_estado = ?";
			$idMatriz = 0;
			$cont_tabla1 = 0;
			$imprimirNoExiste = 0;
			if ($result = sqlsrv_query($conn, $sql, array('guinda'))) {
				 while($ver = sqlsrv_fetch_array($result, SQLSRV_FETCH_NUMERIC)){
							$nombreAdescargar = $ver[13]."_";
						 ?>
					<tr class="divisor">
						<td rowspan="4">
							<h4><?php echo "#".$idMatriz ?></h4>
				 		</td>
						<td>
							<h4>UNIDAD</h4>
						</td>
							<td><?php echo $ver[1] ?></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><?php echo $ver[2] ?></td>

					</tr>
					<tr>
						<td>
							<h4>TITULAR</h4>
						</td>
							<td></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[5] ?></td>
							<td><?php echo $ver[6] ?></td>
							<td><?php echo $ver[7] ?></td>
							<td><?php echo $ver[8] ?></td>
							<td><?php echo $ver[9] ?></td>
							<td><?php echo $ver[10] ?></td>
							<td><?php echo $ver[11]." Ext. ".$ver[12]?></td>
					</tr>
					<tr>
						<td>
							<h4>JEFATURA DEL PROGRAMA</h4>
						</td>
							<td></td>
							<td><?php echo $ver[13] ?></td>
							<td><?php echo $ver[14] ?></td>
							<td><?php echo $ver[15] ?></td>
							<td><?php echo $ver[16] ?></td>
							<td><?php echo $ver[17] ?></td>
							<td><?php echo $ver[18] ?></td>
							<td><?php echo $ver[19] ?></td>
							<td><?php echo $ver[20] ?></td>
							<td><?php echo $ver[21]." Ext. ".$ver[22]?></td>
							<td><?php echo $ver[23] ?></td>
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'INE_.pdf'; ?>', 'INE' )"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> INE</button>
							</td>						
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'FMP_.pdf';?>', 'FMP')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> FMP</button>
							</td>
							<td>
								<button  onclick="enviarRutaDoc('<?php echo $nombreAdescargar.'AUR_.pdf'; ?>', 'AUR')"  type="button" class="btn btn-outline-secondary" data-toggle="modal"  data-whatever="@getbootstrap"> ACUSE</button>
							</td>
							<td>
								<button type="button" name="aceptarUser" id="aceptarUser" class="btn btn-secondary color_boton" onclick="escribirIdReg(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#aceptarUserModal" >Aceptar</button>
							</td>
							<td>
								<button type="button" name="rechazoInicial" id="rechazoInicial" class="btn btn-danger" onclick="escribirIdRegR(<?php echo $ver[0]; ?>)" data-toggle="modal" data-target="#RechInicial" >Rechazar</button>
							</td>
					</tr>
					<tr>
						<td>
							<h4>ENCARGADO DEL PROGRAMA</h4>
						</td>
							<td></td>
							<td><?php echo $ver[24] ?></td>
							<td><?php echo $ver[25] ?></td>
							<td><?php echo $ver[26] ?></td>
							<td><?php echo $ver[27] ?></td>
							<td><?php echo $ver[28] ?></td>
							<td></td>
							<td><?php echo $ver[29] ?></td>
							<td><?php echo $ver[30] ?></td>
							<td><?php echo $ver[31]." Ext. ".$ver[32]?></td>
					</tr>
						<?php 
							//$matriz = array($idMatriz => $ver[0] );
							$matriz[$idMatriz]= $ver[0];							
							$idMatriz++;
						}
							
						
						}else{
							echo '<script type="text/javascript">alert("Error en la conexion");</script>';
							echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
						}
						?>
						<td>
							<h2>TOTAL:</h2>
						</td>
						<td>
							<h3>	<?php echo $idMatriz; ?>	</h3>
						</td>
		 </tbody>
		</table>
	</center>
	</body>
</html>

