<?php

	include "conn.php";


	$userid = $_POST["m_userid"];
	$userpass = $_POST["m_userpw"];


	$count = mysql_query("SELECT count(*)FROM members WHERE userid='$userid' AND userpass='$userpass' ");


	$row = mysql_fetch_array( $count );

	if($row[0] == 1){

		session_start();

		$_SESSION['userid'] = $userid;
		echo "<script>alert('회원인증이 완료되었습니다.');</script>";
	}
	else{
		echo "<script> alert('아이디 또는 비밀번호가 일치하지 않습니다.'); history.go(-1); </script>";
	}

	mysql_close($conn);
	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";
?>
