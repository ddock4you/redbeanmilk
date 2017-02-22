<?php
	
	include "00_conn.php";
	$no = $_GET['no'];

	# 데이터들 호출하기 :
	#	현재 클릭한 no와 같은 데이터 값들 호출하기 
	$result = mysql_query("SELECT *FROM freeboard WHERE no='$no' ");
	$row = mysql_fetch_array( $result );
?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="utf-8">
  <title>Document</title>
  <style type="text/css">
		*{margin:0; padding:0;}
		body{background-color:#f9f9f9;}
		li{list-style:none;}
		#wrap{ width:600px; margin:50px auto 0; background-color:#fff;
					box-shadow:3px 3px 3px rgba(0,0,0,0.3);
					padding:20px 40px;}

		h2{ width:100%; text-align:center; padding-bottom:20px;}
		form{ width:100%; font-size:13px; }
		form p{ width:100%; padding:10px 0; margin-bottom:2px;}
		form label{ display:block; float:left; width:80px; text-align:center; line-height:20px;}
		form input:not(.button){ width:520px; height:20px; text-indent:10px; border:none;
											 border-bottom:1px dotted #cecece;}
		form textarea{ width:500px; height:100px; text-indent:10px; overflow:auto; padding:20px 0;}
		form label[for="content"]{ line-height:100px;}
		#buttonArea{ background-color:#fff; text-align:center; }
		#buttonArea input{ padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
		#buttonArea input:hover{ background-color:#f00; cursor:pointer; color:#fff; }
  </style>
 </head>
 <body>
	<div id="wrap">
		<h2> FREE BOARD <span style="color:red">READ</span> </h2>
		<form action="#" method="post">
			<p>
				<label for="title">제목</label><input id="title" type="text" name="title" value="<?=$row['title']?>" readonly/>
			</p>
			<p>
				<label for="name">이름</label><input id="name" type="text" name="name" value="<?=$row['name']?>" readonly/>
			</p>
			<p>
				<label for="email">이메일</label><input id="email" type="email" name="email" value="<?=$row['email']?>" readonly/>
			</p>
			<p>
				<label for="view">조회</label><input id="view" type="text" name="view" value="<?=$row['view']?>" readonly/>
			</p>
			<p>
				<label for="wdate">날짜</label><input id="wdate" type="email" name="wdate" value="<?=$row['wdate']?>" readonly/>
			</p>
			<p>
				<label for="content">내용</label>
<textarea id="content" name="content" readonly>	
<?=$row['content']?>
</textarea>
			</p>
			<p id="buttonArea">
				<a href="05_list.php" title="목록"><input class="button" type="button" value="목록"/></a>
				<a href="09_edit.php?no=<?=$row['no']?>" title="수정"><input class="button" type="button" value="수정"/></a>
				<a href="11_delete.php?no=<?=$row['no']?>" title="삭제"><input class="button" type="button" value="삭제"/></a>
			</p>
		</form>
	</div>
<?php

	# 조회수 올리기
	# 현재 3번을 클릭했다면 3번 필드의 view 값이 올라가도록 만들기
	mysql_query("UPDATE freeboard SET view=view+1 WHERE no='$no' ");
	mysql_close($conn);
?>
 </body>
</html>
