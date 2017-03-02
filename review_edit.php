<?php

	include "conn.php";
	$no = $_GET['no'];

	# 데이터들 호출하기 :
	#	현재 클릭한 no와 같은 데이터 값들 호출하기
	$result = mysql_query("SELECT *FROM review WHERE no='$no' ");
	$row = mysql_fetch_array( $result );
?>

<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta  charset="utf-8"/>
	<title> CLAIRE PENSION </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes"/>
	<meta name="robots" content="ALL"/>
	<meta name="keywords" content="여행,가족,커플,모임,허니문,신혼여행,바베큐,조식,이벤트,프로포즈,바베큐장,개별바베큐,바베큐,빔프로젝트,홈씨어터,보드게임,무선인터넷,자전거,산책로,주차장,카페,수영장,온수수영장,사계절온수수영장루메네스,데크,픽업서비스,커플샤워,닌텐도wii,와이파이,wifi,스파,spa,계곡,앨리시안강촌,남이섬,아침고요수목원,쁘띠프랑스,명지산,명지계곡,용추계곡,청평호수,참숯가마찜질,수상레져,수상스키,번지점프,모터보트,바나나보트,서바이벌,하이킹,ATV,래프팅"/>
	<meta name ="description" content="경기도 가평군 위치, 커플, 가족, 복층펜션, 제트스파, 닌텐도, 바베큐시설, 남이섬 등 주변관광지"/>
	<meta name ="author" content ="redbeanmilk"/>
	<meta name ="content-language" content="kr"/>
	<link rel="shortcut icon" href="img/short_cut.ico"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/header_footer.css"/>
  <link rel="stylesheet" type="text/css" href="css/board_write.css"/>
  <link rel="stylesheet" type="text/css" href="css/media/board_write.css"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
  <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
  <style type="text/css">

  </style>
  <script type="text/javascript">
  $(function(){
    // visual 텍스트 애니메이션 효과
      $(".slide_area_title").hide().fadeIn(1000);

    //visual 이미지 애니메이션
      $(".slide_img").scale(1.15).animate({scale:"1"},1000);
    });
  </script>
 </head>

 <body>
	<div id="wrap">
		<div id="headerWrap">
			<div id="top_headerWrap">
				<form class="login_info" action="login_control.php" method="post">
					<fieldset>
						<legend class="blind">로그인 영역</legend>
            <h2>LOGIN</h2>
            <div class="input_user">
							<p class="input_userid">
								<input id="userid" type="text" name="userid" required placeholder="ID 입력"/>
							</p>
							<p class="input_userpw">
								<input id="userpw" type="password" name="userpw" required placeholder="Password 입력" autocomplete=off />
							</p>
              <p class="input_btn_login">
                <input id="btn_login" type="submit" name="btn_login" value="LOGIN"/>
              </p>
						</div>
            <div class="input_etc">
              <ul>
                <li>
                  <a href="form.html" title="회원가입 페이지로 이동">회원가입</a>
                </li>
                <li>
                  <a href="#none" title="아이디 찾기 페이지로 이동" onclick="alert('죄송합니다. 페이지 준비 중입니다.'); return false;">아이디 찾기</a>
                </li>
                <li>
                  <a href="#none" title="비밀번호 찾기 페이지로 이동" onclick="alert('죄송합니다. 페이지 준비 중입니다.'); return false;">비밀번호 찾기</a>
                </li>
              </ul>
            </div>
					</fieldset>
				</form>
			</div>
			<div id="bottom_headerWrap">
        <div class="nav"><!--로그인 관련 gnb-->
          <ul>
            <li class="login">
              <a class="login_btn" href="#none" title="login page 열기">log in</a>
            </li>
            <li class="joinus">
              <a href="form.html" title="join us 열기">join us</a>
            </li>
          </ul>
        </div>
				<div id="header">
					<h2 class="blind">HEADER</h2>
					<h1>
						<a href="index.php" title="메인 홈페이지로 이동">
							<img src="img/logo_claire.png" alt="로고"/>
						</a>
					</h1>
          <div class="m_header_btn">
            <p class="m_menu_btn">
              <a href="#none" title="모바일 메뉴 버튼">
                <img src="img/menu_black.png" alt="모바일 메뉴 버튼"/>
              </a>
            </p>
            <p class="m_reser_btn">
              <a href="reservation_step1.html" title="모바일 실시간 예약 버튼">
                <img src="img/reser_block.png" alt=" 모바일 메뉴 버튼"/>
              </a>
            </p>
          </div>
          <div class="m_header">
            <div class="m_top">
  						<p class="m_btn m_menu_close_btn">
  							<a href="#none" title="메뉴">
                  <img src="img/cross_black.png" alt="모바일 메뉴 닫기 버튼"/>
  							</a>
  						</p>
            </div>
            <div class="m_bottom">
              <ul class="user_info">
                <li class="m_login">
                  <a href="m_login.php" title="모바일 로그인 페이지로 이동">
                    login
                  </a>
                </li>
                <li class="m_join">
                  <a href="form.html" title="모바일 회원가입 페이지로 이동">
                    join us
                  </a>
                </li>
              </ul>
            </div>
            <div class="m_gnb">
              <ul class="m_gnb_list">
  							<li class="m_sub_gnb m_gnb_room">
  								<a href="#none" title="room info 페이지로 이동">room info<span>∧</span></a>
  								<ul class="m_sub_gnb_list">
  									<li><a href="room00_alie.html" title="ALIE 방 페이지로 이동">ALIE</a></li>
  									<li><a href="room01_amant.html" title="AMANT 방 페이지로 이동">AMANT</a></li>
  									<li><a href="room02_mister.html" title="MISTER 방 페이지로 이동">MISTER</a></li>
  									<li><a href="room03_hobby.html" title="HOBBY 방 페이지로 이동">HOBBY</a></li>
  									<li><a href="room04_blancnoir.html" title="BLANCNOIR 방 페이지로 이동">BLANCNOIR</a></li>
  									<li><a href="room05_mienne.html" title="MIENNE 방 페이지로 이동">MIENNE</a></li>
  									<li><a href="room06_missa.html" title="MISSA 방 페이지로 이동">MISSA</a></li>
  									<li><a href="room07_bonjour.html" title="BONJOUR 방 페이지로 이동">BONJOUR</a></li>
  								</ul>
  							</li>
  							<li class="m_sub_gnb m_gnb_special">
  								<a href="#none" title="special 페이지로 이동">special<span>∧</span></a>
  								<ul class="m_sub_gnb_list">
  									<li><a href="special00_pool.html" title="SWIMMING POOL 페이지로 이동">POOL</a></li>
  									<li><a href="special01_zet.html" title="ZET SPA  페이지로 이동">ZET SPA</a></li>
  									<li><a href="special02_barbecue.html" title="BARBECUE  페이지로 이동">BARBECUE</a></li>
  									<li><a href="special03_cafe.html" title="CAFFE  페이지로 이동">CAFFE</a></li>
  									<li><a href="special04_beam.html" title="BEAM PROJECT  페이지로 이동">BEAM PROJECT</a></li>
  									<li><a href="special05_game.html" title="GAME CENTER  페이지로 이동">GAME CENTER</a></li>
  									<li><a href="special06_lounge.html" title="LOUNGE  페이지로 이동">LOUNGE</a></li>
  									<li><a href="special07_event.html" title="EVENT  페이지로 이동">EVENT</a></li>
  									<li><a href="special08_kids.html" title="KIDS  페이지로 이동">KIDS</a></li>
  									<li><a href="special09_service.html" title="SERVICE  페이지로 이동">SERVICE</a></li>
  								</ul>
  							</li>
                <li class="m_sub_gnb m_gnb_reservation">
  								<a href="#none" title="location 페이지로 이동">reservation<span>∧</span></a>
                  <ul class="m_sub_gnb_list">
  									<li><a href="reservation_info.html" title="예약 안내 페이지로 이동">예약 안내</a></li>
  									<li><a href="reservation_step1.html" title="실시간 예약 페이지로 이동">실시간 예약</a></li>
  									<li><a href="#none" title="예약 확인 페이지로 이동" onclick="alert('죄송합니다. 페이지 준비 중입니다.'); return false;">예약 확인</a></li>
  								</ul>
  							</li>
  							<li>
  								<a href="tour.html" title="guide tour 페이지로 이동">guide tour</a>
  							</li>
  							<li class="m_sub_gnb m_gnb_contact">
  								<a href="#none" title="contact us 페이지로 이동">contact us<span>∧</span></a>
                  <ul class="m_sub_gnb_list">
  									<li><a href="notice_list.php" title="공지사항 페이지로 이동">공지사항</a></li>
  									<li><a href="qna_list.php" title="QnA  페이지로 이동">QnA</a></li>
  									<li><a href="review_list.php" title="여행후기 페이지로 이동">여행후기</a></li>
  								</ul>
  							</li>
  						</ul>
            </div>
          </div>
					<div class="gnb">
						<ul class="gnb_list">
							<li class="sub_gnb gnb_room">
								<a href="#none" title="room info 페이지로 이동">room info<span>∧</span></a>
								<ul class="sub_gnb_list">
                  <li><a href="room00_alie.html" title="ALIE 방 페이지로 이동">ALIE</a></li>
                  <li><a href="room01_amant.html" title="AMANT 방 페이지로 이동">AMANT</a></li>
                  <li><a href="room02_mister.html" title="MISTER 방 페이지로 이동">MISTER</a></li>
                  <li><a href="room03_hobby.html" title="HOBBY 방 페이지로 이동">HOBBY</a></li>
                  <li><a href="room04_blancnoir.html" title="BLANCNOIR 방 페이지로 이동">BLANCNOIR</a></li>
                  <li><a href="room05_mienne.html" title="MIENNE 방 페이지로 이동">MIENNE</a></li>
                  <li><a href="room06_missa.html" title="MISSA 방 페이지로 이동">MISSA</a></li>
                  <li><a href="room07_bonjour.html" title="BONJOUR 방 페이지로 이동">BONJOUR</a></li>
								</ul>
							</li>
							<li class="sub_gnb gnb_special">
								<a href="#none" title="special 페이지로 이동">special<span>∧</span></a>
								<ul class="sub_gnb_list">
                  <li><a href="special00_pool.html" title="SWIMMING POOL 페이지로 이동">POOL</a></li>
                  <li><a href="special01_zet.html" title="ZET SPA  페이지로 이동">ZET SPA</a></li>
                  <li><a href="special02_barbecue.html" title="BARBECUE  페이지로 이동">BARBECUE</a></li>
                  <li><a href="special03_cafe.html" title="CAFFE  페이지로 이동">CAFFE</a></li>
                  <li><a href="special04_beam.html" title="BEAM PROJECT  페이지로 이동">BEAM PROJECT</a></li>
                  <li><a href="special05_game.html" title="GAME CENTER  페이지로 이동">GAME CENTER</a></li>
                  <li><a href="special06_lounge.html" title="LOUNGE  페이지로 이동">LOUNGE</a></li>
                  <li><a href="special07_event.html" title="EVENT  페이지로 이동">EVENT</a></li>
                  <li><a href="special08_kids.html" title="KIDS  페이지로 이동">KIDS</a></li>
                  <li><a href="special09_service.html" title="SERVICE  페이지로 이동">SERVICE</a></li>
								</ul>
							</li>
              <li class="sub_gnb gnb_reservation">
								<a href="#none" title="reservation 페이지로 이동">reservation<span>∧</span></a>
                <ul class="sub_gnb_list">
                  <li><a href="reservation_info.html" title="예약 안내 페이지로 이동">예약 안내</a></li>
                  <li><a href="reservation_step1.html" title="실시간 예약 페이지로 이동">실시간 예약</a></li>
                  <li><a href="#none" title="예약 확인 페이지로 이동" onclick="alert('죄송합니다. 페이지 준비 중입니다.'); return false;">예약 확인</a></li>
                </ul>
							</li>
							<li>
								<a href="tour.html" title="guide tour 페이지로 이동">guide tour</a>
							</li>
							<li class="sub_gnb gnb_contact">
								<a href="#none" title="contact us 페이지로 이동">contact us<span>∧</span></a>
                <ul class="sub_gnb_list">
                  <li><a href="notice_list.php" title="공지사항 페이지로 이동">공지사항</a></li>
                  <li><a href="qna_list.php" title="QnA  페이지로 이동">QnA</a></li>
                  <li><a href="review_list.php" title="여행후기 페이지로 이동">여행후기</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="contentWrap">
		  <div class="slide_area">
        <div class="slide_img">
        </div>
				<span class="dark"></span>
					<div class="slide_area_title">
						<hr/>
						<h2>REVIEW</h2>
					</div>
				</div>
		  <form class="board_write" action="review_edit_control.php?no=<?=$row['no']?>" method="POST">
				<legend class="blind">게시판 글 작성</legend>
				<p class="first">
					<label for="title">제목</label><input type="text" id="title" name="title"  value="<?=$row['title']?>"/>
				</p>
				<p>
					<label for="user">작성자</label><input type="text" id="user" name="user" value="<?=$row['name']?>"/>
				</p>
        <p>
          <label for="userpw">비밀번호</label><input type="password" id="userpw" name="userpw" value="<?=$row['pass']?>" readonly/>
        </p>
        <p>
					<label for="email">이메일</label><input type="email" id="email" name="email" value="<?=$row['email']?>"/>
				</p>
				<p class="text_area">
				<label for="text">내용</label>
					<textarea name="text" id="text">
					  <?=$row['content']?>
					</textarea>
				</p>
			  <div class="btn_group">
          <input class="button" type="submit" value="저장"/>
  				<input class="button" type="reset" value="다시쓰기"/>
  				<a href="review_list.php" title="목록"><input class="button" type="button" value="목록"/></a>
			  </div>
		  </form>
		</div>
		<div id="footerWrap">
      <h2  class="blind">푸터 영역</h2>
      <div class="footer_top">
        <div class="footer_top_area">
          <ul class="footer_gnb">
            <li>
              <a href="about.html" title="about 페이지로 이동">
              about
              </a>
            </li>
            <li>
              <a href="privacy.html" title="개인정보·수집 이용 페이지로 이동">
                개인정보·수집 이용
              </a>
            </li>
            <li>
              <a href="policy.html" title="이용 약관 페이지로 이동">
                이용약관
              </a>
            </li>
            <li>
              <a href="location.html" title="location 페이지로 이동">
                location
              </a>
            </li>
          </ul>
          <p class="footer_logo">
            <a href="index.php" title="메인 페이지로 이동">
              <img src="img/logo_footer_white.png" alt="footer logo"/>
            </a>
          </p>

        </div>
      </div>
      <div class="footer_bottom">
          <div class="footer_bottom_area">
          <div class="footer_info1">
            <ul class="footer_info">
              <li class="address_area">
                <dl>
                  <dt>주소</dt>
                  <dd>
                    <address>경기도 가평군 북면 백둔리 455-18번지</address>
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>계좌번호</dt>
                  <dd>농협 352-0275-6308-13 예금주 정보경</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>사업자 번호</dt>
                  <dd>105-12-99908</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>통신판매 신고번호</dt>
                  <dd>제2013-경기가평-51호</dd>
                </dl>
              </li>
            </ul>
            <p class="copyright">
              Copyright 2017 YSH&copy; all rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
    <p class="wrap_dark">
    </p>
	</div>
 </body>
</html>
