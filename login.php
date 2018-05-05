
<style>

body{
	height: 100%;
    background:white;
}
.btn_login{
    background: #3c8dbc;
    border-color: #367fa9;
}
.login{
	
	margin: auto;
	margin-top: 3%;
}
.left{
	width: 55%;
	float: left;
} 
.right{
	width: 45%;
	float: right;
}
#body-login {
	width: 98%;
	margin: auto;
}
.left .box-body{
	height: 90%;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img{
	    height: 100%;
	    width:  100%;
}
.carousel{
	 height: 100%;
}
/*#carousel-example-generic  {
    box-shadow: 2px 7px 26px 4px #1010107d;
}*/
.login-box-body{
	width: 65%;
    background: white;
    margin: auto;
    height: 50%;
    font-size: 1.2em;
    transition: all 10s ;
    -webkit-transform: all 1s;
 	-ms-transform: all 1s ;
 	animation: background_main 100s 2s infinite;
 	position: relative;
}
.fa-angle-right{
	right: 10px;
}
.fa-angle-left{
	left: 10px;
}
.input_login_new{
	width: 92%;
    border: 0px;
    margin-top: 20px;
    border-bottom: 1px:;
    outline: 0px;
    border-bottom: 1px solid #e0c9c9;
    background: #ff000000;
   transition: background-color 5000s ease-in-out 0s;

}

.glyphicon.form-control-feedback{
    margin-top: 20px;
}
.input_login_new::placeholder{
	color: white;
}
.input_login_new:focus{
	 border-bottom: 1px solid blue;
	 transition: all 1s;
}

.login-box-body:hover{
	box-shadow: 0px 5px 30px -4px #4444448a;
	transform: translate(0px,-20px );
	transition: all 1s;
 	-webkit-transform: all 1s;
 	-ms-transform: all 1s ;
}

.form_dk{
    padding-top: 30px;
    padding-left: 20px;
    padding-right: 20px;
}
.login-logo{
	width: 100%;
}

body{
	animation: background_main 100s 2s infinite;
	position: relative;
}
.left .box-body{
	width: 55%;
    height: 90%;
}
.left .box-body img{
	 animation: myfirst 20s 2s infinite;
	 position: absolute;
}
.nut_login{

    margin: auto;
     margin-top: 30px;
    width: 90%;
}
.dangky{
	float: right;
	margin-right: 20px
}

@keyframes myfirst {
    0%   {left:0%; top:0px;  transform:rotate(0deg);}
    30%   {left:25%; top:5%; transform:rotate(20deg); }
    60%  { left:10%; top:5%; transform:rotate(-20deg);}
   100%	 { left:0%; top:0px;  transform:rotate(0deg); }
}

@media only screen  and ( max-width: 900px ) {
	.login-box-body{
    box-shadow: 0px 5px 30px -4px #4444448a;
    transform: translate(0px,-20px );
    transition: all 1s;
	}
	.left{
		width: 0px;
	}
	.right{
		width: 100%;
		float: left;
	}
	.login-logo{
		visibility: hidden;
	}
}
@media only screen  and ( max-width: 500px ) {

	.left .box-body img {
		width: 90%;
	}

	.login-logo{
		visibility: visible;
	}
	.login-box-body{
    box-shadow: 0px 0px 3px 0px #4444448a;
    transform: translate(0px,-20px );
    transition: all 1s;
	}
	.login-box-body{
		width: 80%;
	}
	@keyframes myfirst {
		0%   	{left:0%; top:30%;  transform:rotate(0deg);}
		30%   	{left:30%; top:80%; transform:rotate(20deg);}
		60% 	 { left:15%; top:50%; transform:rotate(-20deg);}
		100% 	{ left:0%; top:30%;  transform:rotate(0deg);}
	}

	.left .box-body img{
		top : 30%;
	}
}


</style>
<script type="text/javascript">
	$(document).ready(function(){
			$( ".login-box-body" ).mouseover(function() {
				$( "div.left img" ).css({'border':'1px solid'});
	 			 });
			$( ".login-box-body" ).mouseout(function() {
				$( "div.left img" ).css({'border':'0px solid's});
	 			 });
	});
	
</script>
	<body>
	   	<section id="body-login">
			<div class="login left">
					
						 
				<div class="box-body">
					<img src="img/logo_new.png"  >
	            </div>

				</div>


				<div class="login right">
					  <div class="login-logo" >
					  	<img src="img/banner_home.png" width="70%">
						<!-- <a href="" style="color: #fff"><b>ĐIỂM DANH </b>IUH</a> -->
					  </div>
					  <!-- /.login-logo -->
					<div class="login-box-body" >
						<p class="login-box-msg">Sai tài khoản hoặc mật khẩu</p>

						<form method="post" class="form_dk">
						  <div class="form-group has-feedback">
							<input  name="myusername" type="text" class="input_login_new" placeholder="Tài khoản...">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						  </div>
						  <div class="form-group has-feedback">
							<input  name="mypassword" type="password" class="input_login_new" placeholder="Mật khẩu...">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						  </div>
						  <div class="row">
							<div class="dangky">
							  <a href="dangky.php">Đăng ký tài khoản mới </a>
							</div>
							<!-- ĐĂNG KÝ-->
						
							<!-- /.col -->
							<div class="nut_login">
							  <button  name="dangnhap" type="submit" class="btn btn-primary btn-block btn-flat btn_login">Đăng nhập</button>
							 
							  <!-- <a style="padding-left:25%;" href='dangky.php'><u>Đăng Ký</u></a>-->
							</div>
							<!-- /.col -->
						  </div>
						</form>
						 
						  
					</div>
					<!-- /.login-box -->

					<!-- jQuery 3 -->

					<script>
					  
					</script>
				</div>
			</section>
	</body>
</html>
<?php
 include('php/checklogin.php');
?>