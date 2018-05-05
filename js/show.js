
$(window).on('load', function() { // makes sure the whole site is loaded 
    $('#status').delay(800).fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(500).css({'overflow':'visible'});
    
  })
 


function alert_thongbao(id_thongbao){
	$(".content-header").empty();
	var thongbao;
	var mau='alert-success';
	switch(id_thongbao){
		case  1 : thongbao = 'Thao Tác Thành Công.';break;
		case  2 : thongbao = 'Thao Tác Thất Bại.';
						mau='alert-danger';break;
		
		default  : thongbao = 'Lỗi thao có thao tác thực hiện';
						mau='alert-warning';break;
	}

	var txt = '<div class="alert '+mau+' fade in alert-dismissable thongbao">'
    +'<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+
    '<strong>'+thongbao+'</strong></div>';
	
		$(".content-header").append(txt);

		$('.thongbao').delay(1500).fadeOut('slow');

}

//preload
