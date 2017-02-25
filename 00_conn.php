<?php
	header("content-type:text/html; charset=utf-8");
	$conn = mysql_connect("localhost","root","1234");
	mysql_select_db("inboard",$conn) or die( mysql_error() );
	mysql_query("set names utf8");
?>