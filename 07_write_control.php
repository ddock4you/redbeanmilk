<?php
	
	header("content-type:text/html; charset=utf-8");
	include "00_conn.php";
	
	#post
	$title	= $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$content = $_POST['content'];

	# ip 주소받기
	$ipADD = $_SERVER['REMOTE_ADDR'];

	# 입력하는 값이 비어있지 않다면 입력받은값 넘겨주기 
	if( !empty($title) && !empty($name) && !empty($email) && !empty($pass) && !empty($content)){
		$sql = "INSERT INTO freeboard (name, email, pass, title, content, wdate, ip) VALUES 
		('$name', '$email', '$pass', '$title', '$content', now(), '$ipADD')";
	}
	else{ echo "<script> alert('필수입력정보를 입력해주세요.'); history.go(-1); </script>";}

	mysql_query($sql, $conn) or die(mysql_error() );
	mysql_close( $conn );
	echo "<meta http-equiv='Refresh' content='1; url=05_list.php' />";
?>