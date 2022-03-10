<!doctype html>
<html>
<head>
<? include ("common/include/head.php"); ?>
</head>
<body>
	<?include ("common/include/header.php"); ?>
	<div id="subcontents">
		<div id="contents-inner">
			<h2 class="title_top">
				<img src="images/helpdesk/helpdesk_title.jpg" alt="HELPDESK">
			</h2>
			<ul class="helpdesk_tab">
				<li class="on"><a href="notice.php"><img src="images/helpdesk/helpdesk_tab1.jpg" alt="공지사항/이벤트"></a></li>
				<li><a href="counsel.php"><img src="images/helpdesk/helpdesk_tab2.jpg" alt="온라인상담신청"></a></li>
				<li><a href="qna_list.php"><img src="images/helpdesk/helpdesk_tab3.jpg" alt="질문/답변"></a></li>
				<li><a href="faq_list.php"><img src="images/helpdesk/helpdesk_tab4.jpg" alt="자주하는질문"></a></li>
			</ul>	
			<h3 class="title_sub">
				<img src="images/helpdesk/helpdesk_notice.jpg" alt="공지사항/이벤트">
			</h3>

			<p class="sub_name"><img src="images/helpdesk/helpdesk_sub2.jpg" alt="학원을 선택해주세요"></p>
			
			<div class="tj_list clear">
				<div class="tj_all"><div class="tmp-radio"><input type="radio" id="campus_select0" name="campus_select" checked /><label for="campus_select0">전체</label></div></div>
				<div class="tj_ul">
					<ul>
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select1"/><label for="campus_select1">강남(본원)</label></div></li>
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select2"/><label for="campus_select2">종로</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select3"/><label for="campus_select3">신촌1관</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select4"/><label for="campus_select4">신촌2관</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select5"/><label for="campus_select5">천호</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select6"/><label for="campus_select6">구로</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select7"/><label for="campus_select7">화곡</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select8"/><label for="campus_select8">인천</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select9"/><label for="campus_select9">부천</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select10"/><label for="campus_select10">수원</label></div></li>				
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select11"/><label for="campus_select11">일산</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select12"/><label for="campus_select12">광주</label></div></li>						
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select13"/><label for="campus_select13">울산</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select14"/><label for="campus_select14">부산(서면)</label></div></li>					
						<li><div class="tmp-radio"><input type="radio" name="campus_select" id="campus_select15"/><label for="campus_select15">부산(대연)</label></div></li>					
					</ul>
				</div>
			</div>
			
			<div class="sh_wrap">
					<p>
						<div>
							<select class="sh_title">
								<option>제목</option>
							</select>								
						</div>
						<input class="input"/>
						<a href="#" class="btn_sh">검색</a>
					</p>
			</div>
			
			<div class="list_table">
				<table>
					<colgroup>
						<col width="8%" />
						<col width="*" />
						<col width="10%" />
						<col width="10%" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col"><img src="images/helpdesk/helpdesk_table1.jpg" alt="NO" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table2.jpg" alt="제목" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table3.jpg" alt="작성일" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table4.jpg" alt="조회" /></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>9</td>
							<td class="tl"><a href="notice_page.php">[공지] 실업자 국비지원과정 개강!!</a><img src="images/helpdesk/hot_icon.png" alt="hot" class="hot"/></td>
							<td>2016-10-07</td>
							<td>53</td>
						</tr>
						<tr>
							<td>8</td>
							<td class="tl"><a href="javascript:;">[공지] 국가기간전략산업 100%무료지원 교육</a><img src="images/helpdesk/hot_icon.png" alt="hot" class="hot"/></td>
							<td>2016-05-11</td>
							<td>25,276</td>
						</tr>
						<tr>
							<td>7</td>
							<td class="tl"><a href="javascript:;">[공지] 직장인의 특권! 재직자 근로자카드</a><img src="images/helpdesk/hot_icon.png" alt="hot" class="hot"/></td>
							<td>2016-09-06</td>
							<td>19,052</td>
						</tr>
						<tr>
							<td>6</td>
							<td class="tl"><a href="javascript:;">[이벤트] 더조은 수강생만을 위한 취업특강 온라인 강의 할인 이벤트!!!</a></td>
							<td>2016-09-06</td>
							<td>1,431</td>
						</tr>
						<tr>
							<td>5</td>
							<td class="tl"><a href="javascript:;">[공지] 학원 수강생을 위한 온라인 무료쿠폰 사용 등록 안내</a></td>
							<td>2016-09-08</td>
							<td>872</td>
						</tr>
						<tr>
							<td>4</td>
							<td class="tl"><a href="javascript:;">[공지] 국가기간전략산업 100%무료지원 교육</a></td>
							<td>2016-09-06</td>
							<td>2,241</td>
						</tr>
						<tr>
							<td>3</td>
							<td class="tl"><a href="javascript:;">[이벤트] 더조은 수강생만을 위한 취업특강 온라인 강의 할인 이벤트!!!</a></td>
							<td>2015-10-07</td>
							<td>3,545</td>
						</tr><tr>
							<td>2</td>
							<td class="tl"><a href="javascript:;">[공지] 학원 수강생을 위한 온라인 무료쿠폰 사용 등록 안내</a></td>
							<td>2015-10-07</td>
							<td>3,545</td>
						</tr>
						<tr>
							<td>1</td>
							<td class="tl"><a href="javascript:;">[공지] 실업자 국비지원과정 개강!!</a></td>
							<td>2015-10-07</td>
							<td>3,545</td>
						</tr>
					</tbody>
				</table>
			</div>
					
				<div class="paging">
					<a href="" class="pv first"></a>
					<a href="" class="pv prev"></a>
					<a href="" class="on">1</a>
					<a href="">2</a>
					<a href="">3</a>
					<a href="">4</a>
					<a href="">5</a>
					<a href="" class="pv next"></a>
					<a href="" class="pv last"></a>
				</div>
		</div>
	</div>		
	<?php include ("common/include/footer.php"); ?>
</body>
</html>