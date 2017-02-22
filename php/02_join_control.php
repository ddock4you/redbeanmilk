<?php

	include "00_conn.php";
	
	$userid = $_POST["userid"];
	$userpass = $_POST["userpass"];
	$username = $_POST["username"];
	$useremail = $_POST["useremail"];
	$userphone = $_POST["userphone"];

	$post1 = $_POST["post1"];
	$post2 = $_POST["post2"];
	$add1 = $_POST["add1"];
	$add2 = $_POST["add2"];
	# 131-790	상세주소
	$address = $post1."-".$post2." ".$add1." ".$add2;

	# 대입되는 공간의 값이 비어있지 않다면 입력받기
	if( !empty($userid) && !empty($userpass) && !empty($username) && !empty($useremail) && !empty($userphone) ){
		$result = "INSERT INTO members (userid, username, userpass, useremail, userphone, address) VALUES ('$userid', '$username' , '$userpass', '$useremail', '$userphone', '$address' )";
	}else{ echo "<p style='text-align:center; color:red;'> 빈칸이 있거나 정보에 문제가 있습니다. </p>";}

	# 변수에 담긴값을 mysql로 넘기기
	mysql_query($result, $conn) or die( mysql_error() );

	# 정보가 있을때 회원가입에 성공했습니다.
	# 아니라면 회원가입에 실패했습니다.

	if($result){
		echo "<p style='text-align:center; color:blue;'> 회원가입에 성공했습니다. </p>";
		echo "<meta http-equiv='Refresh' content='1; url=03_login.php'/> ";
	}
	else{
		echo "<p style='text-align:center; color:red;'> 회원가입에 실패했습니다. </p>";
	}


?>