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

  //mobile header on/off
  $(".m_menu_btn").on("click focusin",function(){
    $(".m_header").stop().animate({left:"0px"},300);
    $(".wrap_dark").stop().fadeIn(300);
    $("body").css({"overflow":"hidden"});
  });

  $(".m_menu_close_btn, .wrap_dark").on("click focusin",function(){
    $(".m_header").stop().animate({left:"-320px"},300);
    $(".wrap_dark").stop().fadeOut(300);
    $("body").css({"overflow":"visible"});
  });


});
