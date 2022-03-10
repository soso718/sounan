//sub1-1 page
$(function(){
	
	$('.conbody01 strong,.conbody01 p').css('opacity','0');
	
	$('.conbody01 strong').animate({'opacity':'1'},600);
	$('.conbody01 p').delay(200).animate({'opacity':'1'},600);
	

})	
	
	
	
//sub1-2 page
$(function(){
	
	$('.conbody02 h3,.conbody02 .opacity').css('opacity','0');

	$('.conbody02 h3').animate({'opacity':'1'},600)
	$('.conbody02 .opacity').delay(200).animate({'opacity':'1'},600)



})	



	
//sub1-3 page
$(function(){

	$('.conbody03 .txt,.conbody03 .history').css('opacity','0');

	$('.conbody03 .txt').animate({'opacity':'1'},600)
	$('.conbody03 .history').delay(200).animate({'opacity':'1'},600)


})	

	
//sub1-4 page
$(function(){





})	

//sub2-2 page


$(function(){
	$('.conbox').hide().eq(0).show();
	
	$('.button li').eq(0).on('click',function(){
				
		$('.section1').fadeIn();
		$('.section2').hide();
		$('.section3').hide();
		
		$('.button li').removeClass();
		$(this).addClass('on');
		
	});
	
	$('.button li').eq(1).on('click',function(){
				
		$('.section1').hide();
		$('.section3').hide();
		$('.section2').fadeIn();
		
			$('.button li').removeClass();
		$(this).addClass('on');
		
	});
	
		$('.button li').eq(2).on('click',function(){
				
		$('.section1').hide();
		$('.section3').fadeIn();
		$('.section2').hide();
		
			$('.button li').removeClass();
		$(this).addClass('on');
		
	});




})	

