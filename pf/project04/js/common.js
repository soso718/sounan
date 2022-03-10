$(function(){
	init();
	
	
	
	
	
})//전체페이의 공통 js내용

function init() {
 gnb(); //  메뉴
 side_menu();
 gallery();
 top_scroll();  
 week();
 load(); //로딩
}

function load(){
	
	$('.load img').delay(2000).fadeOut()
	
}

function gnb(){
	//실제 메뉴의 js 내용들어가기 
	
	var isplay=false;
	
	$('.head h2').on('click',function(e){
		if(!isplay){
			$('#nav').stop().animate({'left':0},300)
			$('#black').fadeIn();
		}else{
			$('#nav').stop().animate({'left':'-80%'},300)
			$('#black').fadeOut();
		}
		isplay=!isplay
	})
	
	$('#black').on('click',function(e){
		$('#nav').stop().animate({'left':'-80%'},300)
		$('#black').fadeOut();
	})
	
	
}
function side_menu(){}
function gallery(){}
function top_scroll(){}
function week(){

	$('.week ul li').on('click',function(e){
		$(this).toggleClass('on')
	})


	$('.bell_bt').on('click',function(e){
		$('#time').fadeIn()
		$('.blackB').fadeIn()
	})
	
	$('.blackB').on('click',function(e){
		$(this).fadeOut()
		$('#time').fadeOut()
	})
	
	$('#time .bt li').on('click',function(e){
		$('.blackB').fadeOut()
		$('#time').fadeOut()
	})
	
	$('#time .ring li').on('click',function(e){
		$('#time .ring li').removeClass('on')
		$(this).addClass('on')
	})
	
	$('.time p').on('click',function(e){
		$('#timeB').fadeIn()
		$('.blackB').fadeIn()
	})
	
	$('.blackB').on('click',function(e){
		$(this).fadeOut()
		$('#timeB').fadeOut()
	})
	
	$('#timeB .bt li').on('click',function(e){
		$('.blackB').fadeOut()
		$('#timeB').fadeOut()
	})
	
	$('#cup_list ul li').on('click',function(e){
		
		$('#cup_list ul li').removeClass('on')
		$(this).addClass('on')
		
	})
	
	$('.aa').on('click',function(e){
		$('#wrap>img').attr('src','images/011.jpg')
	})
	
	
	
	
	
}




