<?php
	 //error_reporting('all');
include('connet_ajax.php');  
error_reporting("all");
if(!isset($_SESSION["myusername"])){
header("location:../../index.php");
}
	if(!empty($_POST['sua_lop']) || !empty($_POST['sua_lop']) || 
		!empty($_POST['sua_lop']) || !empty($_POST['sua_lop'])	|| !empty($_POST['sua_lop'])) {
		
		$sua_lop 	= $_POST['sua_lop'];
	    $sua_mssv 	= $_POST['sua_mssv'];
	    $sua_hodem 	= $_POST['sua_hodem'];
	    $sua_ten 	= $_POST['sua_ten'];
	    $mssv 		= $_POST['mssv'];	
	}
	
	echo CAPNHAT_TT_SV($sua_hodem, $sua_ten, $sua_lop, $mssv);
?>