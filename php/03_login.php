<!doctype html>
<html lang="ko">
 <head>
  <meta charset="utf-8">
  <title>Document</title>
  <style type="text/css">
		*{margin:0; padding:0;}
		body{ background-color:#fcfcfc;}
		h2{ text-indent:-9999px;}
		
		#link{ width:340px; margin:100px auto 0; text-align:right; font-size:12px;}
		#link a{ text-decoration:none; padding:0px 8px; color:#000; text-shadow:1px 1px 3px rgba(0,0,0,0.2);}
		#link a:hover, #link a:focus{ background-color:#f00; color:#fff;}

		form{ width:300px; margin:0 auto; border:1px solid #ccc; padding:10px 20px; background-color:#fff; box-shadow:3px 3px 20px rgba(0,0,0,0.1); font-size:12px;}

		form p{padding:5px 0;}
		form legend{ text-align:center;  font-size:16px; padding:10px 0; display:block; width:100%;}

		form label{width:80px; display:inline-block; line-height:27px; text-align:center; background-color:#eee; border:1px solid #ccc;}

		form input{width:216px; border:1px solid #ccc; border-left:none; height:26px; text-indent:10px;}

		form p#button{ width:100%; padding:10px 0; text-align:center;}
		form p#button input{ width:60px; height:26px; background-color:#fff; text-indent:0; border-left:1px solid #ccc;}

		form p#button input:hover{ background-color:#f00; color:#fff; cursor:pointer;}

  </style>
 </head>
 <body>
	<h2> 간편 로그인 </h2>
	<div id="link">
		<span>*</span><a href="#" title="home">HOME</a>
		<span>*</span><a href="#" title="login">LOGIN</a>
		<span>*</span><a href="01_join_insert.php" title="join">JOIN</a>
	</div>
	<form action="04_login_control.php" method="post">
		<legend>회원 로그인</legend>
		<p>
			<label for="userid">아이디</label><input id="userid" type="text" name="userid" maxlength="10"/>
		</p>
		<p>
			<label for="userpass">비밀번호</label><input id="userpass" type="password" name="userpass" maxlength="8"/>
		</p>
		<p id="button">
			<input type="submit" value="로그인"/>
		</p>
	</form>
 </body>
</html>
