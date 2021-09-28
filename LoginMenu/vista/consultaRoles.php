
<?php

    include "../../encuesta_procesos/Controller/Conexion.php";
   $user =  $_GET["usuario"];
    $ROL = $_POST['rol'];
    // /*
   
    $consultaRol = " SELECT id_rol FROM usuarios WHERE usuario = ?";
            //echo $user;
    if($consultaRol = sqlsrv_query($conn, $consultaRol, array($user))){
                $row = sqlsrv_fetch_array($consultaRol);
                $ROL = $row['id_rol'];
                $unidad =  $row['unidadCorrespondiente'];
                // $alc_mun = utf8_encode($row['alc_mun']);
                // $estado = utf8_encode($row['estado']);
                // $colonia = utf8_encode($row['colonia']);  
                //    echo $ROL;

             if(($ROL == 0) && ($unidad == '')){
             
                        // echo '<script language="javascript">alert("Datos correctos/ Puedes dar de Baja o Actualizar");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));
                       // echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./capturista.php>';

            }
            elseif(($ROL == 0) &&  ($unidad != '')){
             
                        // echo '<script language="javascript">alert("Datos correctos/ Puedes dar de Baja o Actualizar");</ script>';
                    header('Location:../../encuesta_procesos/unidadCaptura.php?usuario_rol='.urlencode($user));
                       // echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./capturista.php>';

            }
            
            elseif($ROL=='1')
			{
                        
                      //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    //header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));
					echo "
					<script>
						document.location = '../../encuesta_procesos/menuPrincipal.php?usuario_rol=".urlencode($user)."';
					</script>";
                  
            }

           elseif($ROL == 2){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));
            }  

            elseif($ROL == 3){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));
            }
            elseif($ROL == 4){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));//cambiar
            }elseif($ROL == 5){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/consultaEstado.php?usuario_rol='.urlencode($user));//cambiar
            }elseif($ROL == 6){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));//cambiar//cambiar
            }elseif($ROL == 7){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));//cambiar//cambiar
            }elseif($ROL == 8){
                        //echo '<script language="javascript">alert("Datos correctos/ Puedes dar Alta");</ script>';
                    header('Location:../../encuesta_procesos/menuPrincipal.php?usuario_rol='.urlencode($user));//cambiar//cambiar
            }


             
     }




?>
