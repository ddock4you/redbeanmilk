<!doctype html>
<html lang="ko">
 <head>
  <meta charset="utf-8">
  <title>join_insert</title>
	<style type="text/css">
		*{margin:0; padding:0;}
		body{ background-color:#fcfcfc;}
		form{ width:300px; margin:100px auto 0; border-radius:3px; border:1px solid #ccc; font-size:12px; padding:10px 20px; box-shadow:3px 3px 20px rgba(0,0,0,0.1);}
		form legend{ display:block; text-align:center; width:100%; font-size:16px; padding:10px 0;}
		form label{ width:80px; float:left; line-height:27px; text-align:center; background-color:#eee; border:1px solid #ccc;}
		form p{ padding:5px 0;}
		form input{ width:210px; border:1px solid #ccc; border-left:none; text-indent:10px; height:26px; line-height:26px; vertical-align:bottom;}
		form p#button{ width:150px; margin:0 auto;}
		form p#button input{ display:inline-block; width:60px; height:26px; background-color:#fff; text-indent:0; border-left:1px solid #ccc;}
		form p#button input:hover{ background-color:#f00; color:#fff; cursor:pointer;}
		
		#IDchkDesc{ float:left; width:230px; font-size:12px; height:20px; text-align:right; padding:10px 5px; overflow:hidden;}
		#IDchkBtn{ width:50px; font-size:12px; text-align:center; text-indent:0; margin:5px 0;}
		#postArea{ width:100%;}
		#postArea input{width:97px; border:1px solid #ccc;}
		#postArea #post3{width:110px; text-indent:5px; display:inline-block;}
		#postArea #postBtn{text-indent:0;  width:90px; margin-left:5px;}

		#add1, #add2{width:148px; border:1px solid #ccc;}
		#add2{width:298px;}	
	</style>
	<script>
		// 01) ID 중복체크 영역 만들기
		function IDchkBtns(){
			// id입력받는 공간
			var userid = document.getElementById("userid");
			// 중복되었는지 아닌지 글자가 바뀌는 부분 
			var IDchkDesc = document.getElementById("IDchkDesc");
			if(userid.value==""){
				alert("아이디가 비어있습니다.");
				userid.focus();
				IDchkDesc.innerHTML="<strong style='color:red'>아이디 필수 입력</strong>";
			}
			else{
				
				// 01) 외부문서를 현재 웹페이지와 연동하기 위해 장비사용
				xmlhttp = new XMLHttpRequest(); 

				// 02) 장비를 통해서 외부 문서 파일 열어주기
				xmlhttp.open("GET","02_idDouble.php?q="+userid.value,true);

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
						IDchkDesc.innerHTML = xmlhttp.responseText;
					}
					
				}
			}
		}
	</script>
	<!-- 02) POSTCODE 만들기 -->
	<!-- http://postcode.map.daum.net/guide -->
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<script>
		function postcode(){
				new daum.Postcode({
					oncomplete: function(data) {
						// data는 우편번호를 담아주는 기능
						document.getElementById("post1").value = data.postcode1;
						document.getElementById("post2").value = data.postcode2;
						document.getElementById("post3").value = data.zonecode;
						document.getElementById("add1").value = data.address;
						document.getElementById("add2").focus();
					}
				}).open();
		}
	</script>
 </head>