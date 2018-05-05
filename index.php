<html>
<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
include('database/function_data.php');
include('database/function_project.php');
include('database/data.php');

session_start();
//error_reporting("all");

// if(isset($_SESSION["myusername"])){
// header("location:trangchu.php?site_chl=site_showhocphan");

// }
if(isset($_GET['testing'])) {
	include('testing.php');
	die();
}

 include('head.php');


if(isset($_SESSION['myusername'])) {
	include('trangchu.php');
}else{
	include('login.php');
}

?>
