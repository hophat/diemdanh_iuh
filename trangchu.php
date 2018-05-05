
<?php 
    $id_gv  =  $_SESSION["myusername"];

 	if (!isset($_SESSION["myusername"])) {
  		header("location:index.php");
  	}
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<?php 
	include('include_header.php'); 
	include('include_contect.php');
	include('include_aside_left.php');	
	include('include_aside_right.php');
?>
<!-- Content Wrapper. Contains page content -->
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
</body>
</html>
<?php
?>