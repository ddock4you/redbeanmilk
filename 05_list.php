<?php
	header("content-type:text/html; charset=utf-8");
	session_cache_expire(30);
	session_start();

	include "00_conn.php";

	# freeboard에서 테이블값 가져오기
	$result = mysql_query("SELECT *FROM freeboard ORDER BY no DESC");

	# no 수정하기
	# database에서 가져오는 것이 아니라 전체 게시글 숫자에서 빼주기

	# 작업된 전체 행의 갯수(최근 작업된 갯수)
	$rowCnt = mysql_affected_rows();
	#echo $rowCnt;
	/*
		var cnt=0;
		while(cnt>5){
			doument.write(cnt);
			cnt++;
		}
		# 게시글이 있다면 있는 만큼 출력해주세요!

	*/
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> new document </title>
  <style type="text/css">
		*{margin:0; padding:0;}
		body{ font-size:12px/1.2em "Malgun gothic";}
		a:link, a:visited{ color:#333; text-decoration:none;}
		a:hover, a:focus{ color:red; text-decoration:underline;}

		#wrap{ width:940px; margin:50px auto;}
		#wrap h3{ text-align:center; font-size:25px; color:#ddd; text-transform:uppercase; padding-bottom:50px;}

		#link{ width:100%; text-align:right; padding:10px 0; font-size:14px;}
		#link a{ padding:0 8px; display:inline-block; color:#000; text-shadow:1px 1px 3px rgba(0,0,0,0.2);}
		#link a:hover , #link a:focus{ background-color:#f00; color:#fff;}

		#freeboard{ width:100%; line-height:22px; font-size:14px;}
		#freeboard caption{display:none;}
		#freeboard th, #freeboard td{padding:10px; border-bottom:1px solid #f1f1f1;}
		#freeboard th{background-color:#f5f5f5;
								color:#e52202;
								border-right:1px solid #fefefe;}

		#freeboard .writeClk td{border:none;}
		.writeClk{text-align:right;}
		.writeClk a{border:1px solid #ccc; padding:5px 10px; color:#333;}
		.writeClk a:hover, .writeClk a:focus{ font-weight:700; color:#fff; background-color:#e52202;}
  </style>
 </head>
 <body>
	<div id="wrap">
		<h3> Free Board Produce </h3>
		<div id="link">
			<span>*</span><a href="#" title="home">HOME</a>
<!--
	01) userid가 비어있다면 login 보여주기 (SESSION['userid'])
	02) 비어있지 않다면 저장한 userid와 로그아웃 페이지 보여주기
	03) 10초 뒤에 로그아웃 하기
-->
<?php if(empty($_SESSION['userid'])){ ?>
			<span>*</span><a href="03_login.php" title="login">LOGIN</a>
<?php }else{?>
			[<strong style='color:#f09;'><?=$_SESSION['userid']?></strong>] 님 환영합니다.
			<span>*</span><a href="03_1_logout.php" title="login">LOGOUT</a>
<?php  echo "<meta http-equiv='Refresh' content='10; url=03_1_logout.php'/>";}?>
			<span>*</span><a href="01_join_insert.php" title="login">JOIN</a>
		</div>
		<table id="freeboard" title="게시판제작">
			<caption>FREE BOARD</caption>
			<colgroup>
				<col width="10%">
				<col width="52%">
				<col width="13%">
				<col width="13%">
				<col width="12%">
			</colgroup>
			<thead>
				<tr>
					<th scope="col">번호</th>
					<th scope="col">제목</th>
					<th scope="col">글쓴이</th>
					<th scope="col">작성일</th>
					<th scope="col">조회</th>
				</tr>
			</thead>
			<tbody>
<?php
	$cnt=0;
	while($row = mysql_fetch_array($result)){
?>
				<tr>
					<td>
						<a href="08_read.php?no=<?=$row['no']?>" title="no">
							<?=$rowCnt-$cnt?>
						</a>
					</td>
					<td>
						<a href="08_read.php?no=<?=$row['no']?>" title="title"><?=$row['title']?></a>
					</td>
					<td>
						<?=$row['name']?>
					</td>
					<td>
						<?=$row['wdate']?>
					</td>
					<td>
						<?=$row['view']?>
					</td>
				</tr>
<?php $cnt++; } mysql_close($conn); ?>
				<tr class="writeClk">
					<td colspan="5">
<?php if( empty($_SESSION['userid'])){ ?>
						<a href="03_login.php" title="로그인">로그인</a>
<?php }else { ?>
						<a href="06_write.php" title="글쓰기">글쓰기</a>
<?php }?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
 </body>
</html>
