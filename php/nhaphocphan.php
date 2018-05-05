<?php

if(isset($_POST["import"]))
{
		$dem_capnhat=0;

		$txtenmonhoc 	= 	SQL_INJECTION($_POST["txttenmonhoc"]);	
		$txtmamonhoc 	=	SQL_INJECTION($_POST["txtmamonhoc"]);
		$txttenlop 		=	SQL_INJECTION($_POST["txttenlop"]);
		$txttiethoc 	= 	SQL_INJECTION($_POST["txttiet"]);
		$txtphonghoc 	= 	SQL_INJECTION($_POST["txtphonghoc"]);
		$datedau 		= 	SQL_INJECTION($_POST["datedau"]);
		$datecuoi 		= 	SQL_INJECTION($_POST["datecuoi"]);
		$thu 			= 	SQL_INJECTION($_POST["thu_1"]);
		
		if( $txtmamonhoc == '' || $txtenmonhoc =='' || $txttiethoc == '' || $txtphonghoc == ''  || $datedau == ''  || $datecuoi =='') {
			exit('Tạo học phần không thành công.');
		}

		$txttiet = FORMAT_tiethoc($txttiethoc);
			
		$txttietdau  = $txttiet['dau'];
		$txttietcuoi = $txttiet['cuoi'];

		$query = "INSERT INTO 
			hocphan(tenhocphan,tiet_bd, tiet_kt,id_lophocphan,batdau_mon,ketthuc_mon,thu,phong,id_gv,ten_lop)
		VALUES ('$txtenmonhoc','$txttietdau','$txttietcuoi','$txtmamonhoc','$datedau','$datecuoi','$thu','$txtphonghoc','$id_gv','$txttenlop')";
		$kq = insert( $query);
		if($kq == false){
			
			die('Hoc phan da ton tai');
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
				   
					    $mssv =  $worksheet->getCellByColumnAndRow(1, $row)->getValue();
						$hodem =  $worksheet->getCellByColumnAndRow(2, $row)->getValue();
						$ten =  $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					    $lop =  $worksheet->getCellByColumnAndRow(4, $row)->getValue();

					    

						if($mssv != '') {

							if(THEM_SV($mssv, $hodem, $ten, $lop, $txtmamonhoc)) {
										$dem_capnhat+=1;
									}	
						}
					
				   }
			  } 

		 }
		

		  		 echo' <meta http-equiv="refresh" content="0;trangchu-site_thanhcong-chedo=1-so_sv='.$dem_capnhat.'-id_hp='.$id_hp.'"/>';
				
}


?>