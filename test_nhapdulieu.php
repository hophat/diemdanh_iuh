<?php

include('database/function_data.php');
include('database/function_project.php');
include('database/data.php');


		

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

					    
					    print_r($mssv);
					
				   }
			  } 

		 }
		

?>

<form role="form" name="frm" method="POST" enctype="multipart/form-data">

	<input   name="excel"  id="my-file" type="file">
	<input type="submit" name="import"/>
</form>