<?php
	include('connet_ajax.php');
	error_reporting("all");
	if(!isset($_SESSION["myusername"])){
	header("location:index.php");
	}

	 if(!empty($_POST['id_hp']) && !empty($_POST['lop']) 
	 	&& !empty($_POST['mssv']) && !empty($_POST['hodem']) && !empty($_POST['ten'])) {

			$id_hp  =  $_POST['id_hp'];
			$mssv   =  $_POST['mssv'];
			$hodem  =  $_POST['hodem'];
			$ten    =  $_POST['ten'];
			$lop    =  $_POST['lop'];

			if (THEM_SV($mssv, $hodem, $ten, $lop, $id_hp)) {
				echo 1;
			} else {
				echo 0;
			}

	 } else {
	 	echo 0;
	 }

	
?>