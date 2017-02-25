(function (){
  var id_chk, user_form, select_email, input_back_email;

    id_chk = document.getElementById("chk_id");
    id_chk.onclick = IDchkBtns;
    //아이디 중복 확인
    function IDchkBtns(){

      var user_id = document.getElementById("user_id"),
          result_id = document.getElementById("result_id");

      if(user_id.value==""){
        alert("아이디가 비어있습니다.");
        user_id.focus();
        result_id.innerHTML="<strong style='color:red'>아이디 필수 입력</strong>";
      }
      else{

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","idDouble.php?q="+user_id.value,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function(){

          if(xmlhttp.readyState==4 && xmlhttp.status ==200){
            result_id.innerHTML = xmlhttp.responseText;
          }
        }
      }
    }
//email select 영역에서 윈하는 email 선택하면 자동으로 email 뒷자리 입력
  select_email = document.getElementById("user_back_select_email");
  select_email.onchange = email_back_input;

  function email_back_input(){
    input_back_email = document.getElementById("user_back_email");

    switch(select_email.value){
      case "selected": input_back_email.focus(); input_back_email.value=""; input_back_email.readOnly=true;break;
      case "naver.com": case "hanmail.net": case "naver.com": case "nate.com": case "gmail.com":
      case "hotmail.com": case "lycos.co.kr": case "korea.com": case "empal.com": case "dreamwiz.com":
      case "yahoo.com": case "ymail.com": case "live.com": case "aol.com": case "msn.com":
      case "msn.com": case "me.com": case "live.com": case "icloud.com": case "rocketmail.com":
      case "qq.com": case "link.com": input_back_email.value = select_email.value; input_back_email.readOnly=true; break;
      case "direct" : input_back_email.focus(); input_back_email.value=""; input_back_email.readOnly=false;break;
    }
}

//회원가입 폼 유효성 검사
  user_form = document.getElementById("user_form");
  user_form.onsubmit = validate;

  function validate(){
    var user_name, user_id, user_pw, user_pw_chk, user_front_email, user_back_email,
        user_phone_first, user_phone_second, user_phone_last, reg_name, reg_id_email,
        reg_email_back, reg_pw, reg_phone, full_accept, accept_1, accept_2,
        accept_1_chk, accept_2_chk, id_match, result_id_chk;

        user_name = document.getElementById("user_name");
        if(user_name.value == ""){
          alert("이름을 입력하세요.");
          user_name.focus();
          return false;
        }
        reg_name = /^[가-힣]{2,8}$/;
        if(!reg_name.test(user_name.value)){
          alert("이름은 한글 2-8글자 사이로 입력해야 합니다.");
          return false;
        }

        user_id = document.getElementById("user_id");
        if(user_id.value == ""){
          alert("아이디를 입력하세요.");
          user_id.focus();
          return false;
        }

        reg_id_email = /^[a-zA-Z0-9]{3,16}$/;
        if(!reg_id_email.test(user_id.value)){
          alert("아이디에 사용할 수 없는 문자가 들어갔습니다.\n 다시 입력해주세요.");
          user_id.focus();
          return false;
        }


        user_pw = document.getElementById("user_pw");
        user_pw_chk = document.getElementById("user_pw_chk");
        if(user_pw.value == "" || user_pw_chk.value == ""){
          alert("비밀번호를 입력하세요.");
          user_pw.focus();
          return false;
        }


        if(user_pw.value.length < 4 || user_pw_chk.value.length < 4){
          alert("비밀번호는 최소 4자리 이상 최대 16자리까지입니다.\n 다시 입력해주세요.");
          user_pw_chk.focus();
          return false;
        }

        if(user_pw.value !== user_pw_chk.value){
          alert("비밀번호가 서로 다릅니다.\n다시 한 번 입력해주세요.");
          user_pw_chk.focus();
          return false;
        }

        reg_pw = /^[a-zA-Z0-9\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]{3,16}$/g;
        if(!reg_pw.test(user_pw.value)){
          alert("비밀번호에 사용할 수 없는 문자가 들어갔습니다.\n 다시 입력해주세요.");
          user_front_email.focus();
          return false;
        }

        user_front_email = document.getElementById("user_front_email");
        if(user_front_email.value == ""){
          alert("이메일을 입력하세요.");
          user_front_email.focus();
          return false;
        }

        user_back_email = document.getElementById("user_back_email");
        if(user_back_email.value == ""){
          alert("이메일을 입력하세요.");
          user_front_email.focus();
          return false;
        }

        if(!reg_id_email.test(user_front_email.value)){
          alert("이메일에 사용할 수 없는 문자가 들어갔습니다.\n 다시 입력해주세요.");
          user_front_email.focus();
          return false;
        }

        reg_email_back = /[a-zA-Z0-9.]/;
        if(!reg_id_email.test(reg_email_back.value)){
          alert("이메일에 사용할 수 없는 문자가 들어갔습니다.\n 다시 입력해주세요.");
          user_back_email.focus();
          return false;
        }

        user_phone_first = document.getElementById("user_phone_first"),
        user_phone_second = document.getElementById("user_phone_second"),
        user_phone_last = document.getElementById("user_phone_last");
        reg_phone = /[0-9]/
        if(!reg_phone.test(user_phone_first.value) || !reg_phone.test(user_phone_second.value) || !reg_phone.test(user_phone_second.value)){
          alert("휴대폰 번호에 사용할 수 없는 문자가 들어갔습니다.\n 다시 입력해주세요.");
          user_phone_first.focus();
          return false;
        }

        accept_1 = document.getElementById("accept_1");
        if(accept_1.checked == false){
          alert("이용약관에 동의 체크해주세요.");
          accept_1.focus();
          return false;
          console.log(accpet_1);
        }

        accept_2 = document.getElementById("accept_2");
        if(accept_2.checked == false){
          alert("개인정보·수집 이용에 동의 체크해주세요.");
          accept_2.focus();
          return false;
        }

      //아이디 중복검사 여부 확인
        result_id_chk = document.getElementById("result_id_chk");
        if(result_id_chk == undefined){
          alert("아이디 중복체크를 해주세요.");
          user_id.focus();
          return false;
        }

        id_match = "중복된 아이디입니다.";
        if(id_match.value == result_id_chk.value){
          alert("이미 가입된 아이디가 있습니다.\n다른 아이디를 입력해주세요.");
          user_id.focus();
          return false;
        }
  }
  // 전체 동의 버튼
    full_accept = document.getElementById("full_accept");
    full_accept.onchange = full_accept_active;

    function full_accept_active(){
      if(full_accept.checked == true){
        accept_1.checked = true, accept_2.checked = true;
      }
      else{
        accept_1.checked = false, accept_2.checked = false;
      }
    }

}());
