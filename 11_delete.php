<?php
	
	include "00_conn.php";
	$no = $_GET['no'];
	#echo $no;
	
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
		#wrap{ width:400px; margin:50px auto 0; background-color:#fff;
					box-shadow:3px 3px 3px rgba(0,0,0,0.3);
					padding:20px 40px;}

		h2{ width:100%; text-align:center; padding-bottom:20px;}
		form{ width:100%; font-size:13px; }
		form p{ width:100%; padding:10px 0; margin-bottom:20px;}
		form label{ display:block; float:left; width:80px; text-align:center; line-height:25px;}
		form input:not(.button){ width:280px; height:25px; text-indent:10px;}


		#buttonArea{ background-color:#fff; text-align:center; }
		#buttonArea input{ padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
		#buttonArea input:hover{ background-color:#f00; cursor:pointer; color:#fff; }
  </style>
 </head>
 <body>
	<div id="wrap">
		<h2> FREE BOARD <span style="color:red">DELETE</span> </h2>
		<form action="12_delete_control.php?no=<?=$row['no']?>" method="post">
			<p>
				<label for="pass">비밀번호</label><input id="pass" type="password" name="pass" value="<?=$row['pass']?>"/>
			</p>
			<p id="buttonArea">
				<input class="button" type="submit" value="완료"/>
				<input class="button" type="reset" value="다시쓰기"/>
			</p>
		</form>
	</div>
 </body>
</html>
