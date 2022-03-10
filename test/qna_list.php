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
				<li><a href="notice.php"><img src="images/helpdesk/helpdesk_tab1.jpg" alt="공지사항/이벤트"></a></li>
				<li><a href="counsel.php"><img src="images/helpdesk/helpdesk_tab2.jpg" alt="온라인상담신청"></a></li>
				<li class="on"><a href="qna_list.php"><img src="images/helpdesk/helpdesk_tab3.jpg" alt="질문/답변"></a></li>
				<li><a href="faq_list.php"><img src="images/helpdesk/helpdesk_tab4.jpg" alt="자주하는질문"></a></li>
			</ul>	
			<h3 class="title_sub">
				<img src="images/helpdesk/helpdesk_question.jpg" alt="질문/답변">
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
						<col width="8%" />
						<col width="*" />
						<col width="10%" />
						<col width="10%" />
						<col width="10%" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col"><img src="images/helpdesk/helpdesk_table1.jpg" alt="NO" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table5.jpg" alt="캠퍼스" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table2.jpg" alt="제목" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table6.jpg" alt="작성자" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table3.jpg" alt="작성일" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table4.jpg" alt="조회" /></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>29,984</td>
							<td>일산</td>
							<td class="tl"><a href="#">kdkswkd2002@naver.com</a></td> 
							<td>안예진</td>
							<td>2016-10-07</td>
							<td>0</td>
						</tr>
					
						<tr>
							<td>29,983</td>
							<td>일산</td>
							<td class="tl"><a href="#">안녕하세요.&nbsp;안예진님!&nbsp;답변드리겠습니다.<span class="new"></span></a></td>
							<td><img src="images/helpdesk/tj_mark.png" alt="thejoeun" /></td>
							<td>08:20</td>
							<td>0</td>
						</tr>
					
						<tr>
							<td>29,982</td>
							<td>광주</td>
							<td class="tl"><a href="#">2d그래픽</a></td>
							<td>이혜정</td>
							<td>2016-10-05</td>
							<td>1</td>
						</tr>
					
						<tr>
							<td>29,981</td>
							<td>광주</td>
							<td class="tl"><a href="#">안녕하세요.&nbsp;이혜정님!&nbsp;답변드리겠습니다.</a></td>
							<td><img src="images/helpdesk/tj_mark.png" alt="thejoeun" /></td>
							<td>2016-10-06</td>
							<td>2</td>
						</tr>
					
						<tr>
							<td>29,980</td>
							<td>강남(본원)</td>
							<td class="tl"><a href="#">웹퍼블리셔종합</a></td>
							<td>김아림</td>
							<td>2016-10-05</td>
							<td>6</td>
						</tr>
					
						<tr>
							<td>29,979</td>
							<td>강남(본원)</td>
							<td class="tl"><a href="#">안녕하세요.&nbsp;김아림님!&nbsp;답변드리겠습니다.</a></td>
							<td><img src="images/helpdesk/tj_mark.png" alt="thejoeun" /></td>
							<td>2016-10-05</td>
							<td>4</td>
						</tr>
					
						<tr>
							<td>29,978</td>
							<td>신촌1관</td>
							<td class="tl"><a href="#">수강취소&nbsp;해야&nbsp;할거&nbsp;같아요&nbsp;(다른지점등록)</a></td>
							<td>은영미</td>
							<td>2016-10-04</td>
							<td>3</td>
						</tr>
					
						<tr>
							<td>29,977</td>
							<td>신촌1관</td>
							<td class="tl"><a href="#">안녕하세요.&nbsp;은영미님!&nbsp;답변드리겠습니다.</a></td>
							<td><img src="images/helpdesk/tj_mark.png" alt="thejoeun" /></td>
							<td>2016-10-07</td>
							<td>1</td>
						</tr>
					
						<tr>
							<td>29,976</td>
							<td>천호</td>
							<td class="tl"><a href="#">결제했는데&nbsp;내역조회가&nbsp;안됩니다.</a></td>
							<td>조경호</td>
							<td>2016-10-02</td>
							<td>2</td>
						</tr>
					
						<tr>
							<td>29,975</td>
							<td>천호</td>
							<td class="tl"><a href="#">안녕하세요.&nbsp;조경호님!&nbsp;답변드리겠습니다.</a></td>
							<td><img src="images/helpdesk/tj_mark.png" alt="thejoeun" /></td>
							<td>2016-10-04</td>
							<td>0</td>
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