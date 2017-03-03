<?php
	header("content-type:text/html; charset=utf-8");
	$conn = mysql_connect("localhost","ddock4you","redbean0208");
	mysql_select_db("ddock4you",$conn) or die( mysql_error() );
	mysql_query("set names utf8");
?>
