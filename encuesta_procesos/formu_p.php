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
			body {
					background-image: url(img/fondo5.png);
					/* background-color:#FF0000; */
					background-size: cover;
					/* font-family: "Roboto", sans-serif; */
					padding-top: 56px;
			}
			
			.table.table-center {
			width: auto;
			margin: 0 auto;
			}

		  	.centrado{
			  text-align:center;
			}

			#regiration_form fieldset:not(:first-of-type) {
				display: none;
			}
		
		  </style>

		<script type="text/javascript">
			function validateEmail(email) {
				const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(email);
			}
			$(document).ready(function(){
			var current = 1,current_step,next_step,steps;
				steps = $("fieldset").length;
		// **********************************************************************datos de la unidad 
				$(".next1").click(function(){
					var $domici = $('#domUR').val();
					if ($domici === "") {
					//    event.preventDefault();
						var error = '<br><span style="color: red;">Error. Vacio.</span>';
						$('#domUR').after($(error).fadeOut(2000));
						$('#domUR').css( "border-color","red");
						// alert("yaaaa");
					}else{
						current_step = $(this).parent();
						next_step = $(this).parent().next();
						next_step.show();
						current_step.hide();
						setProgressBar(++current);
					}
				});
		// **********************************************************************datos del titular
				$(".next2").click(function(){
					var $rfc_t = $('#rfc_u').val();
					var $ap1_t = $('#apellido1').val();
					var $ap2_t = $('#apellido2').val();
					var $nombre_t = $('#nombre').val();
					var $puesto_t = $('#puesto').val();
					var $dom_t = $('#dom_titular').val();
					var $correo1_t = $('#correo').val();
					var $correo2_t = $('#correoA').val();
					let $num_t = parseInt($('#num_t').val());
					let $ext_t = parseInt($('#ext').val());
				if(validateEmail($correo1_t) && validateEmail($correo2_t)){
					if(Number.isInteger($num_t) && Number.isInteger($ext_t)){

						if ($rfc_t  === "" || $ap1_t  === "" || $ap2_t  === "" || $nombre_t  === "" || $puesto_t  === "" || $dom_t  === "" || $correo1_t  === "" || $correo2_t  === "" || $num_t  === "" || $ext_t  === "") {
						//    event.preventDefault();
							var error = '<br><span style="color: red;">Error. Vacio.</span>';
							$('#num_t').after($(error).fadeOut(2000));
							$('#num_t').css( "border-color","red");
							// alert("yaaaa");
						}else{
							current_step = $(this).parent();
							next_step = $(this).parent().next();
							next_step.show();
							current_step.hide();
							setProgressBar(++current);
						}
					}else{
						var error = '<br><span style="color: red;">Solo se reciben números en el apartado de telefoneo, extensión o celular</span>';
						$('#num_t').after($(error).fadeOut(2000));
						$('#num_t').css( "border-color","red");
					}
				}else{
						var error = '<br><span style="color: red;">Verificar los correos</span>';
						$('#num_t').after($(error).fadeOut(2000));
						$('#num_t').css( "border-color","red");
				}
				});
		// **********************************************************************jefatura del programa

				$(".next3").click(function(){
					var $rfc_j = $('#rfc_t').val();
					var $ap1_j = $('#apellido1_j').val();
					var $ap2_j = $('#apellido2_j').val();
					var $nombre_j = $('#nombre_j').val();
					var $puesto_j = $('#puesto_j').val();
					var $domi_j = $('#dom_titular_j').val();
					var $correo1_j = $('#correo_j').val();
					var $correo2_j = $('#correoA_j').val();
					let $num_j = parseInt($('#num_j').val());
					let $ext_j = parseInt($('#ext_j').val());
					var rescatarDocs = $('#guardarDoc').val();
					arrayDocs = rescatarDocs.split("_");
					var bandera1=0,bandera2=0,bandera3 = 0;
				if(validateEmail($correo1_j) && validateEmail($correo2_j)){
					if(Number.isInteger($num_j) && Number.isInteger($ext_j)){
						for(var i =0; i< arrayDocs.length; i++){
							if(arrayDocs[i] == "doc1" ){
								bandera1=1;
							}
							if(arrayDocs[i] == "doc12" ){
								bandera2 =1;
							}
							if(arrayDocs[i] == "doc123" ){
								bandera3=1;
							}
						}
					if(bandera1 == 1 && bandera2==1 && bandera3 == 1){
						if ($rfc_j  === "" || $domi_j  === "" || $ap1_j  === "" || $ap2_j  === "" || $nombre_j  === "" || $puesto_j  === "" || $correo1_j  === "" || $correo2_j  === "" || $num_j  === "" || $ext_j  === "") {
						//    event.preventDefault();
							var error = '<br><span style="color: red;">Error. Vacio.</span>';
							$('#num_j').after($(error).fadeOut(2000));
							$('#num_j').css( "border-color","red");
							// alert("yaaaa");
						}else{
							current_step = $(this).parent();
							next_step = $(this).parent().next();
							next_step.show();
							current_step.hide();
							setProgressBar(++current);
						}
					}else{
						alert("Falta cargar algún documento");	
					}
					}else{
						var error = '<br><span style="color: red;">Solo se reciben números en el apartado de telefoneo, extensión o celular</span>';
						$('#num_j').after($(error).fadeOut(2000));
						$('#num_j').css( "border-color","red");
					}
				}else{
						var error = '<br><span style="color: red;">Verificar los correos</span>';
						$('#num_j').after($(error).fadeOut(2000));
						$('#num_j').css( "border-color","red");
				}
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

		$(document).on('click', 'input[type="button"]', function(event) {
			let id = this.id;
			const rutaDoc = document.getElementById('nameFile'+id).value;
			console.log("Se presionó el Boton con Id :"+ id);
			console.log("el archivo es:" + rutaDoc);
			var correoJ = $("#correo_j").val();
			var elRfc = $("#rfc_t").val();
			console.log("el correo:" + correoJ);

			//***************************validamos que esten los inputs
		
			var eldom_j = $("#dom_titular_j").val();
			var elAp1_j = $("#apellido1_j").val();
			var elAp2_j = $("#apellido2_j").val();
			var elNom_j= $("#nombre_j").val();
			var elP_j = $("#puesto_j").val();
			var elCorreo_j = $("#correo_j").val();
			let elnum_j= parseInt($("#num_j").val());
			let laExt_j = parseInt($("#ext_j").val());
			var formData = new FormData();
			var files = $('#nameFile'+id)[0].files[0];

			if(eldom_j == "" || elAp1_j == "" || elAp2_j == "" || elNom_j== "" || elP_j == "" || elCorreo_j == "" || elnum_j== "" || laExt_j == ""){
				alert ("Falta completar algun campo");
				return false;
			}else if(files){
				
				// const input = document.getElementById('nameFile');
				console.log("File Seleccionado : ", files);
					formData.append('file',files);
					formData.append('correoJ',correoJ);
					formData.append('elRfc',elRfc);
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
									var resultadoDoc = response;
									var rescatarDocs = $('#guardarDoc').val();
									rescatarDocs = rescatarDocs + '_' + response;
									document.getElementById("guardarDoc").value = rescatarDocs;
									if(resultadoDoc == "X"){
										alert('Existe un error al guardar el archivo');
									}else if(resultadoDoc == "X2"){
										alert('El documento no es formato PDF, vuelva a intentar');
									}else{

				// *****************Borramos la imagen X
										var image_x = document.getElementById('image_'+id);
										console.log('image_'+id);
										image_x.parentNode.removeChild(image_x);
				// *****************hacemos que aparesca el check
										var img = document.createElement("img");
										img.src = "img/paloma.png";
										var src = document.getElementById("checkImg_"+id);
										img.height = 20;
										img.width = 17;
										src.appendChild(img);
										alert('Documento guardado correctamente');
									}
									// window.location.href = window.location.href + "?listaDocsChek=" + response;
							} else {
								alert('ERROR AL CARGAR DOCUMENTO');
							}
						}
					});
			}else{
				alert('Archivo no seleccionado');
			}
			
		});

		function listaDeDoc(listaEnviar){
			// document.getElementById("listaDoc").value = text;
			document.getElementById("guardarDoc").value = listaEnviar;
		}

		</script>
<script src="js/funciones.js"></script>
		
	</head>
	<body style="body" onload="nobackbutton();">
    	
		<?php 
			include "Controller/Conexion.php";
?>
		

    	<br><br><br><br>

    	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bordv plantilla-inputve fixed-top">
			<img class="img-responsive" src="img/ss1.png" height="90" width="280"/>
		<div class="form-group">
			<div class=" centrado">
	        	<h3 class="estilo-colorn">Formulario   </h3>
			</div>
			 <br>
			 <div class="centrado">
		         <h5 class=" estilo-colorg ">Departamento Dirección General de Recursos Humanos y Organización/Dirección integral de puestos y servicios personales</h5>
			</div>
		</div>
		    <br>
		    <br>
		  </nav>
		<center>
		<br>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
				<!-- <form id="regiration_form" novalidate action="action.php"  method="post"> -->
				<form  enctype="multipart/form-data" id="regiration_form"  name="captura1" action="./Controller/guardarF.php" method="POST"> 
				
				<fieldset>
				<br>

				<div class="form-group col-md-12">
				<div class="card bg-light">
						<div class="card-text text-dark">
						Estimad@s, <br>
						<br>
						Bienvenidos al Programa de Promoción por Profesionalización del Personal de Enfermería, de Trabajo Social y de Terapia Física y Rehabilitación 2021. <br>
						<br>
						Para poder obtener el Usuario y Contraseña correspondiente a este periodo, te invitamos a realizar el siguiente registro y enviar solicitud.<br>
						<br>
						Recibirán la información vía correo electrónico, favor asegura que los datos proporcionados sean correctos.<br>
						<br>
						Atentamente,<br>
						DGRHO<br>

						</div>
				</div>
				</div>
				 		<div class="form-row">
							<input type="text" class="form-control" id="botonAccion" name="botonAccion" value="<?php if(isset($_POST["botonAccion"])){ echo $_POST["botonAccion"];} ?>" style="display:none">
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
								<div class="form-group col-md-12">
									<div class="col" >
										<div class="md-form mt-0">
										<label class="plantilla-label estilo-colorg" for="unexp_1">*Unidad:</label>
										<select class="form-control border border-dark mdb-select md-form" name="unidadSelct">
											<?php
												$consulta = "SELECT descripcion FROM ct_unidades";
												$contador=0;
												$res_UR = sqlsrv_query($conn,$consulta);
												while ($row=sqlsrv_fetch_array($res_UR))
												{
														$contador++;
											?>
												<option value="<?php echo $row['descripcion']; ?>"><?php echo utf8_encode($row['descripcion']); ?></option>
											<?php 
												}
											?>          
										</select>
										<!-- <input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="unexp_1" name="unexp_1" placeholder="Ej. 513" value="<?php if(isset($_POST["unexp_1"])){ echo $_POST["unexp_1"];} ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required> -->
										</div>
									</div>
									<br>
									<div class="col">
										<div class="md-form mt-0">
										<label class="plantilla-label estilo-colorg" for="domUR" >*Domicilio Unidad: </label>
										<input type="text"  type="text" class="form-control domUR border border-dark" id="domUR" name="domUR" placeholder="DOMICILIO" value="<?php if(isset($_POST["domUR"])){ echo $_POST["domUR"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
										</div>
									</div>
								<div>
								</td>
							</tr>									
					</tbody>
					</table>
					<button type="submit" name="next1" id="next1" class="next1 btn btn-secondary color_boton" >SIGUIENTE</button>
				</fieldset>

<!--*************************************************************** tabla TITULAR  -->
			<fieldset>
			
					<table  class="table table-striped table-bordered">
					<thead>
						    <tr>
								<th scope="titulo">COORDINADORES ADMINISTRATIVOS Y EQUIVALENTES DE LAS UNIDADES ADMINISTRATIVAS DEL SECTOR CENTRAL, TITULARES DE UNIDAD DE ADMINISTRACIÓN Y FINANZAS DE LOS ÓRGANOS ADMINISTRATIVOS DESCONCENTRADOS Y ENTIDADES PARAESTATALES SECTORIZADOS A LA SECRETARÍA DE SALUD DIRECTORES ADMINISTRATIVOS Y EQUIVALENTES EN LOS OPD´S RESPONSABLES DE LOS SERVICIOS DE SALUD DE LAS ENTIDADES FEDERATIVAS</th>
							
							</tr>
					</thead>

					<tbody>
					<tr>
						<td>
						<div class="form-group col-md-12">
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="rfcT">*RFC: (Titular de la Unidad)</label>
							</div>
							<div class="form-row">
								<div class="col-2">
								<div class="md-form mt-0">
									<input type="text" class="form-control border border-dark" id="rfc_u" name="rfc_u" placeholder="RFC" value="<?php if(isset($_POST["rfc_u"])){ echo $_POST["rfc_u"];} ?>" maxlength="13"required>
								</div>
								</div>
							</div>
							<br>
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="nombreT">*NOMBRE COMPLETO: (Titular de la Unidad)</label>
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
								<label class="plantilla-label estilo-colorg" for="puesto" >*Puesto: (Titular de la Unidad)</label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="puesto" name="puesto" placeholder="puesto" value="<?php if(isset($_POST["puesto"])){ echo $_POST["puesto"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="dom_t" >*Domicilio para recibir correspondencia: (Titular de la Unidad)</label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="dom_titular" name="dom_titular" placeholder="Domicilio" value="<?php if(isset($_POST["dom_titular"])){ echo $_POST["dom_titular"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >*Correo institucional: (Titular de la Unidad)</label>
								<input type="email"  class="form-control domUR border border-dark" id="correo" name="correo" placeholder="@" value="<?php if(isset($_POST["correo"])){ echo $_POST["correo"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >*Correo adicional: (Titular de la Unidad)</label>
								<input type="email"  class="form-control domUR border border-dark" id="correoA" name="correoA" placeholder="@" value="<?php if(isset($_POST["correoA"])){ echo $_POST["correoA"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
						<div class="form-row">
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="num_tel" >*Número telefónico oficina: (Titular de la Unidad)</label>
								<input type="text"  class="form-control domUR border border-dark" id="num_t" name="num_t" placeholder="telefóno" value="<?php if(isset($_POST["num_t"])){ echo $_POST["num_t"];} ?>" maxlength ="10"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >*Extensión: </label>
								<input type="text"  class="form-control domUR border border-dark" id="ext" name="ext" placeholder="**" value="<?php if(isset($_POST["ext"])){ echo $_POST["ext"];} ?>" maxlength ="6" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							</div>
						</div>
						<br>
								</td>
							</tr>	
						</div>								
					</tbody>
					</table>
					<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
					<button type="submit" name="next2" id="next1" class="next2 btn btn-secondary color_boton" >SIGUIENTE</button>
  					<!-- <input type="button" name="next" class="next2 btn btn-secondary color_boton" value="Siguiente" /> -->
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
					<div class="form-group col-md-12" >	
							<label class="plantilla-label estilo-colorg" for="rfcT">*RFC: (Jefatura del Programa)</label>
						</div>
						<div class="form-row">
							<div class="col-2">
							<div class="md-form mt-0">
								<input type="text" class="form-control border border-dark" id="rfc_t" name="rfc_t" placeholder="RFC" value="<?php if(isset($_POST["rfc_t"])){ echo $_POST["rfc_t"];} ?>" maxlength="13"required>
							</div>
							</div>
						</div>
						<br>
						<div class="form-group col-md-12">
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="nombreT">*NOMBRE COMPLETO: (Jefatura del Programa)</label>
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
								<label class="plantilla-label estilo-colorg" for="puesto" >*Puesto: (Jefatura del Programa)</label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="puesto_j" name="puesto_j" placeholder="puesto" value="<?php if(isset($_POST["puesto_j"])){ echo $_POST["puesto_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="dom_t" >*Domicilio para recibir correspondencia: (Jefatura del Programa)</label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="dom_titular_j" name="dom_titular_j" placeholder="Domicilio" value="<?php if(isset($_POST["dom_titular_j"])){ echo $_POST["dom_titular_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >*Correo institucional: (Jefatura del Programa)</label>
								<input type="email"  class="form-control domUR border border-dark" id="correo_j" name="correo_j" placeholder="@" value="<?php if(isset($_POST["correo_j"])){ echo $_POST["correo_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >*Correo adicional: (Jefatura del Programa)</label>
								<input type="email"  class="form-control domUR border border-dark" id="correoA_j" name="correoA_j" placeholder="@" value="<?php if(isset($_POST["correoA_j"])){ echo $_POST["correoA_j"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
						<div class="form-row">
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="num_tel" >*Número telefónico oficina: (Jefatura del Programa)</label>
								<input type="text"  class="form-control domUR border border-dark" id="num_j" name="num_j" placeholder="telefóno" value="<?php if(isset($_POST["num_j"])){ echo $_POST["num_j"];} ?>" maxlength ="10" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >*Extensión: </label>
								<input type="text"  class="form-control domUR border border-dark" id="ext_j" name="ext_j" placeholder="**" value="<?php if(isset($_POST["ext_j"])){ echo $_POST["ext_j"];} ?>" maxlength ="6" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							</div>
						</div>
						<br>
						<div class="form-row">
							<div class="col-2">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >Número de contacto (celular):</label> 
								<input type="text"  class="form-control domUR border border-dark" id="cel_j" name="cel_j" placeholder="celular" value="<?php if(isset($_POST["cel_j"])){ echo $_POST["cel_j"];} ?>" maxlength ="10" onkeyup="javascript:this.value=this.value.toUpperCase();" >
							</div>
							</div>
						</div>
								</td>
							</tr>	
						</div>								
							<input type="text" style = "display:none" class="form-control" id="guardarDoc" name="guardarDoc" value="<?php if(isset($_POST["guardarDoc"])){ echo $_POST["guardarDoc"];} ?>" >
					</tbody>
					</table>
					
					<table class="table table-striped table-bordered" >
					<tbody>
					<div class="form-row">
						<div class="col">
								<?php
								$consulta = "SELECT nombre_documento FROM ct_documentos";
								$resultado = sqlsrv_query($conn, $consulta);
								$contador=0;
								$documentoN = "doc";
								while($listDoc= sqlsrv_fetch_array($resultado)) {
									$contador++;
									$documentoN = $documentoN . $contador;
								?>
									<tr>
										<td >
										<?php echo utf8_encode($listDoc["nombre_documento"]); ?>
											<div class="col">
													<input type="text" class="form-control border border-dark" style = "display:none" id="validarDoc" name="validarDoc" value="<?php if(isset($_POST["validarDoc"])){ echo $_POST["validarDoc"];}else{ echo "HOLA"; } ?>" >
													<p>
														<img src="./img/tache.png" height="17" width="20" id='<?php echo "image_".$documentoN; ?>'>
														<div id="<?php echo "checkImg_".$documentoN; ?>" height="17" width="20">
															
														</div>
													</p>
											</div>	
										</td>
										<td >
											<div class="col-3">
												<div class="md-form md-0">
													<input type="file" id="<?php echo "nameFile".$documentoN; ?>" name="nameArchivo" required>
												<!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
												</div>
											</div>
										</td>
										<td>
											<div class="col">
												<div class="md-form md-0">
													<input type="button"  href="javascript:;" id = "<?php echo $documentoN; ?>" name="guardarAdj"  class="btn btn btn-light border-dark tamanio-button" value="Guardar Documento"><br>
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
					<!-- Resultado: <span id="resultado">0</span> -->
						<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
						<!-- <input type="button" name="next3" class="next3 btn btn-secondary color_boton" value="Siguiente" /> -->
						<button type="submit" name="next3" id="next3" class="next3 btn btn-secondary color_boton" >SIGUIENTE</button>

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
						<div class="form-group col-md-12" >	
							<label class="plantilla-label estilo-colorg" for="rfcT">*RFC: (Encargado del Programa)</label>
						</div>
						<div class="form-row">
							<div class="col-2">
							<div class="md-form mt-0">
								<input type="text" class="form-control border border-dark" id="rfc_ep" name="rfc_ep" placeholder="RFC" value="<?php if(isset($_POST["rfc_ep"])){ echo $_POST["rfc_ep"];} ?>" maxlength="13"required>
							</div>
							</div>
						</div>
						<br>
						<div class="form-group col-md-12">
							<div class="form-group col-md-12" >	
				  				<label class="plantilla-label estilo-colorg" for="nombreT">*NOMBRE COMPLETO: (Encargado del Programa)</label>
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
								<label class="plantilla-label estilo-colorg" for="puesto" >*Puesto: (Encargado del Programa)</label>
								<input type="text"  type="text" class="form-control domUR border border-dark" id="puesto_ep" name="puesto_ep" placeholder="puesto" value="<?php if(isset($_POST["puesto_ep"])){ echo $_POST["puesto_ep"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >*Correo institucional: (Encargado del Programa)</label>
								<input type="email"  class="form-control domUR border border-dark" id="correo_ep" name="correo_ep" placeholder="@" value="<?php if(isset($_POST["correo_ep"])){ echo $_POST["correo_ep"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="correo" >*Correo adicional: (Encargado del Programa)</label>
								<input type="email"  class="form-control domUR border border-dark" id="correoA_ep" name="correoA_ep" placeholder="@" value="<?php if(isset($_POST["correoA_ep"])){ echo $_POST["correoA_ep"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
							</div>
							<br>
						<div class="form-row">
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="num_tel" >*Número telefónico oficina: </label>
								<input type="text"  class="form-control domUR border border-dark" id="num_ep" name="num_ep" placeholder="telefóno" value="<?php if(isset($_POST["num_ep"])){ echo $_POST["num_ep"];} ?>" maxlength ="10" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
								</div>
								</div>
							<div class="col">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >*Extensión: </label>
								<input type="text"  class="form-control domUR border border-dark" id="ext_ep" name="ext_ep" placeholder="**" value="<?php if(isset($_POST["ext_ep"])){ echo $_POST["ext_ep"];} ?>" maxlength ="6" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							</div>
						</div>
						<br>
						<div class="form-row">
							<div class="col-2">
								<div class="md-form mt-0">
								<label class="plantilla-label estilo-colorg" for="ext" >Número de contacto (celular): </label>
								<input type="text"  class="form-control domUR border border-dark" id="cel_ep" name="cel_ep" placeholder="celular" value="<?php if(isset($_POST["cel_ep"])){ echo $_POST["cel_ep"];} ?>" maxlength ="10" onkeyup="javascript:this.value=this.value.toUpperCase();" >
							</div>
							</div>
						</div>
								</td>
							</tr>	
						</div>								
					</tbody>
				</table>
				<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  				<input type="submit" name="submit" class="submit btn btn-secondary color_botonEnv" value="Enviar Solicitud" id="submit_data" />
		</fieldset>
					
				<div class="col-md-8 col-md-offset-8">
					<input type="text" style="display: none;" name="id_env" id="id_enviar" value="<?php echo $banderaid?>">
 				</div>	
				<br>

<br> <br> 
<br>
					<!-- <input type="button" onclick="enviarDatos()" class="btn btn-primary" value="Enviar Información" name="botonAccion"> -->
					<!-- <input type="submit" name="infoEnv" class="btn btn-primary" value="Enviar Información"><br> -->
		
			</form>
		</center>
		<!-- <form  enctype="multipart/form-data" id="formBoton" name="boton2" action="" method="POST">  -->
		<!-- </form> -->
	
</body>
</html>