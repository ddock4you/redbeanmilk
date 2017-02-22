<?php
	header("content-type:text/html; charset=utf-8");
	include "01_header.php";
?>
 <body>
	<form action="02_join_control.php" method="post">
		<legend> 간편회원가입 </legend>
		<p>
			<label for="userid"> 아이디 </label>
			<input id="userid" type="text" name="userid" maxlength="10" placeholder="10자 까지 입력가능"/>
			<span id="IDchkDesc"> ※ 아이디 중복체크 </span>
			<input id="IDchkBtn" type="button" name="IDchkBtn" value="중복체크" onclick="IDchkBtns();"/>
		</p>
		<p>
			<label for="userpass"> 비밀번호 </label>
			<input id="userpass" type="password" name="userpass" maxlength="8" placeholder="8자 까지 입력가능" required/>
		</p>
		<p>
			<label for="username"> 이름 </label>
			<input id="username" type="text" name="username" required/>
		</p>
		<p>
			<label for="useremail"> 이메일 </label>
			<input id="useremail" type="email" name="useremail" required/>
		</p>
		<p>
			<label for="userphone"> 전화번호 </label>
			<input id="userphone" type="tel" name="userphone" pattern="\d{3}-\d{3,4}-\d{4}" placeholder="010-123-4567" required/>
		</p>

		<p id="postArea">
			<label for="post1">우편번호: </label><input id="post1" type="text" name="post1" title="우편번호 앞자리"/> 
			- <input id="post2" type="text" name="post2" title="우편번호 뒷자리"/><br/>
			<input id="post3"  type="text" name="post3" title="새로운우편번호" placeholder="새로운 우편번호"/>
			<input id="postBtn" type="button"  value="우편번호찾기" onclick="postcode();"/>
		</p>
		<p>
			<label for="add1">상세주소: </label><input id="add1" type="text" name="add1" title="상세주소1"/> -
			<input id="add2" type="text" name="add2" title="상세주소2"/>
		</p>
		<p id="button">
			<input type="submit" value="가입하기"/> <input type="reset" value="다시작성"/>
		</p>
	</form>

 </body>
</html>
