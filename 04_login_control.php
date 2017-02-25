<?php

	include "00_conn.php";
	
	# 로그인시 필요한 값
	# 아이디, 비밀번호가 맞으면 로그인
	# get: 검색이 원활함, 정보가 노출됨 or  주소창에 표현되지 않으면
	#		  정보가 누락되거나 값이 넘어오지 않는다.
	# post: 정보를 가려줄수 있음(주소창), 검색이 불편함

	$userid = $_POST["userid"];
	$userpass = $_POST["userpass"];

	# 검사 할수 있는 방법
	# 01) 필드에서 같은 값이 있는지 찾아주기 : ajax에서 아이디 중복체크시 했던 부분
	# 02) 카운트세주기 / 정보가 있으면 1 , 없으면 0
	#		중복된 id를 제외시켰기 때문에 같은 정보는 1이 있음
	# 조건: userid와 userpass 같은 정보 카운트하기
	$count = mysql_query("SELECT count(*)FROM members WHERE userid='$userid' AND userpass='$userpass' ");

	# 한줄씩 카운트 세기
	$row = mysql_fetch_array( $count );
	#echo $row[0];
	# 숫자 1과 같으면 정보가 있으므로 로그인
	# 숫자 0과 같으면 정보가 없으므로 회원가입!
	if($row[0] == 1){
		# 서버에 자료 남기기위한 선언
		# 주의! 출력문보다 무조건 session 시작하기!
		session_start();
		# session[저장공간이름] = 입력값
		$_SESSION['userid'] = $userid;
		echo "<p style='text-align:center; color:#f00;'>'회원인증'이 완료되었습니다.</p>";
	}
	else{
		echo "<script> alert('아이디 또는 비밀번호가 일치하지 않습니다.'); history.go(-1); </script>";
	}

	mysql_close($conn);
	echo "<meta http-equiv='Refresh' content='1; url=05_list.php'/>";
?>