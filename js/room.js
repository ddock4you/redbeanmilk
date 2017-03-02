$(function(){

    // visual 텍스트 애니메이션 효과
    $(".visual_main_text").hide().fadeIn(1000);

    //visual 이미지 생성
      $(".visual_main_img").css({"background-image":"url(img/room_info/"+room_name_no+".jpg)"});

    //visual 이미지 애니메이션
      $(".visual_main_img").scale(1.15).animate({scale:"1"},1000);

    // room_info 이미지 생성
      $(".room_info_desc").css({"background-image":"url(img/room_info/room"+room_name_no+"/10.jpg)"});

    // li 이미지 생성
      var i = $(".modal_area li").index();
      for(i;i<20;i++){
        $(".modal_area li:eq("+i+")").css({"background-image":"url(img/room_info/room"+room_name_no+"/"+i+".jpg)"});
      }
    // 모달 팝업
      $(".wrap_dark, .modal").hide();
      $(".modal_area li a").on("click focusin", function(){
        var j = $(this).parent().index();
        $(".modal").css({"background-image":"url(img/room_info/room"+room_name_no+"/"+j+".jpg)"});
        $(".wrap_dark, .modal").show();
        return false;
      });

      $(".wrap_dark, .modal").on("click", function(){
        $(".wrap_dark, .modal").hide();
      });
    // footer_gnb에 focusin되면 모달 팝업창 꺼지게 설정(탭키 접근)
      $(".footer_gnb").on("focusin", function(){
        $(".wrap_dark, .modal").hide();
      });

      //슬라이딩 윈도우
    var $window_width = $(window).width();
    if($window_width < 769){
      $(".room_info_desc ul").prepend($(".room_info_desc ul li:last"));
      $(".room_info_desc ul").css({"marginLeft":"-100%"});

      $(".next").on("click focusin", function(){
        $(".room_info_desc ul").stop().animate({"marginLeft":"-=100%"},1000,"swing",function(){
          $(this)
            .append($(".room_info_desc ul li:first"))
            .css({"marginLeft":"-100%"},{"height":"auto"});
        });
      });
      $(".prev").on("click focusin", function(){
        $(".room_info_desc ul").stop().animate({"marginLeft":"+=100%"},1000,"swing",function(){
          $(this)
            .prepend($(".room_info_desc ul li:last"))
            .css({"marginLeft":"-100%"},{"height":"auto"});
        });
      });
    }
  });
