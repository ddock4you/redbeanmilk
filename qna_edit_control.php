<?php

	include "conn.php";

	$no = $_GET['no'];

	$title=$_POST['title'];
	$name=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['userpw'];
	$content=$_POST['text'];

	$result = mysql_query("SELECT pass FROM qna WHERE no='$no' ");
	$row=mysql_fetch_array($result);


	if($pass== $row['pass']){
		mysql_query("UPDATE qna SET title='$title', name='$name', email='$email', content='$content' WHERE no='$no'  ");

		echo "<script> alert('수정이 완료되었습니다.'); </script>";
	}
	else{
		echo "<script> alert('비밀번호가 맞지 않습니다. 다시입력하세요.'); history.go(-1); </script>";
	}

	mysql_close($conn);
	echo "<meta http-equiv='Refresh' content='1; url=qna_list.php '/>  ";
?>
