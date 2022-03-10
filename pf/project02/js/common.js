$(function(){
	init();
	
	
	
})//전체페이의 공통 js내용

function init() {
		
 gnb(); //  메뉴
 side_menu();
 gallery();
 top_scroll();  
}

function gnb(){
	//실제 메뉴의 js 내용들어가기 
	
	$('#gnb li ul').hide()

	$('#gnb >li').hover(function(e){
				
				$('#gnb li ul').hide();
				$(this).children('ul').show();
				$('#header').stop().animate({height:200},500)
									
			})

			$('#header').on('mouseleave',function(e){
				$('#gnb li ul').hide();
				$('#header').stop().animate({height:150},500)
			})
	
}
function side_menu(){}
function gallery(){}
function top_scroll(){}
