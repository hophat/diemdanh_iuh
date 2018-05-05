<?php

error_reporting("all");
include('connet_ajax.php');
include("../PHPExcel/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
require_once '../PHPExcel/Classes/PHPExcel.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

//=======================chen tieu de cho file =============================================

$id_lophocphan   =   $_GET['id_hp'];

$days            = GET_DAYS($id_lophocphan);
$hocphan         = SHOW_TT_HP($_SESSION["myusername"],$id_lophocphan);
$hocphan         = $hocphan[0];

$objPHPExcel     = new PHPExcel();
$objPHPExcel     = PHPExcel_IOFactory::load("../../tailieu/18d.xls");

$objPHPExcel->setActiveSheetIndex(0)
      ->setCellValue('A9', 'STT')
      ->setCellValue('B9', 'Mã sinh viên')
			->setCellValue('C9', 'Họ tên')
			->setCellValue('D9', $days['buoi1'])
			->setCellValue('E9', $days['buoi2'])
			->setCellValue('F9', $days['buoi3'])
			->setCellValue('G9', $days['buoi4'])
			->setCellValue('H9', $days['buoi5'])
			->setCellValue('I9', $days['buoi6'])
			->setCellValue('J9', $days['buoi7'])
			->setCellValue('K9', $days['buoi8'])
			->setCellValue('L9', $days['buoi9'])
			->setCellValue('M9', $days['buoi10'])
			->setCellValue('N9', $days['buoi11'])
			->setCellValue('O9', $days['buoi12'])
			->setCellValue('P9', $days['buoi13'])
			->setCellValue('Q9', $days['buoi14'])
			->setCellValue('B7', 'Môn học:  ['.$id_lophocphan.'] - '.$hocphan['tenhocphan'])
			->setCellValue('F7', 'Lớp học: '.$hocphan['ten_lop']);
//======================= ket thucchen tieu de cho file =============================================

//======================= chen du lieu cho file =====================================================      
	   $col=9;
	   $cot=0;
     $stt=0;

    $tt_diemdanh    =   SHOW_TT_DIEMDANH($id_lophocphan);
                  
     foreach ($tt_diemdanh as $row ) {
              $stt+=1;
              $col+=1;

             if ($row['buoi1']!=NULL) {
                if ($row['buoi1']=='0000-00-00') {
                    $row['buoi1']='X';
                  }
                else {
                    $row['buoi1']='';
                  }
              }

                if ($row['buoi2']!=NULL) {
                    if ($row['buoi2']=='0000-00-00')
                       $row['buoi2']='X';
                    else {$row['buoi2']='';}
                }
                if($row['buoi3']!=NULL){
               
               if($row['buoi3']=='0000-00-00')
                {$row['buoi3']='X';}
              else{$row['buoi3']='';}
              }
                if($row['buoi4']!=NULL){
                 
                 if($row['buoi4']=='0000-00-00')
               {$row['buoi4']='X';}
             else{$row['buoi4']='';}
              }
                if($row['buoi5']!=NULL){
               
               if($row['buoi5']=='0000-00-00')
              {$row['buoi5']='X';}
            else{$row['buoi5']='';}
              }
                if($row['buoi6']!=NULL){
            
               if($row['buoi6']=='0000-00-00')
               {$row['buoi6']='X';}
             else{   $row['buoi6']='';}
              }
                if($row['buoi7']!=NULL){
              
               if($row['buoi7']=='0000-00-00')
              {$row['buoi7']='X';}
            else{ $row['buoi7']='';}
              }
                if($row['buoi8']!=NULL){
              
               if($row['buoi8']=='0000-00-00')
               {$row['buoi8']='X';}
             else{ $row['buoi8']='';}
              }
                if($row['buoi9']!=NULL){
               
               if($row['buoi9']=='0000-00-00')
               {$row['buoi9']='X';}
             else{$row['buoi9']='';}
              }
                if($row['buoi10']!=NULL){
               
               if($row['buoi10']=='0000-00-00')
               {$row['buoi10']='X';}
             else{$row['buoi10']='';}
              }
                if($row['buoi11']!=NULL){
               
               if($row['buoi11']=='0000-00-00')
            {$row['buoi11']='X';}
          else{$row['buoi11']='';}
              }
                if($row['buoi12']!=NULL){
               
               if($row['buoi12']=='0000-00-00')
               {$row['buoi12']='X';}else{$row['buoi12']='';}
              }
                if($row['buoi13']!=NULL){
              
               if($row['buoi13']=='0000-00-00')
               {$row['buoi13']='X';}else{ $row['buoi13']='';}
              }
                if($row['buoi14']!=NULL){
               
               if($row['buoi14']=='0000-00-00')
              {$row['buoi14']='X';}else{$row['buoi14']='';}
              }
                if($row['buoi15']!=NULL){
               
               if($row['buoi15']=='0000-00-00')
              {$row['buoi15']='X';}else{$row['buoi15']='';}
                }

      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $col, $stt);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $col, $row['mssv']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $col, $row['hodem'].' '.$row['ten']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $col, $row['ten_lop']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $col, $row['buoi1']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $col, $row['buoi2']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $col, $row['buoi3']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $col, $row['buoi4']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $col, $row['buoi5']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $col, $row['buoi6']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $col, $row['buoi7']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $col, $row['buoi8']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $col, $row['buoi9']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $col, $row['buoi10']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $col, $row['buoi11']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $col, $row['buoi12']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $col, $row['buoi13']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $col, $row['buoi14']);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $col, $row['buoi15']);
      }

  
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

// If you want to output e.g. a PDF file, simply do:
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bang_dd'.$ten_lop.'.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');


?>
