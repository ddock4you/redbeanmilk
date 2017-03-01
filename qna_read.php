<?php

	include "conn.php";
	$no = $_GET['no'];

	# 데이터들 호출하기 :
	#	현재 클릭한 no와 같은 데이터 값들 호출하기
	$result = mysql_query("SELECT *FROM qna WHERE no='$no' ");
	$row = mysql_fetch_array( $result );
?>

<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta  charset="utf-8"/>
  <title> CLAIRE PENSION </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="css/board_write.css"/>
  <link rel="stylesheet" type="text/css" href="css/media/board_write.css"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
  <!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css"/>
  <![endif]-->
  <!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie.css"/>
  <![endif]-->
  <!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css"/>
  <![endif]-->
  <!--[if IE 10]>
		<link rel="stylesheet" type="text/css" href="css/ie.css"/>
  <![endif]-->
  <style type="text/css">

  </style>
  <script type="text/javascript">
  $(function(){
    //Sub_gnb 영역
  	$(".sub_gnb ul").hide();

  	$(".sub_gnb").bind("click mouseover focusin",function(){
  		$(this).children("ul").stop().slideDown(500);
  	}).bind("mouseout focusout",function(){
  		$(this).children("ul").stop().slideUp(500);
  	});

    //로그인 페이지 on/off
      $("#top_headerWrap").hide();
      $(".login a").bind("click focusin", function(){
        $("#top_headerWrap").slideDown(500);
      }).focusout(function(){
        $("#top_headerWrap").slideUp(500);
      });

      $(".login a").siblings().click(function(){
        $("#top_headerWrap").slideUp(500);
      });

    // visual 텍스트 애니메이션 효과
      $(".slide_area_title").hide().fadeIn(1000);

    //visual 이미지 애니메이션
      $(".slide_img").scale(1.15).animate({scale:"1"},1000);
    });
  </script>
  <style type="text/css">
    .board_write input, textarea{border:none;}
  </style>
 </head>

 <body>
	<div id="wrap">
    <div id="headerWrap">
			<div id="top_headerWrap">
				<form class="login_info" action="#" method="post">
					<fieldset>
						<legend class="blind">로그인 영역</legend>
            <h2>LOGIN</h2>
            <div class="input_user">
							<p class="input_userid">
								<input id="userid" type="text" name="userid" required placeholder="ID 입력"/>
							</p>
							<p class="input_userpw">
								<input id="userpw" type="password" name="userpw" required placeholder="Password 입력" autocomplete=off;/>
							</p>
              <p class="input_btn_login">
                <input id="btn_login" type="button" name="btn_login" value="login"/>
              </p>
						</div>
            <div class="input_etc">
              <ul>
                <li>
                  <a href="#none" title="회원가입 페이지로 이동">회원가입</a>
                </li>
                <li>
                  <a href="#none" title="아이디 찾기 페이지로 이동">아이디 찾기</a>
                </li>
                <li>
                  <a href="#none" title="비밀번호 찾기 페이지로 이동">비밀번호 찾기</a>
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
              <a href="#none" title="login page 열기">log in</a>
            </li>
            <!--<li class="welcome">
              <a href="#none" title="welcome">윤승현 님 환영합니다!</a>
            </li>
            <li class="logout">
              <a href="#none" title="log out">log out</a>
            </li>
            <li class="mypage">
              <a href="#none" title="my page">my page</a>
            </li>-->
            <li class="joinus">
              <a href="#none" title="join us 열기">join us</a>
            </li>
            <li class="fast_event">
              <a href="#none" title="log out">
              <img src="img/icon_event.png" alt="이벤트 이미지"/>
                event</a>
            </li>
          </ul>
        </div>
				<div id="header">
					<h2 class="blind">HEADER</h2>
					<h1>
						<a href="#nome" title="메인 홈페이지로 이동">
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
              <a href="m_reser_btn" title="모바일 실시간 예약 버튼">
                <img src="img/menu_black.png" alt=" 모바일 메뉴 버튼"/>
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
              <p class="m_logo">
                <img src="img/logo_footer_white.png" alt="로고 이미지"/>
              </p>
            </div>
            <div class="m_bottom">
              <ul class="user_info">
                <li class="m_login">
                  <a href="#none" title="모바일 로그인 페이지로 이동">
                    login
                  </a>
                </li>
                <li class="m_join">
                  <a href="#none" title="모바일 회원가입 페이지로 이동">
                    join us
                  </a>
                </li>
              </ul>
            </div>
              <!--mobile reservation btn-->
    					<!--<div class="m_btn m_reser_btn">
    						<p>
    							<a href="#none" title="reservation 페이지로 이동">

    							</a>
    						</p>
    					</div>-->
              <!--mobile login btn-->
              <!--<div class="m_btn m_login_btn">
    						<p>
    							<a href="#none" title="reservation 페이지로 이동">

    							</a>
    						</p>
    					</div>
            -->
            <div class="m_gnb">
              <ul class="m_gnb_list">
  							<li class="m_sub_gnb m_gnb_room">
  								<a href="#none" title="room info 페이지로 이동">room info<span>∧</span></a>
  								<ul class="m_sub_gnb_list">
  									<li><a href="#none" title="ALIE 방 페이지로 이동">ALIE</a></li>
  									<li><a href="#none" title="AMANT 방 페이지로 이동">AMANT</a></li>
  									<li><a href="#none" title="MISTER 방 페이지로 이동">MISTER</a></li>
  									<li><a href="#none" title="HOBBY 방 페이지로 이동">HOBBY</a></li>
  									<li><a href="#none" title="BLANCNOIR 방 페이지로 이동">BLANCNOIR</a></li>
  									<li><a href="#none" title="MIENNE 방 페이지로 이동">MIENNE</a></li>
  									<li><a href="#none" title="MISSA 방 페이지로 이동">MISSA</a></li>
  									<li><a href="#none" title="BONJOUR 방 페이지로 이동">BONJOUR</a></li>
  								</ul>
  							</li>
  							<li class="m_sub_gnb m_gnb_special">
  								<a href="#none" title="special 페이지로 이동">special<span>∧</span></a>
  								<ul class="m_sub_gnb_list">
  									<li><a href="#none" title="SWIMMING POOL 페이지로 이동">POOL</a></li>
  									<li><a href="#none" title="ZET SPA  페이지로 이동">ZET SPA</a></li>
  									<li><a href="#none" title="BARBECUE  페이지로 이동">BARBECUE</a></li>
  									<li><a href="#none" title="CAFFE  페이지로 이동">CAFFE</a></li>
  									<li><a href="#none" title="BEAM PROJECT  페이지로 이동">BEAM PROJECT</a></li>
  									<li><a href="#none" title="GAME CENTER  페이지로 이동">GAME CENTER</a></li>
  									<li><a href="#none" title="LOUNGE  페이지로 이동">LOUNGE</a></li>
  									<li><a href="#none" title="EVENT  페이지로 이동">EVENT</a></li>
  									<li><a href="#none" title="KIDS  페이지로 이동">KIDS</a></li>
  									<li><a href="#none" title="SERVICE  페이지로 이동">SERVICE</a></li>
  								</ul>
  							</li>
                <li class="m_reservation_gnb">
  								<a href="#none" title="location 페이지로 이동">reservation</a>
  							</li>
  							<li>
  								<a href="tour.html" title="guide tour 페이지로 이동">guide tour</a>
  							</li>
  							<li class="m_sub_gnb m_gnb_contact">
  								<a href="#none" title="contact us 페이지로 이동">contact us<span>∧</span></a>
                  <ul class="m_sub_gnb_list">
  									<li><a href="#none" title="공지사항 페이지로 이동">공지사항</a></li>
  									<li><a href="#none" title="QnA  페이지로 이동">QnA</a></li>
  									<li><a href="#none" title="여행후기 페이지로 이동">여행후기</a></li>
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
									<li><a href="#none" title="ALIE 방 페이지로 이동">ALIE</a></li>
									<li><a href="#none" title="AMANT 방 페이지로 이동">AMANT</a></li>
									<li><a href="#none" title="MISTER 방 페이지로 이동">MISTER</a></li>
									<li><a href="#none" title="HOBBY 방 페이지로 이동">HOBBY</a></li>
									<li><a href="#none" title="BLANCNOIR 방 페이지로 이동">BLANCNOIR</a></li>
									<li><a href="#none" title="MIENNE 방 페이지로 이동">MIENNE</a></li>
									<li><a href="#none" title="MISSA 방 페이지로 이동">MISSA</a></li>
									<li><a href="#none" title="BONJOUR 방 페이지로 이동">BONJOUR</a></li>
								</ul>
							</li>
							<li class="sub_gnb gnb_special">
								<a href="#none" title="special 페이지로 이동">special<span>∧</span></a>
								<ul class="sub_gnb_list">
									<li><a href="#none" title="SWIMMING POOL 페이지로 이동">POOL</a></li>
									<li><a href="#none" title="ZET SPA  페이지로 이동">ZET SPA</a></li>
									<li><a href="#none" title="BARBECUE  페이지로 이동">BARBECUE</a></li>
									<li><a href="#none" title="CAFFE  페이지로 이동">CAFFE</a></li>
									<li><a href="#none" title="BEAM PROJECT  페이지로 이동">BEAM PROJECT</a></li>
									<li><a href="#none" title="GAME CENTER  페이지로 이동">GAME CENTER</a></li>
									<li><a href="#none" title="LOUNGE  페이지로 이동">LOUNGE</a></li>
									<li><a href="#none" title="EVENT  페이지로 이동">EVENT</a></li>
									<li><a href="#none" title="KIDS  페이지로 이동">KIDS</a></li>
									<li><a href="#none" title="SERVICE  페이지로 이동">SERVICE</a></li>
								</ul>
							</li>
              <li class="reservation_gnb">
								<a href="#none" title="location 페이지로 이동">reservation</a>
							</li>
							<li>
								<a href="tour.html" title="guide tour 페이지로 이동">guide tour</a>
							</li>
							<li class="sub_gnb gnb_contact">
								<a href="#none" title="contact us 페이지로 이동">contact us<span>∧</span></a>
                <ul class="sub_gnb_list">
									<li><a href="#none" title="공지사항 페이지로 이동">공지사항</a></li>
									<li><a href="#none" title="QnA  페이지로 이동">QnA</a></li>
									<li><a href="#none" title="여행후기 페이지로 이동">여행후기</a></li>
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
						<h2>QnA</h2>
					</div>
				</div>
		  <form class="board_write" action="qna_write_control.php" method="POST">
				<legend class="blind">게시판 글 작성</legend>
				<p class="first">
					<label for="title">제목</label><input type="text" id="title" name="title"  value="<?=$row['title']?>" readonly/>
				</p>
				<p>
					<label for="user">작성자</label><input type="text" id="user" name="user" value="<?=$row['name']?>" readonly/>
				</p>
				<p>
					<label for="email">이메일</label><input type="email" id="email" name="email" value="<?=$row['email']?>" readonly/>
				</p>
        <p>
					<label for="view">조회</label><input type="text" id="view" name="view" value="<?=$row['view']?>" readonly/>
				</p>
        <p>
					<label for="wdate">날짜</label><input type="text" id="wdate" name="wdate" value="<?=$row['wdate']?>" readonly/>
				</p>
				<p class="text_area">
				<label for="text">내용</label>
					<textarea name="text" id="text" readonly>
					  <?=$row['content']?>
					</textarea>
				</p>
			  <div class="btn_group">
          <a href="qna_edit.php?no=<?=$row['no']?>" title="수정"><input class="button" type="button" value="수정"/></a>
  				<a href="qna_delete.php?no=<?=$row['no']?>" title="삭제"><input class="button" type="button" value="삭제"/></a>
  				<a href="qna_list.php" title="목록"><input class="button" type="button" value="목록"/></a>
			  </div>
		  </form>
		</div>
    <div id="footerWrap">
			<h2  class="blind">푸터 영역</h2>
			<div class="footer_top">
				<div class="footer_top_area">
          <ul class="footer_gnb">
            <li>
              <a href="#none" title="about 페이지로 이동">
              about
              </a>
            </li>
            <li>
              <a href="#none" title="이용 약관 페이지로 이동">
                개인정보·수집 이용
              </a>
            </li>
            <li>
              <a href="#none" title="개인정보·수집 이용 페이지로 이동">
                이용약관
              </a>
            </li>
            <li>
              <a href="#none" title="location 페이지로 이동">
                location
              </a>
            </li>
          </ul>
          <p class="footer_logo">
            <a href="index.html" title="메인 페이지로 이동">
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
							Copyright 2016 YSH&copy; all rights reserved
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
 </body>
</html>
