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
				<li><a href="qna_list.php"><img src="images/helpdesk/helpdesk_tab3.jpg" alt="질문/답변"></a></li>
				<li class="on"><a href="faq_list.php"><img src="images/helpdesk/helpdesk_tab4.jpg" alt="자주하는질문"></a></li>
			</ul>	
			<h3 class="title_sub">
				<img src="images/helpdesk/helpdesk_question2.jpg" alt="자주하는 질문">
			</h3>

			<p class="sub_name"><img src="images/helpdesk/helpdesk_sub222.jpg" alt="질문유형을 선택해주세요"></p>
			
			<div class="tj_list clear">
				<div class="tj_all"><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list0" checked /><label for="qna_list0"><i></i>전체</label></div></div>
				<div class="tj_ul">
					<ul>
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list1" /><label for="qna_list1"><i></i>수강신청</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list2" /><label for="qna_list2"><i></i>학원이용</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list3" /><label for="qna_list3"><i></i>실업자국비지원</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list4"/><label for="qna_list4"><i></i>직장인환급</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list5"/><label for="qna_list5">동영상강의</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list6"/><label for="qna_list6">결제/환불취소</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list7" /><label for="qna_list7">취업지원센터</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list8"/><label for="qna_list8">더조은포인트</label></div></li>
					
						<li><div class="tmp-radio"><input type="radio" name="qna_list" id="qna_list9" /><label for="qna_list9">기타</label></div></li>										
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
				<table class="faq_tb">
					<colgroup>
						<col width="8%" />
						<col width="8%" />
						<col width="*" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col"><img src="images/helpdesk/helpdesk_table1.jpg" alt="NO" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table7.jpg" alt="구분" /></th>
							<th scope="col"><img src="images/helpdesk/helpdesk_table2.jpg" alt="제목" /></th>
						</tr>
					</thead>
					<tbody>
						<tr class="qu">
							<td>24</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">회원가입시 실명인증이 안될 경우에는 어떻게 해야 하나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">실명인증에 실패하는 경우는 다음의 두가지가 있습니다.<br />
							<br />
							1. 개명신청을 했을 경우<br />
							2. 서울신용평가정보에 등록되지 않은 고객정보일 경우<br />
							<br />
							<br />
							위와 같은 경우에는 서울신용평가정보에 등록을 하셔야 하며 온라인으로 하거나 관련 서류를 팩스를 보내주셔서 등록하실 수 있습니다.<br />
							<br />
							<a target="_blank" href="http://name.siren24.com/servlet/name_check_sstPop2_1"><img alt="" width="470" height="614" src="images/helpdesk/name_conform.jpg" /></a></td>
						</tr>
						<tr class="qu">
							<td>23</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">더조은컴퓨터아트학원 / TJEDU / TJACC(전산회계동영상강좌) 각각 회원가입을 해야 하나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">더조은컴퓨터아트학원 사이트에서 회원가입을 해주시면 TJEDU(동영상강의), TJACC(전산회계동영상강의)의 온라인 강의 사이트에서도 같은 회원정보로 서비스 이용이 가능하십니다.</td>
						</tr>
						<tr class="qu">
							<td>22</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">다른 이름으로 개명했는데, 가입된 정보의 이름은 어떻게 바꾸나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">개인정보 변경에서 이름변경을 하실 수 있습니다. 
							<br />
							단 신용평가기관에 개명한 이름이 등록되어 있어야 변경이 가능합니다.</td>
						</tr>
						<tr class="qu">
							<td>21</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">임시비밀번호가 메일로 오지 않아요.</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">임시비밀번호 발급 메일을 받지 못하신 경우<br />
							아래와 같은 이유로 인하여, 임시비밀번호 발급 메일을 받지 못하셨을 수 있습니다.<br />
							<br />
							1.고객님께서 회원가입 당시, 가입하는 아이디와 동일한 메일 주소를 지정해 놓지는 않으셨는지요?<br />
							임시비밀번호를 메일로 받도록 신청하신 경우<br />
							메일 주소가 더조은 아이디와 동일한 경우에는 발송이 되지 않습니다.<br />
							2. 고객님의 메일함이 가득차 있지는 않으시는지요?<br />
							메일함이 가득차 있으면, 임시비밀번호 발급 메일지 전달되지 않습니다.<br />
							메일함이 가득 차 있지는 않은지 확인해 주세요.<br />
							3. 스팸메일 차단을 위해 스팸메일 차단 설정을 하신 경우<br />
							임시비밀번호 발급 메일이 스팸메일로 분류될 수 있습니다.<br />
							고객님 메일함의 스팸편지함 또는 광고편지함을 확인해 주세요<br />
							4. 임시 비밀번호를 발급받기로 하신 이메일 주소를 잘못 기재 하시지 않았는지, 다시 한번 확인해 주세요.<br />
							회원가입 당시 등록하신 메일 주소 혹은 고객센터를 통해 임시비밀번호 발급을 요청하실 때 작성하신 메일주소로 임시 비밀번호가 발송 됩니다.<br />
							※ 구글,핫메일,엠파스,aol.com의 경우 메일 수신이 어렵습니다.<br />
							5. 발송요청하신 메일 계정을 제공하는 회사의 수신 상태가 원활하지 않아, 임시 비밀번호 발급 메일이 즉시 전달되지 않았을 수 있습니다.<br />
							<br />
							위의 내용을 다시 한번 확인 요청 드리며, 그래도 해결이 되지 않는다면<br />
							고객센터 02)595-4076, 4079 로 임시 비밀번호 발급을 요청해 주시기 바랍니다.</td>
						</tr>
						<tr class="qu">
							<td>20</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">아이디와 패스워드를 잊어버렸어요. 알려주세요.</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">아이디/패스워드 찾기에서 아이디는 간략한 정보 입력을 통하여 바로 확인하실 수 있으며 패스워드는 회원가입시 [YES]에 표기해주신 SMS 수신/메일링리스트를 통하여 문자와 메일로 받아보실 수 있습니다.<br />
							SMS 수신/메일링리스트를 [YES]에 표기해주셨는데도 문자나 메일이 오지 않을 때에는 전화 02)595-4076, 4079로 문의 주시기 바랍니다.</td>
						</tr>
						<tr class="qu">
							<td>19</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">14세 미만 회원의 경우 사이트 이용상 제약은 없나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">사이트 이용에 별도의 제약이 없습니다.<br />
							14세 미만 회원은 회원 가입 시에만 부모(혹은 법정 대리인)의 기본정보를 입력하셔야 하며 그 외의 회원가입 프로세스는 일반회원과 동일합니다.</td>
						</tr>
						<tr class="qu">
							<td>18</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">아이핀으로 가입한 아이디의 비밀번호를 분실했을 때, 어떻게 찾을 수 있나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">비밀번호란, 인터넷 서비스에 접근할 때 '허가된 사용자'임을 확인하는 보안수단입니다.<br />
							더조은컴퓨터아트학원에서는 고객님의 계정을 보호하기 위하여, 비밀번호를 찾고자 하는 분의 ID 본인여부를 확인한 후 임시로 비밀번호를 발송해 드리고 있습니다.<br />
							분실하신 원래 비밀번호는 암호화된 정보이므로 관리자나 시스템에서도 확인이 불가능합다.<br />
							따라서 분실하신 비밀번호를 알려드리는 것은 불가능하며 임시 비밀번호를 발송해드리는 것만 가능합니다.<br />
							더조은 첫 화면의 우측 상단에 위치한 로그인 박스 안의 [비밀번호 찾기]를 클릭하거나, 아래 비밀번호 찾기 메뉴에서 아이핀으로 고객님의 본인여부를 확인하신 후, 비밀번호를 찾으실 수 있습니다<br />
							1단계. 아이핀(I-Pin) 인증 칸에 아이디를 입력하신 후 &lsquo;아이핀 인증&rsquo; 버튼을 클릭해주세요.<br />
							2단계. 아이핀 인증이 완료되면 아래의 방법을 통해 비밀번호 재발급이 가능합니다 <br />
							임시로 발송된 비밀번호는 새로운 비밀번호로 변경하여 이용해주세요./br&gt; 아이핀 회원의 경우, 고객님의 개인정보를 보관하고 있지 않기 때문에 웹에서 아이핀인증을 통해서만 비밀번호를 찾으실 수 있습니다.<br />
							만약, 아이핀 아이디와 비밀번호를 잊으셨다면, 가입하신 아이핀 인증기관에 확인하여 주시길 부탁 드립니다.</td>
						</tr>
						<tr class="qu">
							<td>17</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">아이핀으로 가입한 아이디를 분실했을 때, 어떻게 찾을 수 있나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">더조은컴퓨터아트학원 첫 화면의 우측 상단에 위치한 로그인 박스 안의 [아이디 찾기]를 클릭하거나,아래 비밀번호 찾기 메뉴에서 아이핀으로 고객님의 본인여부를 확인하신 후, 비밀번호를 찾으실 수 있습니다.<br />
							1단계. 아이핀(I-Pin) 인증 칸에 &lsquo;아이핀 인증&rsquo; 버튼을 클릭해주세요.<br />
							2단계. 아이핀 인증 팝업창이 뜨면 아이핀 인증을 진행해 주세요.<br />
							3단계. 아이디의 앞부분을 확인하실 수 있습니다.<br />
							전체 아이디 확인을 원하시는 아이디를 선택하신 후 [아이디 뒷자리 확인하기] 를 클릭해주세요.<br />
							4단계. 인증방법을 선택한 후 인증이 완료되면, 전체 아이디를 확인하실 수 있습니다. 아이핀 회원의 경우, 고객님의 개인정보를 보관하고 있지 않기 때문에 웹에서 아이핀인증을 통해서만 비밀번호를 찾으실 수 있습니다<br />
							만약, 아이핀 아이디와 비밀번호를 잊으셨다면, 가입하신 아이핀 인증기관에 확인하여 주시길 부탁드립니다.</td>
						</tr>
						<tr class="qu">
							<td>16</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">아이핀으로 가입시 본인확인을 의해 공인인증서 인증을 하려는데 주민등록번호를 받는 이유가 무엇인가요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">휴대폰/공인인증서를 통한 본인 인증을 할 때 주민등록번호를 요청하는 것은, 휴대폰 통신사와 공인인증서 발급기관에 일치 여부를 판단하기 위함입니다.<br />
							이 과정에서 이용된 주민등록번호는 더조은컴퓨터아트학원에 저장되지 않습니다.</td>
						</tr>
						<tr class="qu">
							<td>15</td>
							<td>회원정보</td>
							<td class="tl"><a href="javascript:;">아이핀으로 가입하면 탈퇴도 아이핀 인증을 통해서 해야 하나요?</a></td>
						</tr>
						<tr class="an">
							<td></td>
							<td></td>
							<td class="tl">회원탈퇴를 위해서는 반드시 본인확인이 필요한데요.<br />
							아이핀으로 가입하셨다면, 더조은컴퓨터아트학원에 회원정보가 저장되어 있지 않기 때문에, 아이핀 인증을 통해서만 본인확인을 할 수 있습니다.<br />
							이에, 아이핀으로 가입한 아이디를 탈퇴할 때에는 아이핀으로만 인증할 수 있습니다.</td>
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