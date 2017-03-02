<?php

	include "conn.php";

	$no = $_GET['no'];
	#echo $no;
	$pass=$_POST['userpw'];

	$result = mysql_query("SELECT pass FROM qna WHERE no='$no' ");
	$row=mysql_fetch_array($result);

	if($pass== $row['pass']){
		mysql_query("DELETE FROM notice WHERE no='$no' ");
		echo "<script> alert('성공적으로 삭제되었습니다.'); </script>";
	}
	else{
		echo "<script> alert('비밀번호가 맞지 않습니다. 다시입력하세요.'); history.go(-1); </script>";
	}

	mysql_close($conn);
	echo "<meta http-equiv='Refresh' content='1; url=notice_list.php '/>  ";
?>
