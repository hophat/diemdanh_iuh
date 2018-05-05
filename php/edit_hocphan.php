<?php

if(isset($_POST["import"]))
{
		 $dem_capnhat=0;
			$txtenmonhoc 	=	SQL_INJECTION($_POST["txttenmonhoc"]);	
			$txttenlop 		=	SQL_INJECTION($_POST["txttenlop"]);
			$txttiethoc 	=	SQL_INJECTION($_POST["txttiet"]);
			$txtphonghoc	=	SQL_INJECTION($_POST["txtphonghoc"]);
			$datedau 		=	SQL_INJECTION($_POST["datedau"]);
			$datecuoi 		=	SQL_INJECTION($_POST["datecuoi"]);
			$thu 			=	SQL_INJECTION($_POST["thu_1"]);
			
			if(  $txtenmonhoc == '' || $txttiethoc == '' || $txtphonghoc == ''  || $datedau == ''  || $datecuoi == '') {
			 echo ' <meta http-equiv="refresh" content="0;index.php" />  ';
			 die();
		}

			$txttiet 		= 	FORMAT_tiethoc($txttiethoc);
			$txttietdau  	= 	$txttiet['dau'];
			$txttietcuoi 	=	$txttiet['cuoi'];
				
			//cap nhat lai thong tin hoc phan
			$query = "UPDATE hocphan SET tenhocphan='$txtenmonhoc',tiet_bd='$txttietdau', tiet_kt='$txttietcuoi',batdau_mon='$datedau'
						,ketthuc_mon='$datecuoi',thu='$thu',phong='$txtphonghoc',ten_lop='$txttenlop' where id_lophocphan='$id_hp'";
					$test_qr = query($query);
					if($test_qr == false) {
						echo " Lỗi cập nhât query";
					}
			$tmp = explode(".", $_FILES["excel"]["name"]);
			 $extension = end($tmp); // For getting Extension of selected file
			 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
			 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
			 {
			  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
			  include("php/PHPExcel/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
			  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
			  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
			  {
			   $highestRow = $worksheet->getHighestRow();
				   for($row=10; $row<=($highestRow-8); $row++)
				   {
					
					$mssv = mysql_real_escape_string($worksheet->getCellByColumnAndRow(1, $row)->getValue());
					$hodem = mysql_real_escape_string($worksheet->getCellByColumnAndRow(2, $row)->getValue());
					$ten = mysql_real_escape_string($worksheet->getCellByColumnAndRow(3, $row)->getValue());
					$lop = mysql_real_escape_string($worksheet->getCellByColumnAndRow(4, $row)->getValue());
					echo $mssv;
						if($mssv != '') {
							if(THEM_SV($mssv, $hodem, $ten, $lop, $id_hp)) {
								$dem_capnhat+=1;
							}
						}
				   }
			  } 
				
							

			 }


			 echo ' <meta http-equiv="refresh" content="0;trangchu-site_thanhcong-chedo=2-so_sv='.$dem_capnhat.'-id_hp='.$id_hp.'" />  ';
			
}
?>