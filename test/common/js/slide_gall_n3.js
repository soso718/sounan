// 2014, smg, gallery_n ver3.0

$(function(){

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	var gallery="#gallery_n3" //갤러리 id
	
	var img_n=$(gallery+' .gall ul>li').length;	
	var m_on=[];
	var m_off=[];	
	
	
	////// 메뉴 이미지 설정 /////////		  
		  
		  // 썸네일 이미지로 설정시
		  /*
		  m_on[1]="url(images/img01s-on.jpg)"; //썸네일1 활성화 이미지
		  m_off[1]="url(images/img01s-off.jpg)"; //썸네일1 비활성화 이미지
		  
		  m_on[2]="url(images/img02s-on.jpg)"; //썸네일2 활성화 이미지
		  m_off[2]="url(images/img02s-off.jpg)"; //썸네일2 비활성화 이미지
		  
		  m_on[3]="url(images/img03s-on.jpg)"; //썸네일3 활성화 이미지
		  m_off[3]="url(images/img03s-off.jpg)"; //썸네일3 비활성화 이미지
		  
		  m_on[4]="url(images/img04s-on.jpg)"; //썸네일4 활성화 이미지
		  m_off[4]="url(images/img04s-off.jpg)"; //썸네일4 비활성화 이미지
		  
		  m_on[5]="url(images/img05s-on.jpg)"; //썸네일5 활성화 이미지
		  m_off[5]="url(images/img05s-off.jpg)"; //썸네일5 비활성화 이미지
		  */
		  
		  // on off 아이콘으로 설정시
		  for (b=1; b<=img_n; b++){
			  m_on[b]="url(images/m-on.png)"; //메뉴 활성화 이미지
			  m_off[b]="url(images/m-off.png)"; //메뉴 비활성화 이미지
		  }
	     
	
    ////// 효과설정 //////////
		  var type="A";//A슬라이드로변환, B그냥변환, C페이드효과로변환, D오버랩효과로변환
		  var speed=0.6;//슬라이드움직임속도(초단위) -자동롤링간격(auto_g)보다 크면안됨
		  
		  var auto_gall=true;//자동롤링 사용유무(true/false)
		  var auto_g=3;//자동롤링시 다음 이미지로 바뀌는 간격(초단위)
		  var dd=5;//자동롤링시 버튼을 눌렀을때 잠시 멈춰져있는 시간(초단위)
		  
		  var et="cl"; //메뉴목록에 클릭했을때cl / 오버했을 때ov 
		  var ts=1; //썸네일목록이 비활성화될때 투명도(50%는 0.5)

//////아래는 수정하면 안됨/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	speed=speed*1000;
	auto_g=auto_g*100;
	dd=dd*100;
	dd=dd-auto_g;
	var img_w=parseInt($(gallery+' .mas').css("width"));
	var img_h=parseInt($(gallery+' .mas').css("height"));
	var targetX=0;
	var count=0;
	var gall_box=$(gallery+' .gall');
	  if(type=="D"){
		var gall_temp=$(gallery+' .gall').clone(true);
		gall_temp.appendTo(gallery+' .mas');
		gall_temp.css({position:"absolute",left:0,top:0});
	  }
	function ss(){
	  if(type=="A"){gall_box.animate({left:targetX},speed);}
   	  if(type=="B"){gall_box.css({left:targetX});}
	  if(type=="C"){
		  gall_box.fadeOut(speed,function(){
		     gall_box.css({left:targetX});
			 gall_box.fadeIn(speed);
		  });
	  }	  
	  if(type=="D"){
		     gall_box.css({left:targetX});//
			 gall_temp.stop();//
			 gall_temp.fadeOut(speed,function(){//
		       gall_temp.css({left:targetX});//
			   gall_temp.fadeIn(speed);//
		  });
	  }
	}
	ss();
	$(gallery+' .gall').css({width:img_w*img_n*2,height:img_h});	
	$(gallery+' .gall li').css({width:img_w,height:img_h,float:'left'});
	$(gallery+' .gall ul').css({margin:0,padding:0,listStyle:'none',float:'left'});
	$(gallery+' .gall ul').clone(true).appendTo(gallery+' .gall');
	for ( k=1;k<=img_n; k++ ){
		$(gallery+' .m'+k).css({background:m_off[k]+' no-repeat',opacity:ts});	
	}
	$(gallery+' .m1').css({background:m_on[1]+' no-repeat',opacity:1});
	var i=1;
	function mm(){
	  gall_box.stop();
	  count = -dd;	
	  targetX=0-img_w*(i-1);
      ss();
	  for ( k=1;k<=img_n; k++ ){
		  $(gallery+' .m'+k).css({background:m_off[k]+' no-repeat',opacity:ts});	
	  }
	  $(gallery+' .m'+i).css({background:m_on[i]+' no-repeat',opacity:1}); 
	}
	if (et=="cl"){	
		$(gallery+' .g_nav ul li').click(function(){			  
		      i=$(this).attr('class').charAt(1,$(this).attr('class').length);
			  mm();
			  return false;
		});
	}
	else if (et=="ov"){	
		$(gallery+' .g_nav ul li').mouseenter(function(){			  
		      i=$(this).attr('class').substring(1,$(this).attr('class').length);
			  mm(); 
			  return false;
		});
	}	
	function nn(){
		ss();
		for ( k=1;k<=img_n; k++ ){
			 $(gallery+' .m'+k).css({background:m_off[k]+' no-repeat',opacity:ts});	
			 if ( targetX== -img_w*(k-1) ) { $(gallery+' .m'+k).css({background:m_on[k]+' no-repeat',opacity:1}); }
		}
		if ( targetX== -img_w*img_n ) { $(gallery+' .m1').css({background:m_on[1]+' no-repeat',opacity:1}); }	
	}
	$(gallery+' .nex').click(function(){
		gall_box.stop();	count = -dd;targetX -= img_w;
		if( targetX < -img_w*img_n){ gall_box.css({left:0});targetX=0-img_w;	}		
		nn();
	});	
	$(gallery+' .pre').click(function(){
		gall_box.stop();	count = -dd;targetX += img_w;
		if( targetX > 0 ){ gall_box.css({left:-img_w*img_n});targetX= -img_w*img_n+img_w;}		
		nn();
	});	
    function g_fn(){
	  count++;
	  if (count==auto_g){
		targetX -= img_w;
		if( targetX < -img_w*img_n){ gall_box.css({left:0});targetX=0-img_w;	}		
		nn();		
		count=0;
	  }
    }
	function auto_play(){
	  galltime=setInterval(g_fn,10)		
	}
    if(auto_gall){
		auto_play();	
    }
    $(gallery+" .play").hide();
	$(gallery+" .stop").click(function(){
		   clearInterval(galltime);
		   $(this).hide();
		   $(gallery+" .play").show();
	 });
	$(gallery+" .play").click(function(){
		   auto_play();
		   $(this).hide();
		   $(gallery+" .stop").show();
	 });
});
