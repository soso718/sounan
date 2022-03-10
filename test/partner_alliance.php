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
				<img src="images/academy/discount_title.png" alt="DISCOUNT ALLIANCE">
			</h2>
			<ul class="discount_tab">
				<li><a href="partner_list.php"><img src="images/academy/discount_tab1.png" alt="제휴사"></a></li>
				<li><a href="partner_campus.php"><img src="images/academy/discount_tab2.png" alt="제휴대학"></a></li>
				<li><a href="partner_discount.php"><img src="images/academy/discount_tab3.png" alt="수강할인업체"></a></li>
				<li class="on"><a href="partner_alliance.php"><img src="images/academy/discount_tab4.png" alt="사업제휴/제안하기"></a></li>
			</ul>
			
			<h3 class="title_sub">
				<img src="images/academy/discount_subtitle4.png" alt="사업제휴/제안하기">
			</h3>
			
			<p class="sub_name"><img src="images/academy/franchise_sub3.jpg" alt="사업제휴/제안하기"></p>
			
			<div class="counsel">
				<table>
						<colgroup>
							<col width="166" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th01.png" alt="회사명" /></th>
								<td>
									<input class="w240"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th02.png" alt="담당자명" /></th>
								<td>
									<input class="w240"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th03.png" alt="연락처" /></th>
								<td>
									<div class="styled-select">
										<select name="phone1" fieldName="핸드폰 식별번호" class="__required" style="width:80px">
											<option selected>010</option>
											<option>011</option>
											<option>016</option>
											<option>017</option>
											<option>018</option>
											<option>019</option>
										</select>
										<div class="select-button"><div class="small-arrow-down"></div></div>
									</div> - 
										<input type="text" class="w50"/> -
										<input type="text" class="w50"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th04.png" alt="이메일" /></th>
								<td>
									<input class="w240"/>
								</td>
							</tr>
							
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th05.png" alt="업종" /></th>
								
								<td>
									<div class="styled-select">
										<select name="counsel_startTime">
											<option selected>건축/인테리어</option>
											<option>마케팅/영업</option>
											<option>뷰티/패션/잡화/쇼핑</option>
											<option>여행/레저/생활건강</option>
											<option>식품</option>
											<option>인터넷/통신서비스</option>
											<option>광고/판촉/출판</option>
											<option>교육/학원</option>
											<option>병원/클리닉/한의원</option>
											<option>금융/보험</option>
											<option>기타</option>
										</select>
										<div class="select-button"><div class="small-arrow-down"></div></div>
									</div>		
							</tr>
							
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th06.png" alt="부서명" /></th>
								<td>
									<input class="w240"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th07.png" alt="제안종류" /></th>
								<td>
								<div class="counsel_list clear">
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select0" checked />
											<label for="counsel_select0">위탁교육</label>
										</div>
										
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select1"/>
											<label for="counsel_select1">컨텐츠제휴</label>
										</div>
										
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select3"/>
											<label for="counsel_select3">광고/홍보 사업제휴</label>
										</div>
										
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select4"/>
											<label for="counsel_select4">컴퓨터강의장 임대</label>
										</div>
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select5"/>
											<label for="counsel_select5">관련교육기관 공동마케팅</label>
										</div>
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select6"/>
											<label for="counsel_select6">기타</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th08.png" alt="제목" /></th>
								<td>
									<input type="text" class="w240"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th09.png" alt="제안내용" /></th>
								<td>
									<textarea class="p70"></textarea>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th10.png" alt="회사소개서첨부" /></th>
								<td>	
									<input type="text" class="p63"/>
									<div class="filebox">
										<label for="ex_file">찾아보기</label>
										<input type="file" id="ex_file">
									</div>													
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th11.png" alt="제안서첨부" /></th>
								<td>
									<input type="text" class="p63"/>
									<div class="filebox">
										<label for="ex_file">찾아보기</label>
										<input type="file" id="ex_file">
									</div>	
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/academy/coop_th12.gif" alt="스팸방지코드" /></th>
								<td>
									<input type="text" class="p63"/>
									<a href="#" class="btn_gray">코드변경</a>
								</td>
							</tr>
						</tbody>
					</table>
					
					<h4>
						<img src="images/helpdesk/helpdesk_con.jpg" alt="더조은아카데미 개인정보 보호정책">
					</h4>
					
					<div class="agree_box">
								<strong>1. 개인정보의 수집 목적</strong><br />
								- 더조은 패밀리 사이트 내 서비스 제공 계약의 성립 및 유지 종료를 위한 본인 식별 및 실명확인, 가입의사 확인, 회원에 대한 고지 사항 전달 등 <br />
								- 더조은 패밀리 사이트 내 서비스 제공을 위한 통합ID 제공, 카드발급, 포인트 적립 및 사용,포인트 정산, 고객센터 운영, 불량회원 부정이용 방지 및 비인가 사용방지, 이벤트 및 마케팅 기획관리, 서비스 개발을 위한 연구조사, 물품 등의 배송 등 <br />
								- 더조은 패밀리 사이트 내 서비스 관련 각종 이벤트 및 행사 관련 정보안내를 위한 전화, SMS, 이메일, DM 발송 등의 마케팅 활동 등 <br />
								- 당사 및 제휴사 상품서비스에 대한 제반 마케팅(대행포함) 활동 관련 전화, SMS, 이메일, DM 발송을 통한 마케팅, 판촉행사 및 이벤트, 사은행사 안내 등<br /><br />
								<strong>2. 수집하는 개인정보 항목</strong><br />
								[필수입력사항 ]<br />
								- 성명, 아이디, 비밀번호, 이메일주소, 주소, 우편물수령지, 전화번호(휴대폰번호 포함),이메일주소, 생일 등 <br />
								(i-PIN을 통한 신규가입의 경우 주민등록번호가 아닌 본인 확인 기관이 제공한 정보를 수집합니다.)<br />
								[선택입력항목]<br />
								- 이메일/SMS/전화/DM 수신동의 ,결혼 여부, 결혼기념일, 기타 기념일, 선호 브랜드 등 개인별 서비스 제공을 위해 필요한 항목 및 추가 입력 사항<br />
								[서비스 이용 또는 사업처리 과정에서 생성 수집되는 각종 거래 및 개인 성향 정보]<br />
								- 서비스이용기록, 접속로그, 쿠키, 접속IP정보, 결제기록, 이용정지기록 등 단, 이용자의 기본적 인권 침해의 우려가 있는 민감한 개인정보(인종 및 민족, 사상 및 신조, 출신지 및 본적지, 정치적 성향 및 범죄기록, 건강상태 및 성생활 등)는 수집하지 않습니다.<br /><br />
								<strong>3. 개인정보의 보유/이용기간 및 폐기</strong><br />
								당사(패밀리 사이트 내)는 수집된 회원의 개인정보는 수집 목적 또는 제공 받은 목적이 달성되면 지체없이 파기함을 원칙으로 합니다. 다만, 다음 각 호의 경우 일정기간 동안 예외적으로 수집한 회원정보의 전부 또는 일부를 보관할 수 있습니다.<br />
								- 고객요구사항 처리 및 A/S의 목적 : 수집한 회원정보를 회원탈퇴 후 30일간 보유 <br />
								- 당사가 지정한 쿠폰 서비스의 임의적인 악용을 방지 하기 위한 목적 : 수집한 회원정보 중 회원의 기념일 쿠폰 사용여부에 관한 정보를 회원 탈퇴 후 1년 간 보유 <br />
								- 회원 자격 상실의 경우 : 더조은 패밀리 사이트 내 부정 이용 및 타 회원의 추가적인 피해 방지를 위해 수집한 회원정보를 회원 자격 상실일로부터 2년간 보유 <br />
								- 기타 당사 및 제휴사가 필요에 의해 별도로 동의를 득한 경우 : 별도 동의를 받은 범위 (회원정보 및 보유 기간) 내에서 보유 <br /><br />
								상기 조항에도 불구하고 상법 및 '전자상거래 등에서 소비자보호에 관한 법률'등 관련 법령의 규정에 의하여 다음과 같이 일정기간 보유해야 할 필요가 있을 경우에는 관련 법령이 정한 기간 또는 다음 각 호의 기간 동안 회원정보를 보유할 수 있습니다.<br />
								- 계약 또는 청약철회 등에 관한 기록 : 5년 <br />
								- 대금결제 및 재화등의 공급에 관한 기록 : 5년 <br />
								- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년<br /><br />
								개인정보를 파기할 때에는 아래와 같이 재생할 수 없는 방법을 사용하여 이를 삭제합니다.<br />
								- 종이에 출력된 개인정보 : 분쇄기로 분쇄하거나 소각<br />
								- 전자적 파일 형태로 저장된 개인정보 : 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제
					</div>
					
					<p class="agree_t">
						<span class="agree_info">신청서를 보내시기 전에 반드시 개인정보 보호정책에 동의해 주세요.</span>
						
						<label class="agree_info2">
							<input type="checkbox"/>
							위의 ‘개인정보 수집 및 이용안내’에 동의합니다.
						</label>
					</p>
					
					<div class="join">
						<a href="#">
							<img src="images/helpdesk/helpdesk_submit.jpg" alt="등록">
						</a>
					</div>
				
			 </div> 
		</div>		
	</div>
<?php include ("common/include/footer.php"); ?>
</body>
</html>