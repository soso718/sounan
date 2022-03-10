//메뉴
$(function(){





})	
	
	
	
//탭메뉴
$(function(){





})	





//비주얼이미지
			$(function(){

				
				var cnt = 0;
				var imgurl = "";
				
				$('.btn_right').click(function(){
													
					cnt++;
					if(cnt>3){cnt=0};									
					imgurl='images/main/main'+cnt+'.jpg';
					
					$('#visual-wrap img').attr('src',imgurl).hide().fadeIn();	
					$('.path li').removeClass();
					$('.path li').eq(cnt).addClass('on');									
				});
				
				$('.btn_left').click(function(){
					
					cnt--;
					if(cnt<0){cnt=3}
					imgurl='images/main/main'+cnt+'.jpg';
					
					$('#visual-wrap img').attr('src',imgurl).hide().fadeIn();
					$('.path li').removeClass();
					$('.path li').eq(cnt).addClass('on');
					
				});
				
				$('.path li').click(function(){
					
					cnt=$(this).index();
					imgurl='images/main/main'+cnt+'.jpg';
					
					$('#visual-wrap img').attr('src',imgurl).hide().fadeIn();
					$('.path li').removeClass('on');
					$(this).addClass('on');
				
				});
			
			})




//사업분야 
	//hover
	
		$(function(){

				$('.conbox1 .area div:eq(0) a').hover(function(){
					$('.conbox1 .area div:eq(0) img').attr('src','images/main/woomi_b_area1.png');					
				});
				
				$('.conbox1 .area div:eq(0) a').mouseout(function(){
					$('.conbox1 .area div:eq(0) img').attr('src','images/main/woomi_area1.png');
				});				
				
				$('.conbox1 .area div:eq(1) a').hover(function(){
					$('.conbox1 .area div:eq(1) img').attr('src','images/main/woomi_b_area2.png');					
				});
				
				$('.conbox1 .area div:eq(1) a').mouseout(function(){
					$('.conbox1 .area div:eq(1) img').attr('src','images/main/woomi_area2.png');
				});								
				
				$('.conbox1 .area div:eq(2) a').hover(function(){
					$('.conbox1 .area div:eq(2) img').attr('src','images/main/woomi_b_area3.png');					
				});
				
				$('.conbox1 .area div:eq(2) a').mouseout(function(){
					$('.conbox1 .area div:eq(2) img').attr('src','images/main/woomi_area3.png');
				});				

			})
	
	
			
//메뉴
$(function(){





})	
		