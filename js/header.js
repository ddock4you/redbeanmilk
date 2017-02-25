var scroll_event,
    scroll_value=5,
    last_scroll_place=0,
    $header_height=$("#headerWrap").outerHeight(),
    $window_height=$(window).height(),
    $window_width=$(window).width(),
    m_header_power = 0;


//스크롤 방향에 따른  header 영역 slideIn, slideDown 애니메이션 효과
$(window).scroll(function(event){
  scroll_event=true;
});

setInterval(function(){
  if(scroll_event){
    has_scrolled();
    scroll_event=false;
  }
}, 250);

function has_scrolled(){
  var now_scroll_place=$(this).scrollTop();

  if(Math.abs(last_scroll_place - now_scroll_place) <= scroll_value)
  return;

  if(now_scroll_place > last_scroll_place && now_scroll_place > $header_height && m_header_power==0){
    //Scroll Down
    $("#headerWrap").slideUp(400);
  }
  else{
    //Scroll Up
    if(now_scroll_place + $(window).height() < $(document).height()){
      $("#headerWrap").slideDown(400);
    }
  }
  last_scroll_place=now_scroll_place;
}

$(function(){
  //로그인 창 on / off
    $("#top_headerWrap").hide();

    $(".login_btn").on("click focusin", function(){
      $("#top_headerWrap").stop().slideDown(500);
      $(".wrap_dark").stop().fadeIn(500);
    });

    $(".wrap_dark").on("click focusin", function(){
      $("#top_headerWrap").stop().slideUp(500);
      $(".wrap_dark").stop().fadeOut(500);
    });


  //sub_gnb 숨겨놓기
    $(".sub_gnb_list").hide();
  //wrap_dark 숨겨놓기
    $(".wrap_dark").hide();

  //로그인 창 placeholder
    $("#userid, #userpw").placeholder();

  $(".sub_gnb").on("mouseover focusin",function(){
    $(".gnb_list").children().children("a").css({"color":"#AEA288"});
    $(".gnb_list").find("span").html("∧");
    $(this).find("span").html("∨");
    $(this).children("a").css({"color":"#E41B23"});
    $(this).children("ul").stop().slideDown(500);
  }).on("mouseout focusout",function(){
    $(".gnb_list").children().children("a").css({"color":"#AEA288"});
    $(".gnb_list").find("span").html("∧");
    $(this).children("ul").stop().slideUp(500);
  });

  //모바일 gnb 제어
  $(".m_sub_gnb_list").hide();
  $(".m_gnb_room, .m_gnb_special, .m_gnb_reservation, .m_gnb_contact")
  .on("click focusin",function(){
    $(".m_gnb_list").children().children("a").css({"color":"#000"});
    $(".m_gnb_list").find("span").html("∧");
    $(this).find("span").html("∨");
    $(".m_sub_gnb_list").stop().slideUp();
    $(this).children("ul").stop().slideDown(300);
  });

  //m_header 높이값 제어
  $(".m_header").css({"height":$window_height});

  //로그인 창 on / off
    $("#top_headerWrap").hide();

    $(".login a").on("click focusin", function(){
      $("#top_headerWrap").stop().slideDown(500);
      $(".wrap_dark").stop().fadeIn(500);
    });

    $(".wrap_dark").on("click focusin", function(){
      $("#top_headerWrap").stop().slideUp(500);
      $(".wrap_dark").stop().fadeOut(500);
    });

  //mobile header on/off
  $(".m_menu_btn").on("click focusin",function(){
    $(".m_header").stop().animate({left:"0px"},300);
    m_header_power = 1;
    $(".wrap_dark").stop().fadeIn(300);
  });

  $(".m_menu_close_btn, .wrap_dark").on("click focusin",function(){
    $(".m_header").stop().animate({left:"-320px"},300);
    m_header_power = 0;
    $(".wrap_dark").stop().fadeOut(300);
  });


});
