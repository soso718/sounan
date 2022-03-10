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
				<li class="on"><a href="counsel.php"><img src="images/helpdesk/helpdesk_tab2.jpg" alt="온라인상담신청"></a></li>
				<li><a href="qna_list.php"><img src="images/helpdesk/helpdesk_tab3.jpg" alt="질문/답변"></a></li>
				<li><a href="faq_list.php"><img src="images/helpdesk/helpdesk_tab4.jpg" alt="자주하는질문"></a></li>
			</ul>	
			<h3 class="title_sub">
				<img src="images/helpdesk/helpdesk_online.jpg" alt="온라인상담신청">
			</h3>

			<p class="sub_name"><img src="images/helpdesk/helpdesk_sub22.jpg" alt="상담내용을 선택해주세요"></p>
						
			<div class="counsel">
				<table>
						<colgroup>
							<col width="166" />
							<col width="*" />
						</colgroup>
						<tbody>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th01.gif" alt="상담구분선택" /></th>
								<td>
									<div class="counsel_list clear">
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select0" checked />
											<label for="counsel_select0">수강료조회</label>
										</div>
										
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select1"/>
											<label for="counsel_select1">온라인상담</label>
										</div>
										
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select3"/>
											<label for="counsel_select3">직장인국비지원</label>
										</div>
										
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select4"/>
											<label for="counsel_select4">실업자국비지원</label>
										</div>
										<div class="tmp-radio">
											<input type="radio" name="counsel_select" id="counsel_select5"/>
											<label for="counsel_select5">할인율조회</label>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th02.gif" alt="캠퍼스" /></th>
								<td>
									<div class="styled-select w130">
										<select>
											<option selected>캠퍼스 선택</option>
											<option>강남캠퍼스(본원)</option>
											<option>종로캠퍼스</option>
											<option>신촌1관 캠퍼스</option>
											<option>신촌2관 캠퍼스</option>
											<option>천호캠퍼스</option>
											<option>구로캠퍼스</option>
											<option>화곡캠퍼스</option>
											<option>인천캠퍼스</option>
											<option>부천캠퍼스</option>
											<option>수원캠퍼스</option>
											<option>일산캠퍼스</option>
											<option>광주캠퍼스</option>
											<option>울산캠퍼스</option>
											<option>부산(서면)</option>
											<option>부산(대연)캠퍼스</option>
										</select>
										<div class="select-button">
											<div class="small-arrow-down"></div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th03.gif" alt="상담과목" /></th>
								<td>
									<input class="w240"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th04.gif" alt="상담유형" /></th>
								<td>
									<div class="tmp-radio">
										<input type="radio" title="전화상담" name="counsel_type" id="counsel_type0" checked />
										<label for="counsel_type0">전화상담</label>
									</div>
									<div class="tmp-radio">
										<input type="radio" name="counsel_type" title="방문상담예약" id="counsel_type1" />
										<label for="counsel_type1">방문상담예약</label>
									</div>
								</td>
							</tr>
							
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th05.gif" alt="상담(방문)가능시간" /></th>
								
								<td>
									<input type="text" class="w80 tt"/>
									<a href="#"><img src="images/helpdesk/btn_date.png" class="tt" alt="달력" /></a>
									<div class="styled-select w65">
										<select name="counsel_startTime">
											<option selected>09시</option>
											<option>10시</option>
											<option>11시</option>
											<option>12시</option>
											<option>13시</option>
											<option>14시</option>
											<option>15시</option>
											<option>16시</option>
											<option>17시</option>
											<option>18시</option>
											<option>19시</option>
											<option>20시</option>
											<option>21시</option>
											<option>22시</option>
											<option>23시</option>
										</select>
										<div class="select-button"><div class="small-arrow-down"></div></div>
									</div>
									
									<div class="styled-select w65 tt">
										<select name="counsel_startminute">
											<option selected>00분</option>
											<option>10분</option>
											<option>20분</option>
											<option>30분</option>
											<option>40분</option>
											<option>50분</option>
										</select>
										<div class="select-button"><div class="small-arrow-down"></div></div>
									</div>
									부터
									<div class="styled-select w65 tt">
										<select name="counsel_endtime">
											<option>09시</option>
											<option>10시</option>
											<option>11시</option>
											<option>12시</option>
											<option>13시</option>
											<option>14시</option>
											<option>15시</option>
											<option>16시</option>
											<option>17시</option>
											<option>18시</option>
											<option>19시</option>
											<option>20시</option>
											<option>21시</option>
											<option>22시</option>
											<option selected>23시</option>
										</select>
										<div class="select-button"><div class="small-arrow-down"></div></div>
									</div>
									
								<div class="styled-select w65 tt">
									<select name="counsel_endminute">
										<option>00분</option>
										<option>10분</option>
										<option>20분</option>
										<option>30분</option>
										<option>40분</option>
										<option selected>50분</option>
									</select> 
									<div class="select-button"><div class="small-arrow-down"></div></div>
								</div>까지
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th06.gif" alt="이름" /></th>
								<td>
									<input class="w240"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th07.gif" alt="핸드폰" /></th>
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
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th08.gif" alt="이메일" /></th>
								<td>
									<input type="text" class="w360"/>
								</td>
							</tr>
							<tr>
								<th scope="row"><img src="images/helpdesk/help_th09.gif" alt="메세지"/></th>
								<td>
									<textarea name="content"></textarea>
								</td>
							</tr>
							<tr>
								<th scope="row"><span class="red">*</span> <img src="images/helpdesk/help_th10.gif" alt="스팸방지코드" /></th>
								<td>
									<input type="text"class="w80"/> 
									<span class="scode"></span>
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