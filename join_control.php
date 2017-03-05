<?php

	include "conn.php";

	$userid = $_POST["user_id"];
	$userpass = $_POST["user_pw"];
	$username = $_POST["user_name"];
	$emailfront = $_POST["user_front_email"];
	$emailback	= $_POST["user_back_email"];
	$phonefirst = $_POST["user_phone_first"];
	$phonesecond = $_POST["user_phone_second"];
	$phonelast = $_POST["user_phone_last"];


	$useremail = $emailfront."@".$emailback;
	$userphone = $phonefirst."-".$phonesecond."-".$phonelast;


	# 대입되는 공간의 값이 비어있지 않다면 입력받기
	$result = "INSERT INTO members (userid, username, userpass, useremail, userphone)
						VALUES ('$userid', '$username' , '$userpass', '$useremail', '$userphone')";

	# 변수에 담긴값을 mysql로 넘기기
	mysql_query($result, $conn) or die( mysql_error() );

	# 정보가 있을때 회원가입에 성공했습니다.
	# 아니라면 회원가입에 실패했습니다.

	if($result){
		echo "<script> alert('회원가입에 성공했습니다!');</script>";
		echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";
	}
	else{
		echo "<script> alert('회원가입에 실패했습니다. 다시 시도해주세요.');</script>";
	}


?>
