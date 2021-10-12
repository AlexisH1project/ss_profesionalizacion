<?php

$nombreDeArchivoDescarga = $_GET['nombreDecarga'];
$tipoArchivo = $_GET['extencion'];
$subCarpeta = $_GET['subCarpeta'];

$ruta =	explode("/", $nombreDeArchivoDescarga); 
$path = "documentos/".$subCarpeta."/".$nombreDeArchivoDescarga;

		header("Content-type: application/PDF");
        header("Content-Transfer-Encoding: binary");
		readfile($path); //C:/xampp2/htdocs/SICON_w/roles/Controller/
		// readfile("./DOC_FOMOPES/".$nombreDeArchivoDescarga); //C:/xampp2/htdocs/SICON_w/roles/Controller/
        // // readfile($nombreDeArchivoDescarga); //C:/xampp2/htdocs/SICON_w/roles/Controller/
		// readfile("./DOCUMENTOS_RES/".$nombreDeArchivoDescarga); //C:/xampp2/htdocs/SICON_w/roles/Controller/
		// readfile("./DOCUMENTOS_PDC/".$nombreDeArchivoDescarga); //C:/xampp2/htdocs/SICON_w/roles/Controller/
		// echo $path;


?>