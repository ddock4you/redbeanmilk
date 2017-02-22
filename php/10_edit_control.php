<?php
	
	include "00_conn.php";
	
	$no = $_GET['no'];
	#echo $no;

	$title=$_POST['title'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$content=$_POST['content'];

	/* 넘겨준 no와 같은 no필드의 pass필드 호출 */
	$result = mysql_query("SELECT pass FROM freeboard WHERE no='$no' ");
	$row=mysql_fetch_array($result);

	echo $row['pass'];

	#불러온 pass필드의 값과 edit.php에서 pass부분과 암호같을 경우
	if($pass== $row['pass']){
		mysql_query("UPDATE freeboard SET title='$title', name='$name', email='$email', content='$content' WHERE no='$no'  ");
		
		echo "<script> alert('수정이 완료되었습니다.'); </script>";
	}
	else{
		echo "<script> alert('비밀번호가 맞지 않습니다. 다시입력하세요.'); history.go(-1); </script>";
	}

	mysql_close($conn); #다른 페이지로 넘어가기전에 끊기
	echo "<meta http-equiv='Refresh' content='1; url=05_list.php '/>  ";
?>