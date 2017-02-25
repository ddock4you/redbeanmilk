<?php

	header("content-type:text/html; charset=utf-8");
	include "conn.php";

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

	if($row['userid'] == $q){ echo "<strong id='result_id_chk' style='color:red'>중복된 아이디입니다.</strong>";}
	else{echo "<strong id='result_id_chk' style='color:blue'>사용가능한 아이디입니다.</strong>";}

?>
