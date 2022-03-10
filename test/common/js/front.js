	$(function(){
		$('#main_slides').slides({
			hoverPause: true,
			generateNextPrev: true,
			generatePagination: true,
			play: 10000,
			pause: 1000,
			start: 1,
				animationComplete: function(current){
					// Set the slide number as a hash 
					//window.location.hash = '#' + current;
				}
		});
	});
	
	$(function(){
		
		// header gnb menu
		
		$('.gnb .m1').hide();

		$('.gnb >ul >li').hover(function(e){
		
			num=$(this).index();
			imgurl_on="images/common/menu"+num+"_on.png"
			imgurl="images/common/menu"+num+".png"
			
			$(this).find('img').attr("src",imgurl_on);
			$('.gnb ul > li > ul').hide();
			$(this).find('ul').show();
			
		},function(e){			
			$(this).find('img').attr("src",imgurl);			
		})
		
		$('.gnb .m1').mouseleave(function(e){			
			$(this).hide()		
		})
		
		$('#header_wrap').hover(function(e){			
			$('.gnb .m1').hide()			
		})
		
		$('.gnb .button').hover(function(e){			
			$('.gnb .m1').hide()			
		})
		
		// header gnb menu 끝
		

	})
	
	$(function(){
		
		$('.faq_tb .qu .tl').click(function(){	
			
			$('.faq_tb .an').hide();
			$(this).parent().next().show();
		})
		
		// faq_list 게시판 on/off 끝
		
		//시설안내
		
		$('.small li').hover(function(e){
			cnt=$(this).index()+1
			imgurl='images/academy/campus_photo/gangnam0'+cnt+'.png'
				
			$('.big >img').attr('src',imgurl)
					
		})	

	})
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	