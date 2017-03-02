<?php
	header("content-type:text/html; charset=utf-8");
	session_cache_expire(30);
	session_start();

	include "conn.php";
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
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
  <link rel="stylesheet" type="text/css" href="css/media/media_index.css"/>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/header.js"></script>
  <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
  <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>

  <!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/cross/ie8_index.css"/>
  <![endif]-->
  <style type="text/css">

  </style>
  <script type="text/javascript">


  $(function(){
    //visual 이미지 높이값 설정
      $(".visual_main").css({"height":$(window).height()});

    // visual 영역 애니메이션 효과
      $(".visual_main_img").scale(1.15).animate({scale:"1"},20000);
      $(".visual_main_icon").animate({opacity:"1", top:"20%"},1200, "easeInOutQuart");
      $(".visual_main_text").delay(1000).animate({opacity:"1",top:"52%"},1400, "easeInOutQuart");

      //팝업창 제어
        $(".drag_area").mousedown(function(e){

  				$("body").on("selectstart",function(){ return false; });

  				$("#event").data("clickX",e.pageX-$("#event").offset().left)
  										.data("clickY",e.pageY-$("#event").offset().top);

  				$(document).mousemove(function(e){
  					$("#event").css({"left":e.pageX-$("#event").data("clickX")+"px","top":e.pageY-$("#event").data("clickY")+"px"});
  				}).mouseup(function(){

  					$(document).off("mousemove");
  					$("body").off("selectstart");
  				});
  			});

      //메인 페이지 접속할 때 팝업창을 열지 닫을지 여부
        var expiredays = 1;
        function startTime(){
          var cName ="event";
          var time = new Date();
          var year = time.getFullYear();

           cookieIndex = getCookie(cName);
            if ( !cookieIndex ){
                document.getElementById('event').style.visibility = "visible";
                alert("됨");
            }
            else{
                document.getElementById('event').style.visibility = "hidden";
                alert("안됨");
            }
        }

		 //Room 선택 영역
       //Room hover하면 hover된 영역에 글자 애니메이션 표시
        if($window_width > 768){
          $(".room_area ul li a div").css({color:"#bbb"});

          $(".room_area ul li a").on("mouseover focusin", function(){
            $(".room_area ul li a div").stop().animate({top:"45%", color:"#bbb"});
            $(this).children("div").stop().animate({top:"35%", color:"#fff"});
          })
          .on("mouseout focusout", function(){
            $(this).children("div").stop().animate({top:"45%", color:"#bbb"});
          });
        }
     //Room click하면 선택한 room image를 Room_info 부모영역에 표시
     //hover로 하면 같은 영역에서도 hover인식이 여러번되서 뺐음.
       $(".room_select li").on("click", function(){
         var room_name=["_alie","_amant","_mister","_hobby","_blancnoir","_mienne","_missa","_bonjour"],
             $room_number=$(this).index();

         $(".room_area img").before("<img src='img/room_info/0"+$room_number+room_name[$room_number]+".jpg' alt='방 이미지'/>");
           $(".room_area img:last").fadeOut(300, function(){
             $(this).remove();
         });
         return false;
       });

      //special hover 기능
        if($window_width > 769){
          $(".film_special li a").find(".dark").css({opacity:"0"});
          $(".film_special li a").find("h4").css({opacity:"0"});

          $(".film_special li a").on("mouseover focusin", function(){
            $(".film_special li a").find(".dark").stop().animate({opacity:"0"},300);
            $(".film_special li a").find("h4").stop().animate({opacity:"0", top:"55%"},300);
            $(this).children(".dark").stop().animate({opacity:"1"},300);
            $(this).find("h4").stop().animate({opacity:"1", top:"45%"},300);
          })
          .on("mouseout focusout", function(){
            $(".film_special li a").find(".dark").stop().animate({opacity:"0"},300);
            $(".film_special li a").find("h4").stop().animate({opacity:"0", top:"55%"},300);
          });
        }

      //special 마우스 드래그 기능(정상작동 안됨)
        $("#special").on("mousedown", special_drag);

          function special_drag(event){
    			var lastMouseX = event.pageX;

    			$(document).on("mousemove", function(event){
    				if( lastMouseX - event.pageX >= 20){
    					lastMouseX = event.pageX;
              $(".film_special").css({"marginLeft":lastMouseX});

    				}else if (lastMouseX - event.pageX <= -20){
    					lastMouseX = event.pageX;
              $(".film_special").css({"marginLeft":lastMouseX});
    				}
    			});

    			$(document).on("mouseup", function(){ $(document).off("mousemove"); });
    		}

    //tour hover 기능
      if($window_width > 1024){
        $(".pic_back").animate({bottom:"5%", left:"2%"},400);

        $(".pic_group").on("mouseover focusin", function(){
          $(".pic_back").stop().animate({bottom:"10%", left:"10%"},400);
        })
        .on("mouseout focusout", function(){
          $(".pic_back").stop().animate({bottom:"5%", left:"2%"},400);
        });
      }
      else{
        $(".pic_back").animate({bottom:"10%", left:"10%"},400);
      }
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
			<form id="event" name="event">
        <p class="drag_area"></p>
        <p class="event_img">
          <img src="img/event1.jpg" alt="사계절 온수 수영장 오픈 이미지"/>
        </p>
				<div class="event_btn">
				  <label for="close_cookies">오늘하루 이 창을 열지 않음</label>
          <input id="close_cookies" type="checkbox" name="close_cookies"/>
          <a class="close_btn" href="#none" title="닫기" onclick="closeWin_23()">닫기</a>
				</div>
			</form>
      <!--<script>
        bn_cookiedata = document.cookie;

        if (bn_cookiedata.indexOf("maindiv_23=done") < 0 ) {
            document.all['event'].style.visibility = "visible";
        }
        else {
            document.all['event'].style.visibility = "hidden";
        }

        function closeWin_23() {
          if ( document.event.close_cookies.checked ) {
            setCookie( "maindiv_23", "done" , 1 );
          }
          document.all['event'].style.visibility = "hidden";
        }

        //팝업창을 열지 닫을지 여부
        var expiredays = 1;

        function startTime(){
          var cName ="event";
          var time = new Date();
          var year = time.getFullYear();

           cookieIndex = getCookie(cName);
            if ( !cookieIndex ){
                document.getElementById('event').style.visibility = "visible";
                alert("됨");
            }
            else{
                document.getElementById('event').style.visibility = "hidden";
                alert("안됨");
            }
        }

        function setCookie( name, value, expiredays ){
            var todayDate = new Date();
            todayDate.setDate(todayDate.getDate() + expiredays);
            document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
        }

        function getCookie(name){
          var nameOfCookie = name + "=";
          var x = 0;
          while ( x <= document.cookie.length ){
              var y = (x+nameOfCookie.length);
              if ( document.cookie.substring( x, y ) == nameOfCookie ){
                  if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
                  endOfCookie = document.cookie.length;
                  return unescape( document.cookie.substring( y, endOfCookie ) );
              }
              x = document.cookie.indexOf( " ", x ) + 1;
              if ( x == 0 )
              break;
           		}
           return "";
        }
      </script>-->
			<div id="visual">
				<h2 class="blind">VISUAL</h2>
				<div class="visual_main">
          <p class="visual_main_img">
		        <!--visual background 영역-->
					</p>
          <p class="visual_main_icon">
            <img src="img/logo_footer_white.png" alt="메인 이미지"/>
          </p>
					<div class="visual_main_text">
						<em>special restroom broke the desires</em>
						<h3>Luxury Modern Theme Spa<br/><span class="amp">&amp;</span><br/>Heated Swimming Pool</h3>
					</div>
				</div>
			</div>
			<div id="room_info">
				<h2>choose a room</h2>
					<div class="room_area">
						<span class="dark"></span>
						<img src="img/room_info/00_alie.jpg" alt="방 이미지"/>
            <p class="m_room_area">
            </p>
            <div class="room_scene">
							<ul class="room_scene room_select">
								<li class="bottom pre00_alie">
                  <span class="dark"></span>
									<a href="room00_alie.html" title="alie 방 상세 페이지로 이동">
										<div class="pre00_alie_text">
											<h4>alie</h4>
											<p>URBAN &amp; VINTAGE</p>
										</div>
									</a>
								</li>
								<li class="bottom pre01_amant">
                  <span class="dark"></span>
									<a href="room01_amant.html" title="amant 방 상세 페이지로 이동">
										<div class="pre01_amant_text">
											<h4>amant</h4>
											<p>ELEGANT &amp; MODERN</p>
										</div>
									</a>
								</li>
								<li class="bottom pre02_mistere">
                  <span class="dark"></span>
									<a href="room02_mistere.html" title="mistere 방 상세 페이지로 이동">
										<div class="pre02_mistere_text">
											<h4>mistere</h4>
											<p>SEMICLASSIC &amp; MODERN</p>
										</div>
									</a>
								</li>
								<li class="bottom pre03_hobby">
                  <span class="dark"></span>
									<a href="room03_hobby.html" title="hobby 방 상세 페이지로 이동">
										<div class="pre03_hobby_text">
											<h4>hobby</h4>
											<p>THEME &amp; MODERN</p>
										</div>
									</a>
								</li>
								<li class="pre04_blancmoir">
                  <span class="dark"></span>
									<a href="room04_blancmoir.html" title="blancmoir 방 상세 페이지로 이동">
										<div class="pre04_blancmoir_text">
											<h4>blancmoir</h4>
											<p>SEMICLASSIC &amp; MODERN</p>
										</div>
									</a>
								</li>
								<li class="pre05_mienne">
                  <span class="dark"></span>
									<a href="room05_mienne.html" title="mienne 방 상세 페이지로 이동">
										<div class="pre05_mienne_text">
											<h4>mienne</h4>
											<p>LOVELY &amp; LUMINOUS</p>
										</div>
									</a>
								</li>
								<li class="pre06_rosa">
                  <span class="dark"></span>
									<a href="room06_rosa.html" title="rosa 방 상세 페이지로 이동">
										<div class="pre06_rosa_text">
											<h4>rosa</h4>
											<p>WHITE  &amp; MODERN</p>
										</div>
									</a>
								</li>
								<li class="pre07_bonuour">
                  <span class="dark"></span>
									<a href="room07_bonuour.html" title="bonuour 방 상세 페이지로 이동">
										<div class="pre07_bonuour_text">
											<h4>bonuour</h4>
											<p>CUTE &amp; LUMINOUS</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
				</div>
			</div>
			<div id="special">
				<h2>special</h2>
				<div class="special_area">
				<p class="scroll">
					<span class="stick"></span>
				</p>
					<ul class="film_special">
						<li class="right spe00_pool">
							<a href="special00_pool.html" title="온수수영장 상세 페이지로 이동">
								<img src="img/special/preview/spe00_pool.jpg" alt="온수수영장 이미지"/>
								<span class="dark"></span>
								<h4>swimming pool</h4>
							</a>
						</li>
						<li class="spe01_zet">
							<a href="special01_zet.html" title="제트 스파 상세 페이지로 이동">
								<img src="img/special/preview/spe01_zet.jpg" alt="제트 스파 이미지"/>
								<span class="dark"></span>
								<h4>zet spa</h4>
							</a>
						</li>
						<li class="right spe02_barbecue">
							<a href="special02_barbecue.html" title="바베큐 상세 페이지로 이동">
								<img src="img/special/preview/spe02_barbecue.jpg" alt="바베큐 이미지"/>
								<span class="dark"></span>
								<h4>barbecue</h4>
							</a>
						</li>
						<li class="spe03_cafe">
							<a href="special03_cafe.html" title="카페 상세 페이지로 이동">
								<img src="img/special/preview/spe03_cafe.jpg" alt="카페 이미지"/>
								<span class="dark"></span>
								<h4>cafe</h4>
							</a>
						</li>
						<li class="right spe04_beam">
							<a href="special04_beam.html" title="빔 프로젝트 상세 페이지로 이동">
								<img src="img/special/preview/spe04_beam.jpg" alt="빔 프로젝트이미지"/>
								<span class="dark"></span>
								<h4>beam project</h4>
							</a>
						</li>
						<li class="spe05_game">
							<a href="special05_game.html" title="게임 센터 상세 페이지로 이동">
								<img src="img/special/preview/spe05_game.jpg" alt="게임 센터 이미지"/>
								<span class="dark"></span>
								<h4>game center</h4>
							</a>
						</li>
						<li class="right spe06_lounge">
							<a href="special06_lounge.html" title="라운지 상세 페이지로 이동">
								<img src="img/special/preview/spe06_lounge.jpg" alt="라운지 이미지"/>
								<span class="dark"></span>
								<h4>lounge</h4>
							</a>
						</li>
						<li class="spe07_event">
							<a href="special07_event.html" title="이벤트 상세 페이지로 이동">
								<img src="img/special/preview/spe07_event.jpg" alt="이벤트 이미지"/>
								<span class="dark"></span>
								<h4>event</h4>
							</a>
						</li>
						<li class="right spe08_kids">
							<a href="special08_kids.html" title="키즈 상세 페이지로 이동">
								<img src="img/special/preview/spe08_kids.jpg" alt="키즈 이미지"/>
								<span class="dark"></span>
								<h4>kids</h4>
							</a>
						</li>
						<li class="spe09_service">
							<a href="special09_service.html" title="서비스 상세 페이지로 이동">
								<img src="img/special/preview/spe09_service.jpg" alt="서비스 이미지"/>
								<span class="dark"></span>
								<h4>service</h4>
							</a>
						</li>

					</ul>
				</div>
			</div>
			<div id="tour">
				<div>
					<h2>tour</h2>
					<div class="pic_group">
						<a href="tour.html" title="TOUR 상세 페이지로 이동">
							<div class="pic pic_back">
								<p class="pic_img pic_back_img">
									<img src="img/11_01.jpg" alt="더보기 이미지"/>
								</p>
								<p class="pic_back_text">
									More Tour
								</p>
							</div>
							<div class="pic pic_front">
								<p class="pic_img pic_front_img">
									<img src="img/tour_guide2.jpg" alt="투어 이미지"/>
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
      <div id="about">
        <a href="about.html" title="about 페이지로 이동">
          <div>
            <h2>
              Are you curious about Claire?
            </h2>
            <p>
              More Story
            </p>
          </div>
        </a>
      </div>
      <div id="location">
        <h2>
          location
        </h2>
        <div class="location_area">
          <a href="location.html" title="location 페이지로 이동">
            <div class="location_text_area">
              <p class="location_text">
                <strong>Clare Location</strong>
                경기도 가평군<br/>
                북면 백둔리<br/>
                455-18번지
              </p>
              <p class="location_text location_phone">
                <img src="img/icon_phone_white.png" alt="전화번호 이미지"/>
                010.9543.9177
              </p>
              <p class="more_info">
                More Info
              </p>
            </div>
            <p class="location_img">
            </p>
          </a>
        </div>
      </div>
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
