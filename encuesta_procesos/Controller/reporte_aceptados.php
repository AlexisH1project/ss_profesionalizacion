<?php

//require 'Classes/PHPExcel.php';
include "Conexion.php";
// require "../librerias/conexion_excel.php";

include './lib_excel/PHPExcel/IOFactory.php';

    $fileType = 'Excel5';
    $fileName = './lib_excel/reporteTrue.xls';

    // Read the file
    $objReader = PHPExcel_IOFactory::createReader($fileType);
    $objPHPExcel = $objReader->load($fileName);


   $fila = 2;
   $estiloTituloColumnas = array(
    'font' => array(
        'name'  => 'Calibri',
        'size' =>8,
        'color' => array(
            'rgb' => '000000'
        )
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    ),
    'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
);
    $estiloInformacion = new PHPExcel_Style();

        $estiloInformacion->applyFromArray( array(
            'font' => array(
                'name'  => 'Calibri',
                'size' =>11,
                'color' => array(
                    'rgb' => '000000'
                )
            ),
            'fill' => array(
                'type'  => PHPExcel_Style_Fill::FILL_SOLID
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            ),
            'alignment' =>  array(
                'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
            )
        ));

            $queryAceptados = "SELECT * FROM registro WHERE usuario_asignado != '' AND color_estado= 'guinda' ";
           if( $res_queryAceptados = sqlsrv_query($conn,$queryAceptados)){
               while ($row= sqlsrv_fetch_array($res_queryAceptados))
               {            
                    //    echo "el valor a escribir es: ". $row[1];
                       $objPHPExcel->setActiveSheetIndexByName('REG');
                       $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row[1]); 
                       $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row[2]); 
                       $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row[3]); 
                       $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row[4]); 
                       $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row[5]); 
                       $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row[6]);
                       $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row[7]);
                       $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row[8]);
                       $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row[9]);
                       $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $row[10]);
                       $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $row[11]);
                       $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $row[12]);
                       $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $row[13]);
                       $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $row[14]);
                       $objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $row[15]);
                       $objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $row[16]);
                       $objPHPExcel->getActiveSheet()->setCellValue('Q'.$fila, $row[17]);
                       $objPHPExcel->getActiveSheet()->setCellValue('R'.$fila, $row[18]);
                       $objPHPExcel->getActiveSheet()->setCellValue('S'.$fila, $row[19]);
                       $objPHPExcel->getActiveSheet()->setCellValue('T'.$fila, $row[20]);
                       $objPHPExcel->getActiveSheet()->setCellValue('U'.$fila, $row[21]);
                       $objPHPExcel->getActiveSheet()->setCellValue('V'.$fila, $row[22]);
                       $objPHPExcel->getActiveSheet()->setCellValue('W'.$fila, $row[23]);
                       $objPHPExcel->getActiveSheet()->setCellValue('X'.$fila, $row[24]);
                       $objPHPExcel->getActiveSheet()->setCellValue('Y'.$fila, $row[25]);
                       $objPHPExcel->getActiveSheet()->setCellValue('Z'.$fila, $row[26]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AA'.$fila, $row[27]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AB'.$fila, $row[28]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AC'.$fila, $row[29]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AD'.$fila, $row[30]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AE'.$fila, $row[31]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AF'.$fila, $row[32]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AG'.$fila, $row[33]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AH'.$fila, $row[37]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AI'.$fila, $row[40]);
                       $objPHPExcel->getActiveSheet()->setCellValue('AJ'.$fila, $row[41]);
                       $fila++;
               }    
           }

                    $fila--;
                    $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A2:AJ".$fila);
                    $objPHPExcel->getActiveSheet()->getStyle("A2:AJ".$fila)->applyFromArray($estiloTituloColumnas);
                  // Write the file
                    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
                    $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

                    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
                    header('Content-Disposition: attachment;filename='."reporteConteoQr.xlsx");
                    header('Cache-Control: max-age=0');
                    ob_end_clean();
                    $writer->save('php://output');
?>
