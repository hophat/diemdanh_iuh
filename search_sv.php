<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/UInWMhe.jpg" />
  <title>Điểm Danh | IUH</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Search button animation</title>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/css_site_search_dd.css">
  <!-- iCheck -->
 
    
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 


   
    <link rel="stylesheet" href="css/responsive.css">
      
    
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    
    
    <script src="js/show.js"></script>
    <script src="js/gioihan.js"></script>
    <script src="js/chucnnag.js"></script>
    
    <!-- jQuery UI 1.11.4 -->
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->

    <!-- Morris.js charts -->
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    
    <!-- jQuery Knob Chart -->
    <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    
    <!-- Slimscroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    
    <!-- AdminLTE App -->
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>


    <script src='js/jquery.min.js'></script>
    <script type="text/javascript">
    function show_kq_search(mssv)
    {
       if (mssv.length == 8 ) {
        url = 'http://diemdanh.ebooktinhoc.com/';
       
         $.post(
                 url+'php/ajax/search_dd_sv.php',
                 {mssv:mssv},
                function(data){
           

                    $( "#noidung_ketqua" ).empty();
                   $( "#noidung_ketqua" ).append(data);
               }
               );
      }
      

    }
    </script>
</head>
<style type="text/css">

      @media only screen and (max-width: 800px) {
          .header h1 {
                 font-size: 28px;
          }
          .chitiet {
                  padding: 0% 5% 0% 5%;
              }
              .thongtin_sv {
                width: 100%;
                
            }
            .search.open {
                width: 100%;
            }
            .content{
              min-height: 0px;
            }

            .thongtin_diemddanh{
              float :left;
            }
            .table_conten{
              margin-top:0px;
              width :100%;
            }
      }
    </style>
<body>




<section class="content">

  <div class = "header">
    <h1>LỊCH SỬ CÁC BUỔI HỌC</h1>
  </div>
<div class="search">
  <input type="number" class="search-box" id="yeucau" onkeyup="show_kq_search($('#yeucau').val())" />
  <span class="search-button">
    <span class="search-icon"></span>
  </span>
</div>
</section>
<section class="content chitiet" id="noidung_ketqua">
    <div class="box table_conten thongtin_sv">
              <div class="box-header">
               <!--  <h2 class="box-title">Thông Tin Sinh Viên</h2 > -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding box_thongtin_sv">
                <table class="thongtin_sv_table">
                  <tbody><tr class="thongtin_sv_tr">
                   
                    <th>Họ Tên</th>
                    <th>Hô Phát</th>
                   
                  </tr>
                  <tr class="thongtin_sv_tr" >
                   
                    <td>MSSV</td>
                    <td>
                      
                        <div > 14076971</div>
                      
                    </td>
                    
                  </tr>
                  <tr class="thongtin_sv_tr">
                    
                    <td>Lớp</td>
                    <td>
                      <div >
                        DHHTTT10B
                      </div>
                    </td>
                   
                  </tr>
                  <tr class="thongtin_sv_tr">
                   
                    <td>Hệ đào tạo</td>
                    <td>
                      <div >
                        Đại Học
                      </div>
                    </td>
                    
                  </tr>
                  <tr class="thongtin_sv_tr" >
                   
                    <td>Niên khóa</td>
                    <td>
                      <div >
                        2014 - 2018
                      </div>
                    </td>
                    
                  </tr>
                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>

    <div class="box table_conten thongtin_diemddanh">
              <div class="box-header">
               
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-condensed">
                  <tbody><tr>
                    <th style="width: 5%" >#</th>
                    <th  style="width: 50%" >Môn Học</th>
                    <th>Vắng</th>
                    <th style="width: 30%" ></th>
                    <th style="width: 10%" ></th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Lập trình hướng đối tương</td>
                    <td>2</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-red">55%</span></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Môn C#</td>
                    <td>2</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-yellow">70%</span></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>cơ sở dữ liệu</td>
                     <td>2</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-light-blue">30%</span></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>cơ sở dữ liệu</td>
                    <td>2</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-green">90%</span></td>
                  </tr>
                
                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>
  </section>

<script  >
	$('.search-button').click(function(){
	  $(this).parent().toggleClass('open');
	});
</script>
</body>

</html>
