$(function(){
	init();
	
	
	
})//전체페이의 공통 js내용

function init() {
 gnb(); //  메뉴
 side_menu();
 nav();
 top_scroll();  
}

function gnb(){
	
		var top=0
	
			$(window).on('scroll',function(e){
				top=$(window).scrollTop()
				if(top>900){
					$('#header').addClass('on')
				}else{$('#header').removeClass('on')}

				
			})

	//실제 메뉴의 js 내용들어가기 
}
function side_menu(){
	
	$('.crispy').hide()
	$('.dessert').hide()
	$('.imgA').hide()
	
	$('#box4 .box4 ul li').removeClass('on');
	$('#box4 .box4 ul li').eq(0).addClass('on')

	$('#box4 .box4 ul li.bb').on('click',function(e){
		
		$('#box4 .box4 ul li').removeClass('on');
		$(this).addClass('on');
		$(this).css('backgroundColor','#fbaf5d')
		
		$('.real').fadeOut()
		$('.dessert').fadeOut()
		$('.crispy').fadeIn()
		
		$('.imgA').show()
		$('.imgB').hide()
		$('.imgC').show()
				
	})
	
	$('#box4 .box4 ul li.cc').on('click',function(e){
		
		$('#box4 .box4 ul li').removeClass('on');
		$(this).addClass('on');
		$(this).css('backgroundColor','#f26d7d')
		
		$('.real').fadeOut()
		$('.crispy').fadeOut()
		$('.dessert').fadeIn()
		
		$('.imgA').show()
		$('.imgB').show()
		$('.imgC').hide()
				
	})
	
	$('#box4 .box4 ul li.aa').on('click',function(e){
		
		$('#box4 .box4 ul li').removeClass('on');
		$(this).addClass('on');
		$(this).css('backgroundColor','#7cc576');
		
		$('.real').fadeIn()
		$('.crispy').fadeOut()
		$('.dessert').fadeOut()
				
		$('.imgA').hide()
		$('.imgB').show()
		$('.imgC').show()		
				
	})
	
	
	
	
	
}
function nav(){
	
	var cnt=0;
	
		$("#gnb li").on('click',function(e){
			
			cnt=$(this).index()+1;
			ty=$('#box'+ cnt).offset().top
			$('html , body').animate({ scrollTop : ty} , 700)
			
		})
	
}
function top_scroll(){

	
}
