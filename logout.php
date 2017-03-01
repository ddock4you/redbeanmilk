<?php
	header("content-type:text/html; charset=utf-8");

	#01) 세션시작하기
	session_start();

	#02) 세션값 삭제하기
	session_unset();

	#03) 세션값 파기하기
	session_destroy();

	#04) 로그아웃이 되었습니다. 띄우기
	# login 페이지로 이동하기

	echo "<script> alert('로그아웃 되었습니다.'); </script>";
	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";
?>
