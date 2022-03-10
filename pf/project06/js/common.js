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
	
	var isplay=false
	
	$('#header h2').on('click',function(e){	
		
		 var handler = function(e){e.preventDefault();}	
		 
			if(!isplay){
				$('#nav').stop().animate({left:0},300);
				$('#bgblack').fadeIn();
				$('#header h2 img').attr('src','images/mobile_back.png');
				$('body,html').css('overflow','hidden')
				//$(window).bind('touchmove', handler);
				
			}else{
				$('#nav').stop().animate({left:'-75%'},300);
				$('#bgblack').fadeOut();
				$('#header h2 img').attr('src','images/drawer.png');
				$('body,html').css('overflow','auto')
				//$(window).unbind('touchmove', handler);
			}
			isplay=!isplay

	$('.pp').on('click',function(e){
		
	})


	})
			
	$('#bgblack').on('click',function(e){
		$('#nav').stop().animate({left:'-75%'},300);
		$('#bgblack').fadeOut();
		$('#header h2 img').attr('src','images/drawer.png');
		$('body,html').css('overflow','auto');
	})
		
		
	
	$('#gnb > li > a').next().slideUp()
		
	$('#gnb .aa').on('click',function(e){
		
		if(!isplay){
			$(this).next().slideDown()
			$('#gnb li a p').text('-')
		}else{
			$(this).next().slideUp()
			$('#gnb li a p').text('+')			
		}isplay=!isplay
		
	})	
	
	
	var $visual=$('#visual .visual_ul li');
	var $dot=$('#visual .visual_dot li')
	var cnt=0;
	var old=0;
	var delay=3000;

	
	$visual.css('left','100%').first().css('left',0);
	
	setInterval(function(){
		
		cnt++;
		if(cnt>3){cnt=0} //cnt%3
		
		$visual.eq(cnt).css('left','100%').stop().animate({left:0},300);
		$visual.eq(old).css('left',0).stop().animate({left:'-100%'},300);
		
		$dot.removeClass('on');
		$dot.eq(cnt).addClass('on');
		
		old=cnt;
		
	},delay)
	
}
	
	
	//실제 메뉴의 js 내용들어가기 

function side_menu(){
	
	 // var handler = function(e){e.preventDefault();}
// 	 
	  // $('.btn').click(function(){ // 레이어 클릭시
		    // $('.layer').show();   // 레이어 보임
		    // $(window).on('touchmove', handler);
  	// });
// 	
	// $('.layer a').click(function(){ // 레이어 close버튼
	    // $('.layer').hide();       // 레이어 사라짐
	    // $(window).off('touchmove', handler);
  // });
	
	
}
function gallery(){
	
	
}
function top_scroll(){}
