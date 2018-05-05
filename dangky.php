<!DOCTYPE html>
<html>
<?php 
include('database/function_data.php');
include('database/function_project.php');
include('database/data.php');
include('head.php');

?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <link rel="shortcut icon" href="img/UInWMhe.jpg" />
    <a href="#"><b>ĐĂNG KÝ</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><b>Đăng ký thành viên mới</b></p>

    <form action=" php/tao_tv.php" id="dangky" method="post" name="dangky">
      <div class="form-group has-feedback">
       <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <input type="text" class="form-control" id="ten_gv_dk" name="ten_gv_dk" placeholder="Họ Tên" required autofocus="true" />
       
         <p style="color:red;display:none;" class="error "></p>
      </div>
      <div class="form-group has-feedback">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <input type="text" class="form-control" id="ten_dn_dk" name="ten_dn_dk" placeholder="Tên Đăng nhập " required/>
        
      </div>
      <div class="form-group has-feedback">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input type="password" class="form-control" id="mk_dk" name="mk_dk" placeholder="Mật khẩu" required/>
        
      </div>
      <div class="form-group has-feedback">
       <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <input type="password" class="form-control" name="mk_dk_again" placeholder="Nhập Lại Mật Khẩu" >
       
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           <a href="index.php" class="text-center">Bạn đã có tài khoàn</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" onclick="">Đăng ký</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  <!-- >  <div class="social-auth-links text-center">
  
    </div>
<-->
  
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script type="text/javascript">

$(function() {
  jQuery.validator.addMethod("nonNumeric", function(value, element) {
    return this.optional(element) || isNaN(Number(value));
},"String cannot be numeric");

  jQuery.validator.addMethod("noSpace", function(value, element) { //Code used for blank space Validation 
            return value.indexOf(" ") < 0 && value != ""; 
        }, "No space please and don't leave it empty"); 
    $('#dangky').validate({
      rules : {
        ten_gv_dk : {
          required : true,
            minlength : 6,
            nonNumeric : true
        },
        ten_dn_dk:{
          required:true,
           minlength : 6,
           noSpace: true
        },
        mk_dk : {
          required : true,
          minlength : 8,
          noSpace : true
        },
        mk_dk_again :{
          equalTo: "#mk_dk"
        },
      },
      messages : {
        ten_gv_dk : {
          required : "Vui lòng điền tên giáo viên",
            minlength : "Tên giảng viên phải lớn hơn 6 ký tự",
            nonNumeric : "Không được nhập số"
        },
        mk_dk : {
          required : "Mật khẩu không được để trống",
          minlength : "Mật khẩu phải có ít nhất 8 ký tự",
           noSpace : "Mật khẩu không được có khoảng trắng"
        },
        ten_dn_dk:{
          required: "Vui lòng nhập tên đăng nhập"
          ,minlength : "Tên đăng nhập phải lớn hơn 6 ký tự",
           noSpace : "Tài khoản không được có khoảng trắng"
        },
        mk_dk_again:{
          equalTo : "Vui lòng nhập lại mật khẩu"
        }
      }
    });
  })

</script>
<script src="js/jquery.validate.min.js"></script>

<style type="text/css">
  .error{
    color: red;
font-weight: inherit;
border-color: red;
  }
.success{
border-color: green;

}
</style>
</body>
</html>
