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
	

			

			var isplay=false;
	
				$('#header .h3').on('click',function(e){
					if(!isplay){
						$('#gnb').fadeIn()
					}else{
						$('#gnb').fadeOut()
					}
					isplay=!isplay
				})
		
	
	//실제 메뉴의 js 내용들어가기 
}
function side_menu(){}
function gallery(){}
function top_scroll(){}
