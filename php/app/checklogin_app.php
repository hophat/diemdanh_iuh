
<?php
	error_reporting("all");
	include('import_library.php');

	$myusername		=	$_POST['acc'];
	$mypassword		=	$_POST['pass'];

	$check_login 	= 	CHECK_login($myusername, $mypassword);

	if ($check_login != 0) {
		echo '1';
		$_SESSION["myusername"] = $check_login ;
	} else {
		echo '0';
	}
?>
