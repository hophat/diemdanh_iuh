
var url = 'http://localhost/diemdanh/';

   function thongke_sv_vang(id_hp){
    $.ajax({
              url:url+'/php/thongke_sv_vang.php',
              type:'POST',
              data: {
                id_hp:id_hp,
              },
              success: function(data){  
                $('#thongke_sv_vang').empty();
                $('#thongke_sv_vang').append(data);
                },
                 error: function() {
                alert("Tthông kê sinh viên vắng không thành công");
              },
              });
    }

	   function ds_camthi(id_hp){
    $.ajax({
              url:url+'/php/ds_sv_camthi.php',
              type:'POST',
              data: {
                id_hp:id_hp,
              },
              success: function(data){  
                $('#thongke_sv_vang').empty();
                $('#thongke_sv_vang').append(data);
                },
                 error: function() {
                alert("danh sách câm thi không thành công");
              },
              });
    }


function xoasv(id_sv,id_HP){
	
    var r = confirm("Nhấn OK để xóa !!!");
	if( r == true)
	{
		$.ajax({
					url:url+'/php/ajax/xoasv.php',
					type:'POST',
					data: {
						id_sv:id_sv,
            id_hp:id_HP,
						
					},
          success:function(data)
          {
              if(data==1) { 
                alert_thongbao(1);
                setTimeout(function(){location.reload()},1000);
             } else {
              alert_thongbao(2);
                setTimeout(showHP_SV(id_HP),1000);
             }
          },
           error: function() 
           {
                alert("xóa sv không thành công");
              },
					});
		
	}

				
}
function trangchu(){
 window.location.href="trangchu-site_showhocphan";
}

function xoahp(id_hp)
{
	var r = confirm("Nhấn OK để xóa !!!");
	if( r == true)
	{
	$.ajax({
				url:url+'/php/ajax/xoa_hp.php',
				type:'POST',
				data: {
					id_hp:id_hp,
					
				},
        success: function(data){
          if(data == 1)
          {
            alert_thongbao(1);
            setTimeout(function(){trangchu();},1000);
             
              
            }else
            {
               // window.location.href="?site=1&site_chl=site_showhocphan";
              alert_thongbao(2);
              
            }
      
        },
         error: function() {
                 alert_thongbao(2);
              },
				});
				
	}
}

function themsv(id_HP)
      {
      var c = document.getElementById(id_HP).children;
     var mssv=c[0].value;
      var ten=c[2].value;
      var hodem=c[1].value;
	      var lop=c[3].value;
		
		  
       
		if(mssv !="" && ten !="" && ten!="" &&lop!=""){	
			$.ajax({
				  url:url+'/php/ajax/themsv.php',
				  type:'POST',
				  async : false,
				  data: {
					id_hp:id_HP,
					mssv:mssv,
					lop:lop,
					hodem:hodem,
					ten:ten,
				  },
				  success: function(data){
           
            if(data == 1){
             
           
           setTimeout(function (){link_hp(id_HP);},1500); 
           
           alert_thongbao(1); 

         }else{
           
           setTimeout(function (){link_hp(id_HP);},1500); 
           
             alert_thongbao(2);
         }
					
				  },
				   error: function() {
					alert("Thêm sinh viên không thành công");
				  },
				  });
		  }else{
		  alert("Vui lòng nhập thông tin sinh viên");
	  }
	  }

function suathongtin(mssv,id_hp){
      
      var c = document.getElementById(mssv).children;
     var lop=c[0].value;
      var sua_hodem=c[2].value;
      var sua_ten=c[3].value;
        $.ajax({
              url:url+'/php/ajax/suathongtin.php',
              type:'POST',
              async : false,
              data: {
                sua_lop:lop,
                sua_hodem:sua_hodem,
                sua_ten:sua_ten,
                mssv:mssv
              },
              success: function(data){ 
                if(data==1)
                {
             
               setTimeout(function(){location.reload()},800);
                  alert_thongbao(1);
              }else{
                
               setTimeout(function(){location.reload()},800);
               alert_thongbao(2);
              }
              },
              error: function() {
                alert("sửa thông tin không thành công");
              },
              }); 
      
    }
	function sua_hp(id_hp)
  {
       window.location="trangchu-site_edit-"+id_hp;
      
  }


function xuat_file(id_hp){ 
  $.ajax({
	
      url:url+'/php/ajax/xuatfile.php',
          type:'POST',
		  async:false,
          data: {
            id_hp:id_hp,
          },
          success: function(data){
					 window.open(url+'/php/ajax/xuatfile.php?id_hp='+id_hp);
          },
           error: function() {
                alert("xuất file không thành công");
              },

  });
}

function link_dd(id_hp)
{

      danhvang_sv(id_hp);
    window.location.href="trangchu-site_show_ds_diemdanh-"+id_hp;
    
}

 function danhvang_sv(id_hp) 
  {

    $.ajax({
      
          url : url+'/php/ajax/danhvang.php',
              type:'POST',
           async:false,
              data: {
                id_hp:id_hp,
              },
              success: function(data ){

              },
               error: function() {
                    alert("Error ajax danhvang");
                  },

      });

  }


function link_hp(id_hp){

  window.location.href="trangchu-site_showhocphan-"+id_hp;

}

