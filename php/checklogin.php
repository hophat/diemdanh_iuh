<?php
//error_reporting("all");
// username và password được gửi từ form đăng nhập
if (isset($_POST["dangnhap"])) {

	$myusername		=	$_POST['myusername'];
	$mypassword		=	$_POST['mypassword'];


	// Xử lý để tránh MySQL injection
	$giangvien  	= 	CHECK_login($myusername,$mypassword);
	
	if ($giangvien === 0) {
		echo '<style>
			.login-box-msg, .register-box-msg{
			
			display : block;
			}		
			</style>';
		} else {
			$_SESSION["myusername"] = 	$giangvien ;

			 echo 	'<meta http-equiv="refresh" content="0;trangchu-site_showhocphan" />'  ;
			//header("location: /trangchu-site_showhocphan");
		}
}
?>
