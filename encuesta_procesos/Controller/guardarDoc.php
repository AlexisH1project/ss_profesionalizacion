<?php
            include "Conexion.php";
            $elCorreo_j = $_POST['correoJ'];
            $elRfc = $_POST['elRfc'];
            $nombreArch = $_POST['id'];

      
            // consultamos para saber el id y el nombre corto del nombre 
            $sqlRolDoc = "SELECT id_doc, documentos FROM ct_documentos WHERE prefijo = ?";
            $resRol = sqlsrv_query($conn, $sqlRolDoc, array($nombreArch));
            $idDoc= sqlsrv_fetch_array($resRol, SQLSRV_FETCH_NUMERIC);
            $banderaBoton=1;

             //$dir_subidaL = "documentos\'".$idDoc[1].""; //local
            $dir_subida = "documentos/".$idDoc[1]."/";
            // $dir=opendir($dir_subida); 
			//echo"Directorio".$dir_subida;
			//exit;
        $fichero_subido = $dir_subida . basename($_FILES['file']['name']);
        // $fichero_subidoL = $dir_subidaL . basename($_FILES['file']['name']); //servidor

        $extencion2 = explode(".",$fichero_subido);
        $tamnio = count($extencion2);

        $extencion3 = $extencion2[$tamnio-1];

        if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido)) {
            // sleep(3);
            $concatenarNombreC = $dir_subida.strtoupper($elRfc."_".$idDoc[1]."_.".$extencion3);
            rename ($fichero_subido,$concatenarNombreC);
            $resultado = $nombreArch ; 
            // echo $resultado ; 
        } else{
            $resultado = "X";
            // echo $resultado;
        }

        // closedir($dir_subida);

        // $dirL =opendir($dir_subidaL); 
        // if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subidoL)) {
        //     // sleep(3);
        //     $concatenarNombreC = $dir_subida.strtoupper($elRfc."_".$idDoc[1]."_.".$extencion3);
        //     rename ($fichero_subido,$concatenarNombreC);
        //     $resultado = $nombreArch ; 
        //     // echo $resultado ; 
        // } else{
        //     $resultado = "<script> alert('Existe un error al guardar el archivo'); ";
        //     // echo $resultado;
        // }        
        echo $resultado;
        // closedir($dir_subidaL);

?>