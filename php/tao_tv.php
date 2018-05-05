<?php
	error_reporting("all");
 include('../database/data.php');
	mysql_query("SET NAMES utf8");
	
	//error_reporting("all");
	if(isset($_POST['submit']))
	{
		$ten_gv_dk=$_POST['ten_gv_dk'];
		$ten_dn_dk=$_POST['ten_dn_dk'];
		$mk_dk=$_POST['mk_dk'];
		$ten_dn_dk = stripslashes($ten_dn_dk);
		$mk_dk = stripslashes($mk_dk);
		$ten_dn_dk = mysql_real_escape_string($ten_dn_dk);
		$mk_dk = mysql_real_escape_string($mk_dk);
		$mk_dk=md5($mk_dk);
		$query="SELECT tengv FROM giangvien where tengv='$ten_dn_dk'";
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
		if($row ==1 ){
				header("Location: dk_loi.php");
		}else{
				$query="INSERT INTO `giangvien`(`tengv`, `password`,nickname) VALUES ('$ten_dn_dk','$mk_dk','$ten_gv_dk')";
				if(mysql_query($query))
					header("Location: dk_thanhcong.php");
				else{
					header("Location: dk_loi.php");
				}
		}
	}	
?>