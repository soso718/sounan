$(function(){
	gnb()
	visual()
	
	
	
})


function gnb() {
	
	var isplay=false
	
	$('.menu').on('click',function(e){		
		if(!isplay){
			$('#nav').stop().animate({left:0},300);
			$('#bg').fadeIn();
			$('.menu img').attr('src','images/mobile_back.png');
			
			
		}else{
			$('#nav').stop().animate({left:-440},300);
			$('#bg').fadeOut();
			$('.menu img').attr('src','images/mobile_menu.png');
		}
		isplay=!isplay

	})
	
	$('#bg').on('click',function(e){
		$('#nav').stop().animate({left:-440},300);
		$('#bg').fadeOut();
		$('.menu img').attr('src','images/mobile_menu.png');
	})
	
	$('#gnb li ul').hide().first().show();
	
	
	$('#gnb > li > a').on('click',function(e){
		$(this).next().slideDown()
		$('#gnb > li > a').not(this).next().slideUp()
	})

}


function visual(){
	
	var $visual=$('#visual .visual_ul li');
	var $dot=$('#visual .visual_dot li')
	var cnt=0;
	var old=0;
	var delay=3000;
	
	$visual.css('left','100%').first().css('left',0);
	
	setInterval(function(){
		
		cnt++;
		if(cnt>2){cnt=0} //cnt%3
		
		$visual.eq(cnt).css('left','100%').stop().animate({left:0},300);
		$visual.eq(old).css('left',0).stop().animate({left:'-100%'},300);
		
		$dot.removeClass('on');
		$dot.eq(cnt).addClass('on');
		
		old=cnt;
		
	},delay)
	
}









