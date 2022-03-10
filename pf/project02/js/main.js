$(function(){
	init();
	
	
	
}) //전체페이의 공통 js내용

function init() {
	

// ********************** 메인비주얼 ******************** //
			
		var tx=0;
		var ty=0;	
		
		
		// ******* 메인이미지 넘기기 *******
		
		var $visual=$('#visual .visual_ul li');
		var delay=3000;
		var cnt=0;
		var old=0;
		
		$visual.css('left','100%').first().css('left',0);
	
		setInterval(function(){
			
			cnt++;
			if(cnt>2){cnt=0} //cnt%3
			
			$visual.eq(cnt).css('left','100%').stop().animate({left:0},300);
			$visual.eq(old).css('left',0).stop().animate({left:'-100%'},300);
						
			old=cnt;
			
		},delay)
		
		
		
		
		/*
		$('#visual').on('mousemove',function(e){
			tx=e.pageX;
			ty=e.pageY;			
			$('#visual .pduct').css({left:483 - (tx/80) , bottom:0 +(ty/80)})
		})
		*/
		
		/*
		$('.whats-new').on('mousemove',function(e){
			tx=e.pageX;
			ty=e.pageY;
			
			$('.whats-new img').css({right:20 - (tx/80) , bottom:30 +(ty/80)})

		})*/



		// ******* view detail 버튼 *******
		
		$('#visual .button').hover(function(e){			
			$(this).attr('src', $(this).attr('src').replace('1','2') ) 	
		},function(e){			
			$(this).attr('src', $(this).attr('src').replace('2','1') ) 				
		})
		

		// ******* 스크롤시 창 뜨게 *******

		$('.product').css('opacity',0).css('top',100)
		$('.best').css('opacity',0).css('top',100)
		$('.book').css('opacity',0).css('top',100)
		
		var top=0;
		
		$(window).on('scroll',function(e){
				top=$(window).scrollTop()
				
				if(top>300){
					$('.product').animate({opacity:1,top:0},800)
				}
				
				if(top>600){
					$('.best').animate({opacity:1,top:0},800)
				}
				
					if(top>900){
					$('.book').animate({opacity:1,top:0},800)
				}				
			})

		
		
		$('.pdline img').hide()
		
		$('.product li').hover(function(e){
			
			$(this).children('img').show();
			$(this).children('a').hide();
			
		},function(e){
			$(this).children('img').hide();
			$(this).children('a').show();
		})
		
		
		
	
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
