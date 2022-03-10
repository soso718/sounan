$(function(){
	init();
	
	
	
})//전체페이의 공통 js내용

function init() {
	

 gnb(); //  메뉴
 side_menu();
 gallery();
 top_scroll();  
 bio_story();
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

function bio_story(){
	
	// ********* Biotherm story VISUAL *********************
	
			$('.box0-title').css('opacity',0);
			$('.box0-right').css('opacity',0);
			
			$('.box0-title').animate({opacity:1},500)
			$('.box0-right').delay(100).animate({opacity:1},500)
	
	
	
	// ********* AQUATIC BIODIVERSITY SKINCARE ***********
	
			
		var $visual=$('.box2 .zzz li');
		var delay=3000;
		var cnt=0;
		var old=0;
		
		$visual.css('left','100%').first().css('left',0);
	
		setInterval(function(){
			
			cnt++;
			if(cnt>2){cnt=0} //cnt%3
			
			$visual.eq(cnt).css('left','100%').stop().animate({left:0},300);
			$visual.eq(old).css('left',0).stop().animate({left:'-100%'},300);
			
			$('.dot-list li').removeClass('on');
			$('.dot-list li').eq(cnt).addClass('on');
						
			old=cnt;
			
		},delay)
		
		
		
			
	
	// ********* Product Story VISUAL ****************
	
			$('.box1-txt').css('opacity',0);			
			$('.box1-txt').animate({opacity:1},500)

	
	// ********* 제품라인 스크롤시 창 뜨도록 ****************

			$('.gg1').css('opacity',0).css('top',100)
			$('.gg2').css('opacity',0).css('top',100)
			$('.gg3').css('opacity',0).css('top',100)
			$('.gg4').css('opacity',0).css('top',100)
			
			var top=0;
			
			$(window).on('scroll',function(e){
					top=$(window).scrollTop()
					
					if(top>80){
						$('.gg1').animate({opacity:1,top:110},800)
					}
					
					if(top>490){
						$('.gg2').animate({opacity:1,top:110},800)
					}
					
						if(top>1400){
						$('.gg3').animate({opacity:1,top:110},800)
					}		
					
						if(top>1900){
						$('.gg4').animate({opacity:1,top:110},800)
					}
					
					console.log(top)
							
				})
	
			
	
	
	
}