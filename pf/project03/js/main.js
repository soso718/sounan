$(function(){
	initmain();
	
	
	
	$('.box1 .txt1').css({'opacity':0,'left':0})
	$('.box1 .txt2').css({'opacity':0})
	
	$('.box1 .txt1').animate({'opacity':1,'left':180},1300)
	$('.box1 .txt2').delay(1300).animate({'opacity':1},500)


	$(window).on('scroll',function(e){
		topsize=$(window).scrollTop()		
		
			if(topsize>500){
				
				$('.box2 .txt1').animate({'opacity':1,'left':950},1300)
				$('.box2 .txt2').delay(1300).animate({'opacity':1,'left':950},1300)
				$('.box2 .txt3').delay(2600).animate({'opacity':1,'left':950},500)

				

			}
			
			if(topsize>1500){

				$('.box3 .txt1').animate({'opacity':1,'left':150},1300)
				$('.box3 .txt2').delay(1300).animate({'opacity':1,'left':150},500)
	


			}
					
	})
	
	
		//정원e샵 바로가기 - hover
		
	$('#box2 .box2 .txt3').hover(function(e){		
			$(this).attr('src','images/box2_txt4.png')			
		},function(e){			
			$(this).attr('src','images/box2_txt3.png')		
	})
	
	
	
 	var cnt=0;
 	var arr=['츄앤리얼고구마츄','츄앤리얼군밤','츄앤크리스피완두','츄앤크리스피 치즈마일드','츄앤크리스피 치즈리치','츄앤디저트 밀크초코사과']

	

	$('.next').on('click',function(e){
		
		cnt++;
		if(cnt>5){cnt=0}		
		$('.list_ul li a img').attr('src','images/a0'+cnt+'.png')
		$('.list_ul li a p').text(arr[cnt])

	})
	
	$('.prev').on('click',function(e){
		
		cnt--;
		if(cnt<0){cnt=5}		
		$('.list_ul li a img').attr('src','images/a0'+cnt+'.png')
		$('.list_ul li a p').text(arr[cnt])

	})
	
	
	
	
})//endfunction

function initmain() {
 mainvisual();
 rolling_banner();
}

function mainvisual(){}
function rolling_banner(){}