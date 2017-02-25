<?php
	
	header("content-type:text/html; charset=utf-8");
	include "00_conn.php";
	
	// 슈퍼전역변수 : get, post 기능을 다가지고 있음
	// 쿠키 지울때 주의!
	$q = $_REQUEST['q'];
	#echo "넘겨받은 id: ".$q;
	
	// 테이블에서 같은 id가 있는지 확인하여 불러오기
	// members에서 userid랑 q와 같은 값 가져오기

	$result = mysql_query("SELECT *FROM members WHERE userid='$q' ");
	
	// 가져온 정보 한줄씩 읽어주기 
	$row = mysql_fetch_array($result);

	#echo $row[0];

	// id를 검사했을때 있을경우, 중복-사용불가
	// 없으면 사용가능아이디

	if($row['userid'] == $q){ echo "<strong style='color:red'>중복-사용 불가능</strong>";}
	else{echo "<strong style='color:blue'>사용가능 아이디</strong>";}

?>