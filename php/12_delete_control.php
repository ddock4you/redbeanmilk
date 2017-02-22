<?php
	
	include "00_conn.php";
	
	$no = $_GET['no'];
	#echo $no;
	$pass=$_POST['pass'];


	/* 넘겨준 no와 같은 no필드의 pass필드 호출 */
	$result = mysql_query("SELECT pass FROM freeboard WHERE no='$no' ");
	$row=mysql_fetch_array($result);

	echo $row['pass'];


	if($pass== $row['pass']){
		mysql_query("DELETE FROM freeboard WHERE no='$no' ");
		echo "<p style='text-align:center; color:blue;'> 성공적으로 삭제되었습니다. </p>";
	}
	else{
		echo "<script> alert('비밀번호가 맞지 않습니다. 다시입력하세요.'); history.go(-1); </script>";
	}

	mysql_close($conn); #다른 페이지로 넘어가기전에 끊기
	echo "<meta http-equiv='Refresh' content='1; url=05_list.php '/>  ";
?>