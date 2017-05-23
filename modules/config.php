<?php
	$host='localhost';
	$user='root';
	$pass='';
	$csdl='khoedesongtot';
	$connect=mysqli_connect($host,$user,$pass)or die('Connect fail');
	if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
?>