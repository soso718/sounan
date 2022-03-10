//탭메뉴
$(function(){
	
	var h  = $(window).height();
    $('section').height(h);
    
    $(window).on("resize",function(){     
     h = $(window).height();
    })
	
	var isplay=false

	$('#header h2').on('click',function(e){		
		if(!isplay){
			$('#header').animate({'top':'-100px'},300)
			$('#header h2 i').eq(0).hide()
			$('#header h2 i').eq(1).show()						
		}else{
			$('#header').animate({'top':'0'},300)
			$('#header h2 i').eq(0).show()
			$('#header h2 i').eq(1).hide()
			
		}isplay=!isplay
		
	})

	
	
	$('.work02 .mobile').click(function(){
		window.open("../../pf/project02/mobile/index.html",'pop','top=0,left=0,width=480,height=720')
		return false;
	})
	
	$('.work05 .mobile').click(function(){
		window.open("../../pf/project04/index.html",'pop','top=0,left=0,width=320,height=569')
		return false;
	})
	
	$('.work07 .mobile').click(function(){
		window.open("../../pf/project06/index.html",'pop','top=0,left=0,width=375,height=667')
		return false;
	})




	var cnt=0;

	$('#gnb li').on('click',function(e){
		
		cnt=$(this).index()+1;
		ty=$('#box'+cnt).offset().top;
		$('html,body').animate({scrollTop:ty},500)
		
		$('#gnb li').removeClass();
		$(this).addClass('on');


})	

	$('#box3 ul .back').on('click',function(e){
		hh=$('.box33').offset().top
		$('html,body').animate({top:hh},500)
	})

	
	
	$('#box3 .conbox ul li').hover(function(e){
		$(this).find('.opa').show()
	},function(e){
		$('.opa').hide()
	})
	
	
	$('#gnb li').eq(3).on('click',function(e){
		
		$('#box4 .con_planet').css('opacity',0).animate({opacity:1},3000)
		
	})
	



	
	
	
	
	
	
 //페이지 이동
$(function(){

	
		
	})



})	






			$(function(){

				
				
			
			})





	
		$(function(){

				

			})
	
	
			

$(function(){





})	
		