  // 01) ID 중복체크 영역 만들기
  function IDchkBtns(){

    var user_id = document.getElementById("user_id"),
        result_id = document.getElementById("result_id");

    if(user_id.value==""){
      alert("아이디가 비어있습니다.");
      user_id.focus();
      result_id.innerHTML="<strong style='color:red'>아이디 필수 입력</strong>";
    }
    else{

      // 01) 외부문서를 현재 웹페이지와 연동하기 위해 장비사용
      xmlhttp = new XMLHttpRequest();

      // 02) 장비를 통해서 외부 문서 파일 열어주기
      xmlhttp.open("GET","idDouble.php?q="+user_id.value,true);

      // 03) 장비와 외부문서 연결
      xmlhttp.send();

      // 04) 장비를 통해서 가져온 데이터를 웹페이지에 맞게
      // 변환할 준비가 되었다면 기능구현하기

      xmlhttp.onreadystatechange=function(){
        /*
          06) 장비를 통해서 요청한 데이터가 준비가 완료되었고,
          언제든지 처리가 가능상태일경우 결과창에 데이터보여주기

            + 요청한 데이터가 준비가 완료 : readyState==4
            + 언제든지 처리가 가능상태 : status ==200

            0: 초기화와 관련된 내용
            1: 서버 초기 접속관련 내용
            2: 요청받음
            3: 요청처리중
            4: 요청이 완료되고, 응답준비가 되었을때
            200: 서버처리가 성공적일때
        */
        if(xmlhttp.readyState==4 && xmlhttp.status ==200){
          result_id.innerHTML = xmlhttp.responseText;
        }

      }
    }
  }
