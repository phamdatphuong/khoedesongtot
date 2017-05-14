<?php
	$host='localhost';
	$user='root';
	$pass='';
	$csdl='khoedesongtot';
	$connect=mysql_connect($host,$user,$pass)or die('Connect fail');
	mysql_select_db($csdl,$connect);
?>