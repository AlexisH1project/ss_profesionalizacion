<?php
            include "./configuracion.php";
            $elCorreo_j = $_POST['correoJ'];
            $elRfc = $_POST['elRfc'];
            $nombreArch = $_POST['id'];

        //     $hoy = "select CURDATE()";
        //     $tiempo ="select curTime()";

        //      if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
        //              $fechaArray = mysqli_fetch_row($resultHoy);
        //              $horaArray = mysqli_fetch_row($resultTime);
        //      }
        //     $h_id = str_replace ( ":", '',$horaArray[0] ); 
        //     $f_id = str_replace ( "-", '',$fechaArray[0] ); 
            // consultamos para saber el id y el nombre corto del nombre 
            $sqlRolDoc = "SELECT id_doc, documentos FROM ct_documentos WHERE prefijo = '$nombreArch'";
            $resRol=mysqli_query($conexion, $sqlRolDoc);
            $idDoc = mysqli_fetch_row($resRol);
            $banderaBoton=1;

            // $enviarDoc = $idDoc[1].'_'.$concatenarNombDoc;

            $dir_subida = './documentos/'.$idDoc[1].'/';
// Arreglo con todos los nombres de los archivos
        $files = array_diff(scandir($dir_subida), array('.', '..')); 
        
        foreach($files as $file){
            // Divides en dos el nombre de tu archivo utilizando el . 
            $data = explode("_",$file);
            $data2 = explode(".",$file);
            $indice = count($data2);	

            $extencion = $data2[$indice-1];
            //----------------Sacamos la Hora 
            $hoy = "select CURDATE()";
            $tiempo ="select curTime()";

             if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
                     $row = mysqli_fetch_row($resultHoy);
                     $row2 = mysqli_fetch_row($resultTime);
             }
             $hora = str_replace ( ":", '',$row2[0] ); 
             $fecha = str_replace ( "-", '',$row[0] ); 

            // Nombre del archivo
            $extractRfc = $data[0];
             $nameAdj=strtoupper($idDoc[1]);
        }

        $fichero_subido = $dir_subida . basename($_FILES['file']['name']);

        $extencion2 = explode(".",$fichero_subido);
        $tamnio = count($extencion2);

        $extencion3 = $extencion2[$tamnio-1];

        if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido)) {
            sleep(3);
            $concatenarNombreC = $dir_subida.strtoupper($elRfc."_".$idDoc[1]."_.".$extencion3);
            rename ($fichero_subido,$concatenarNombreC);
            $resultado = $nombreArch ; 
            echo $resultado ; 
        } else{
            $resultado = "<script> alert('Existe un error al guardar el archivo'); ";
            echo $resultado;
        }

?>