<html>
	
	<head>
		<meta charset="utf-8">
		<title>SS-FOMOPE Iniciar Sesión</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href='jquery/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='jquery/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script type="text/javascript" src="./include/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="./include/jquery.validate.js"></script>

		

		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


		<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
   		<script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<script src="js/funciones.js"></script>
		<script src="js/validar_RFC_CURP.js"></script>


		<script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	

		<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/estilossicon.css">


		  <style>
		  .modal-header, h4, .close {
		    background-color: #5cb85c;
		    color:white !important;
		    text-align: center;
		    font-size: 30px;
		  }
		  .modal-footer {
		    background-color: #f9f9f9;
		  }

		   tbody {
		      display:block;
		      max-height:500px;
		      overflow-y:auto;
		  }
		  thead, tbody tr {
		      display:table;
		      width:180%;
		      table-layout:fixed;
		  }
		  thead {
		      width: calc( 100% - 1em )
		  } 

		  .centrado{
			  text-align:center;
			}

			#regiration_form fieldset:not(:first-of-type) {
				display: none;
			}
			.close {
			background-image: url('img/qr.png')
			}
			.burger {
			background-image: url('img/upload1.png')
			}
		  </style>

		<script type="text/javascript">


			$(document).ready(function(){
			var current = 1,current_step,next_step,steps;
			steps = $("fieldset").length;
			$(".next").click(function(){
				current_step = $(this).parent();
				next_step = $(this).parent().next();
				next_step.show();
				current_step.hide();
				setProgressBar(++current);
			});
			$(".previous").click(function(){
				current_step = $(this).parent();
				next_step = $(this).parent().prev();
				next_step.show();
				current_step.hide();
				setProgressBar(--current);
			});
			setProgressBar(current);
			// Change progress bar action
			function setProgressBar(curStep){
				var percent = parseFloat(100 / steps) * curStep;
				percent = percent.toFixed();
				$(".progress-bar")
					.css("width",percent+"%")
					.html(percent+"%");		
			}
			});

			function enviarDatos2(){
				alert("NOOOOO");
			}
			function enviarDatos(){
				// var formulario = document.captura1;
				// formulario.action= './Controller/agregarNewRegistro.php';
				// document.getElementById("botonAccion").value = "Aceptar";

					// var $listDocs = $("#listaDoc").val();
					// $('#nameArchivo').removeAttr("required");

					alert("SIIIIIII");
					// var tamDocs = $listDocs.length;
					// var $guardarD = $("#guardarDoc").val();
					// let ArrayDocs = ["INE","AUR","FMP"];
				
					// var = $("#documentoSelct").val();
					// var = $("#guardarDoc").val();
					// var = $("#id_env").val();


					// var = $("#unexp_1").val();
					// var = $("#domUR").val();
					// var = $("#listaDoc").val();
					// var = $("#apellido1").val();
					// var = $("#apellido2").val();
					// var = $("#nombre").val();
					// var = $("#puesto").val();
					// var = $("#dom_titular").val();
					// var = $("#correo").val();
					// var = $("#num_t").val();
					// var = $("#ext").val();
					
					// var = $("#dom_titular_j").val();
					// var = $("#apellido1_j").val();
					// var = $("#apellido2_j").val();
					// var = $("#nombre_j").val();
					// var = $("#puesto_j").val();
					// var = $("#correo_j").val();
					// var = $("#num_j").val();
					// var = $("#ext_j").val();
					
					// var = $("#apellido1_ep").val();
					// var = $("#apellido2_ep").val();
					// var = $("#nombre_ep").val();
					// var = $("#correo_ep").val();
					// var = $("#num_ep").val();
					// var = $("#ext_ep").val();

				    //  if (b !== '') {
					//       var tamRFC = b.length;
					//  	if (tamRFC<13){
					//     	alert("RFC no valido");
					//     }
					//  }
					//  if (c !== '') {
					//       var tamCURP = c.length;
					//  	if (tamCURP<18){
					//     	alert("CURP no valido");
					//     }

					//  }
				    //  var tamCURP = c.length;

				    //   if (a=="" || tamRFC<13 || tamCURP<18 || d==""|| e==""|| f==""|| g==""|| $('input:radio[name=TipoEntregaArchivo]:checked').val() =="Ninguno" || i=="" ) {
				    //     alert("Falta completar campo");		
				    //     return false;
				    //   } else 
				    //   	formulario.submit();
		 }

		 function cambiar() {
			menu = document.getElementById("menu")
			menu.classList.toggle("burger")
			menu.classList.toggle("close")
		}
	
		$(document).on('click', 'input[type="button"]', function(event) {
			let id = this.id;
			const rutaDoc = document.getElementById('nameFile'+id).value;
			console.log("Se presionó el Boton con Id :"+ id);
			console.log("el archivo es:" + rutaDoc);
			var correoJ = $("#correo_j").val();
			console.log("el correo:" + correoJ);

			//***************************validamos que esten los inputs
		
			var eldom_j = $("#dom_titular_j").val();
			var elAp1_j = $("#apellido1_j").val();
			var elAp2_j = $("#apellido2_j").val();
			var elNom_j= $("#nombre_j").val();
			var elP_j = $("#puesto_j").val();
			var elCorreo_j = $("#correo_j").val();
			var elnum_j= $("#num_j").val();
			var laExt_j = $("#ext_j").val();

			if(eldom_j == "" || elAp1_j == "" || elAp2_j == "" || elNom_j== "" || elP_j == "" || elCorreo_j == "" || elnum_j== "" || laExt_j == ""){
				alert ("Falta completar algun campo");
				return false;
			}else{
				var formData = new FormData();
				var files = $('#nameFile'+id)[0].files[0];
					formData.append('file',files);
					formData.append('correoJ',correoJ);
					formData.append('id',id);
					$.ajax({
						url: './Controller/guardarDoc.php',
						type: 'post',
						data: formData,
						contentType: false,
						processData: false,
						success: function(response) {
							if (response != 0) {
								$(".card-img-top").attr("src", response);
									$("#resultado").html(response);
									var rescatarDocs = $('#guardarDoc').val();
									rescatarDocs = rescatarDocs + '_' + response;
									document.getElementById("guardarDoc").value = rescatarDocs;
									var image_x = document.getElementById('image_'+response);
									image_x.parentNode.removeChild(image_x);
									// window.location.href = window.location.href + "?listaDocsChek=" + response;
							} else {
								alert('ERROR AL CARGAR DOCUMENTO');
							}
						}
					});
			}
			// return false;

			// var parametros = {
			// 			"rutaDoc" : rutaDoc,
			// 			"correoJ" : correoJ,
			// 			"id" : id
			// };
			// $.ajax({
			// 				url: "./Controller/guardarDoc.php",
			// 				type: 'post',
			// 				data: parametros,
			// 				beforeSend: function () {
			// 						$("#resultado").html("Procesando, espere por favor...");
			// 				},
			// 				success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
			// 						$("#resultado").html(response);
			// 				}
							
			// });
		});

		


		function listaDeDoc(listaEnviar){
			// document.getElementById("listaDoc").value = text;
			document.getElementById("guardarDoc").value = listaEnviar;
		}
	
		</script>
<script src="js/funciones.js"></script>
		
	</head>
	<body onload="nobackbutton();">
    	
		<?php 
			include "Controller/configuracion.php";
			$banderaid = "x"; //bandera que si cambia de x es porque existe un id_movimiento y el registro ya esta en la BD

					if(isset($_POST["listaDoc"])){ 
						$listaMostrar = $_POST["listaDoc"];
					}else{
						$listaMostrar = "";
					}
//------ este codigo comentado lo identifique y no tiene que ir , no encontre su funcionalidad

		/*	$sql = "SELECT * FROM fomope WHERE id_movimiento = '$idMovSeg'";
			if($result = mysqli_query($conexion,$sql)){
				$ver = mysqli_fetch_row($result);
			}else{
					echo '<script type="text/javascript">alert("Error en la conexion");</script>';
					echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
								
			}*/

			$valor = "";
			$hoy = "select CURDATE()";
			$tiempo ="select curTime()";
			$diaActual = "";

			 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
			 		$rowF = mysqli_fetch_row($resultHoy);  // cambiamos formato de hora 
			 		$fechaSistema = date("d-m-Y", strtotime($rowF[0])); //"05-04-2020";;
			 		$rowHora = mysqli_fetch_row($resultTime);

					$diaActual=date("w", strtotime($fechaSistema));
					
			 }

			/* $sqlQna = "SELECT * FROM m1ct_fechasnomina WHERE estadoActual = 'abierta'";

			 if($resQna = mysqli_query($conexion,$sqlQna)){
			 	$rowQna = mysqli_fetch_row($resQna);
			 	//echo "OOOOOLLAA";
			 	$fehaI = date("d-m-Y", strtotime($rowQna[2])); 
			 	$fehaF = date("d-m-Y", strtotime($rowQna[5])); 
			 	$newQna = $rowQna[0];


			 }else{
			 
			 	echo "error sql";
			 }
		*/
?>
		

    	<br><br><br><br>

    	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bordv plantilla-inputv fixed-top">
			<img class="img-responsive" src="img/ss1.png" height="90" width="280"/>
		<div class="form-group">
			<div class=" centrado">
	        	<h3 class="estilo-colorn">Formulario   </h3>
			</div>
			 <br>
			 <div class="centrado">
		         <h5 class=" estilo-color ">Departamento Dirección General de Recursos Humanos y Organización/Dirección integral de puestos y servicios personales</h5>
			</div>
		</div>
		    <br>
		    <br>
		  </nav>

		 <div id="content" class="p-4 p-md-5 pt-5">

		<center>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
				<!-- <form id="regiration_form" novalidate action="action.php"  method="post"> -->
				<form  enctype="multipart/form-data" id="regiration_form"  name="captura1" action="" method="POST"> 
				<fieldset>

				 		<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
							<input type="text" class="form-control" id="botonAccion" name="botonAccion" value="<?php if(isset($_POST["botonAccion"])){ echo $_POST["botonAccion"];} ?>" style="display:none">
							<input type="text" class="form-control" id="qnaActual" name="qnaActual" value="<?php  echo  $newQna?>" style="display:none">
						</div> 
					<table  class="table table-striped table-bordered">
					<thead>
						    <tr>
								<th scope="titulo">UNIDAD</th>
							
							</tr>
					</thead>

					<tbody>
							<tr>
								<td>
								<div class="form-group col-md-6">
									<div class="col" >
										<div class="md-form mt-0">
										<label class="plantilla-label estilo-colorg" for="unexp_1">Unidad:</label>
										<select class="form-control border border-dark mdb-select md-form" name="unidadSelct">
															<?php
															if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
																die("Error cargando el conjunto de caracteres utf8");
															}

															$consulta = "SELECT * FROM ct_unidades";
															$resultado = mysqli_query($conexion , $consulta);
															$contador=0;

															while($listUr = mysqli_fetch_assoc($resultado)){ $contador++;?>
															<option value="<?php echo $listUr["descripcion"]; ?>"><?php echo $listUr["descripcion"]; ?></option>
															<?php }?>          
										</select>
										<!-- <input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="unexp_1" name="unexp_1" placeholder="Ej. 513" value="<?php if(isset($_POST["unexp_1"])){ echo $_POST["unexp_1"];} ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required> -->
										</div>
									</div>
									<br>
									<div class="col">
										<div class="md-form mt-0">
										<label class="plantilla-label estilo-colorg" for="domUR" >Domicilio Unidad: </label>
										<input type="text"  type="text" class="form-control domUR border border-dark" id="domUR" name="domUR" placeholder="DOMICILIO" value="<?php if(isset($_POST["domUR"])){ echo $_POST["domUR"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
										</div>
									</div>
								<div>
								</td>
							</tr>									
					</tbody>
					</table>
					
					<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
				</fieldset>

<!--*************************************************************** tabla TITULAR  -->
			<fieldset>
			
					<table  class="table table-striped table-bordered">
					<thead>
						    <tr>
								<th scope="titulo">TITULAR</th>
							
							</tr>
					</thead>

					<tbody>
					<tr>
						<td>
						<div class="form-group col-md-6">
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="nombreT">NOMBRE COMPLETO: </label>
							</div>

					  		<div class="form-row">
				  			
						      <input type="text" style="display:none;" class="form-control border border-dark" id="listaDoc" name="listaDoc" placeholder="Apellido Paterno" value="<?php if(isset($_POST["listaDoc"])){ echo $_POST["listaDoc"];} ?>" >

				  			<div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido1" name="apellido1" placeholder="Apellido Paterno" value="<?php if(isset($_POST["apellido1"])){ echo $_POST["apellido1"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido2" name="apellido2" placeholder="Apellido Materno" value="<?php if(isset($_POST["apellido2"])){ echo $_POST["apellido2"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="nombre" name="nombre" placeholder="Nombre" maxlength="40" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"].$valor;} ?>" required>
						      </div>
						    </div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="puesto" >Puesto: </label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="puesto" name="puesto" placeholder="puesto" value="<?php if(isset($_POST["puesto"])){ echo $_POST["puesto"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="dom_t" >Domicilio: </label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="dom_titular" name="dom_titular" placeholder="Domicilio" value="<?php if(isset($_POST["dom_titular"])){ echo $_POST["dom_titular"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >Correo: </label>
								<input type="mail"  class="form-control domUR border border-dark" id="correo" name="correo" placeholder="correo" value="<?php if(isset($_POST["correo"])){ echo $_POST["correo"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
						<div class="form-row">
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="num_tel" >Número telefónico: </label>
								<input type="text"  class="form-control domUR border border-dark" id="num_t" name="num_t" placeholder="telefóno" value="<?php if(isset($_POST["num_t"])){ echo $_POST["num_t"];} ?>" maxlength ="10"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								</div>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >Extensión: </label>
								<input type="text"  class="form-control domUR border border-dark" id="ext" name="ext" placeholder="**" value="<?php if(isset($_POST["ext"])){ echo $_POST["ext"];} ?>" maxlength ="6" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							</div>
						</div>
								</td>
							</tr>	
						</div>								
					</tbody>
					</table>
					<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  					<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
			</fieldset>
		
<!--*************************************************************** tabla JEFATURA DE PROGRAMA   -->
		<fieldset>
	
			<table  class="table table-striped table-bordered">
					<thead>
						    <tr>
								<th scope="titulo">JEFATURA DEL PROGRAMA</th>
							
							</tr>
					</thead>

					<tbody>
					<tr>
						<td>
						<div class="form-group col-md-6">
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="nombreT">NOMBRE COMPLETO: </label>
							</div>

					  		<div class="form-row">
				  			
				  			<div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido1_j" name="apellido1_j" placeholder="Apellido Paterno" value="<?php if(isset($_POST["apellido1_j"])){ echo $_POST["apellido1_j"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido2_j" name="apellido2_j" placeholder="Apellido Materno" value="<?php if(isset($_POST["apellido2_j"])){ echo $_POST["apellido2_j"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="nombre_j" name="nombre_j" placeholder="Nombre" maxlength="40" value="<?php if(isset($_POST["nombre_j"])){ echo $_POST["nombre_j"].$valor;} ?>" required>
						      </div>
						    </div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="puesto" >Puesto: </label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="puesto_j" name="puesto_j" placeholder="puesto" value="<?php if(isset($_POST["puesto_j"])){ echo $_POST["puesto_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="dom_t" >Domicilio: </label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="dom_titular_j" name="dom_titular_j" placeholder="Domicilio" value="<?php if(isset($_POST["dom_titular_j"])){ echo $_POST["dom_titular_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >Correo: </label>
								<input type="mail"  class="form-control domUR border border-dark" id="correo_j" name="correo_j" placeholder="correo" value="<?php if(isset($_POST["correo_j"])){ echo $_POST["correo_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
						<div class="form-row">
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="num_tel" >Número telefónico: </label>
								<input type="text"  class="form-control domUR border border-dark" id="num_j" name="num_j" placeholder="telefóno" value="<?php if(isset($_POST["num_j"])){ echo $_POST["num_j"];} ?>" maxlength ="10" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								</div>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >Extensión: </label>
								<input type="text"  class="form-control domUR border border-dark" id="ext_j" name="ext_j" placeholder="**" value="<?php if(isset($_POST["ext_j"])){ echo $_POST["ext_j"];} ?>" maxlength ="6" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							</div>
						</div>
								</td>
							</tr>	
						</div>								
							<label class="plantilla-label estilo-colorg" for="ext" >Docsss: </label>

							<input type="text" class="form-control" id="guardarDoc" name="guardarDoc" value="<?php if(isset($_POST["guardarDoc"])){ echo $_POST["guardarDoc"];} ?>" >
								
				
					</tbody>
					</table>
					
					<table class="table table-striped table-bordered" >
					<tbody>
					<div class="form-row">
						<div class="col">
								<?php
								if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
										die("Error cargando el conjunto de caracteres utf8");
								}

								$consulta = "SELECT * FROM ct_documentos";
								$resultado = mysqli_query($conexion , $consulta);
								$contador=0;
								$documentoN = "doc";
								while($listDoc = mysqli_fetch_assoc($resultado)){ 
									$contador++;
									$documentoN = $documentoN . $contador;
								?>
									<tr>
										<td WIDTH="20%" HEIGHT="20%">
										<?php echo $listDoc["nombre_documento"]; ?>
											<div class="col">
													<input type="text" class="form-control border border-dark" style = "display:none" id="validarDoc" name="validarDoc" value="<?php if(isset($_POST["validarDoc"])){ echo $_POST["validarDoc"];}else{ echo "HOLA"; } ?>" >
													<p>
														<img src="./img/qr.png" id='<?php echo "image_".$documentoN; ?>'>
													</p>
												<?php	
												$contadorD = 0;
													if (isset($_GET["listaDocsChek"])) {
															if($contadorD == 0){
																$nombreCompletoArch = $_GET["listaDeDoc"] ;
																$contadorD++;
															}else{
																$nombreCompletoArch = $nombreCompletoArch . $_GET["listaDeDoc"];
															}
														  	echo "
															        <script>
															                listaDeDoc( '$nombreCompletoArch');
															        </script >";
															// $arrayNumDoc = explode("_", $enviarDoc);		
															// $numeroDeDocs = count($arrayNumDoc);
													}
												?>
											</div>	
										</td>
										<td WIDTH="20%" HEIGHT="20%">
											<div class="col-3">
												<div class="md-form md-0">
													<input type="file" id="<?php echo "nameFile".$documentoN; ?>" name="nameArchivo">
												<!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
												</div>
											</div>
										</td>
										<td>
											<div class="col">
												<div class="md-form md-0">
													<input type="button"  href="javascript:;" id = "<?php echo $documentoN; ?>" name="guardarAdj"  class="btn btn-outline-info tamanio-button" value="Guardar Documento"><br>
												</div>	
												<br>
											</div>	
										
										</td>
																			
									</tr>	
								<?php }?>          
						</div>		
					</div>	
					</tbody>

					</table>
					Resultado: <span id="resultado">0</span>
						<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
						<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
		</fieldset>
		
<!--*************************************************************** tabla encargado del programa  -->
		<fieldset>
	
			<table  class="table table-striped table-bordered">
					<thead>
						    <tr>
								<th scope="titulo">ENCARGADO DEL PROGRAMA</th>
							
							</tr>
					</thead>

					<tbody>
					<tr>
						<td>
						<div class="form-group col-md-6">
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="nombreT">NOMBRE COMPLETO: </label>
							</div>

					  		<div class="form-row">
				  			<div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido1_ep" name="apellido1_ep" placeholder="Apellido Paterno" value="<?php if(isset($_POST["apellido1_ep"])){ echo $_POST["apellido1_ep"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido2_ep" name="apellido2_ep" placeholder="Apellido Materno" value="<?php if(isset($_POST["apellido2_ep"])){ echo $_POST["apellido2_ep"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="nombre_ep" name="nombre_ep" placeholder="Nombre" maxlength="40" value="<?php if(isset($_POST["nombre_ep"])){ echo $_POST["nombre_ep"].$valor;} ?>" required>
						      </div>
						    </div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >Correo: </label>
								<input type="mail"  class="form-control domUR border border-dark" id="correo_ep" name="correo_ep" placeholder="correo" value="<?php if(isset($_POST["correo_ep"])){ echo $_POST["correo_ep"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
						<div class="form-row">
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="num_tel" >Número telefónico: </label>
								<input type="text"  class="form-control domUR border border-dark" id="num_ep" name="num_ep" placeholder="telefóno" value="<?php if(isset($_POST["num_ep"])){ echo $_POST["num_ep"];} ?>" maxlength ="10" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								</div>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >Extensión: </label>
								<input type="text"  class="form-control domUR border border-dark" id="ext_ep" name="ext_ep" placeholder="**" value="<?php if(isset($_POST["ext_ep"])){ echo $_POST["ext_ep"];} ?>" maxlength ="6" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							</div>
						</div>
								</td>
							</tr>	
						</div>								
					</tbody>
				</table>
				<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  				<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
		</fieldset>
					
				<div class="col-md-8 col-md-offset-8">
					<?php 
						$banderaBoton=0; //admin2
							if(isset($_POST['guardarAdj'])){
									
									$nombreArch = $_POST['documentoSelct'];
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

									$bandera = 0;

// ***********************************buscamos todos los datos por si existe un mov similar 
				$datosDobles = "SELECT id_estructura, color_estado FROM registro WHERE ur = '$unidad' AND correo_t = '$elCorreo_t' AND apellido1_t = '$elApellido1' AND apellido2_t = '$elApellido2_j' AND nombre_t = '$elNombre_j' AND tel_t = '$elNum_t' AND ext_t = '$laExt_t'  ORDER BY id_encuesta DESC";
				if($resRechazo = mysqli_query($conexion, $datosDobles)){
					$rechazoActual = mysqli_fetch_row($resRechazo);
					if($rechazoActual[1] == "negro"){
						$bandera = 1;
					}
				}	
				// if($bandera == 1){
				// 	echo '<script type="text/javascript"> alert("No puede ser registrado este movimiento, ya que existe un último movimiento de esta persona en bandeja de rechazo, Se sugiere editar el rechazo."); </script>';
				// }else{
									// if($datasub2 = mysqli_query($conexion,$datosDobles)){
                                   	// 	$extid =mysqli_fetch_row($datasub2);
								    // 	$res1Check = mysqli_num_rows($datasub2);
								    // 	if ($res1Check == NULL){
								    // 		$res1Check = 0;
								    // 	}else{
								    // 		$res1Check = 1;
								    // 		$banderaid = $extid[0];
								    // 	}                                 		
                                   	// }
				//----------------Sacamos la Hora 
				$hoy = "select CURDATE()";
				$tiempo ="select curTime()";

				 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
						 $fechaArray = mysqli_fetch_row($resultHoy);
						 $horaArray = mysqli_fetch_row($resultTime);
				 }
				$h_id = str_replace ( ":", '',$horaArray[0] ); 
				$f_id = str_replace ( "-", '',$fechaArray[0] ); 
									
                                   	if ($leerMov == "x") { //$res1Check<1
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
                                   		}		
                                   	}
										
								
							// }
							if(strpos($enviarDoc, "INE") !== false){
								if(strpos($enviarDoc, "FMP") !== false){
									if(strpos($enviarDoc, "AUR") !== false){
										echo "<script>
											enviarDatos();
										</script >";			
									}
								}
							}
						}
						?>	
					<input type="text" style="display: none;" name="id_env" id="id_enviar" value="<?php echo $banderaid?>">
 				</div>	
				<br>

<br> <br> 
<br>
						<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
					<!-- <input type="button" onclick="enviarDatos()" class="btn btn-primary" value="Enviar Información" name="botonAccion"> -->
					<!-- <input type="submit" name="infoEnv" class="btn btn-primary" value="Enviar Información"><br> -->
		
			</form>

		</center>
		<!-- <form  enctype="multipart/form-data" id="formBoton" name="boton2" action="" method="POST">  -->
		<!-- </form> -->
	
</body>
</html>