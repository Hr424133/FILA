<?php
	header("Content-type:text/html;charset=utf-8");
	
	$phone = $_GET["userphone"];
	$pwd = $_GET["pwd"];
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("twosecond");
	
	$result = mysql_query("select * from user where userphone = '$phone' and userpwd ='$pwd'",$conn);
	$result1 = mysql_query("select * from user where userphone = '$phone' or userpwd ='$pwd'",$conn);
	
	if(mysql_num_rows($result) == 1){
		echo "0";
	}else if(mysql_num_rows($result1) == 1){
		echo "2";
	}else if(mysql_num_rows($result) == 0){
		echo "1";
	}
	
	
	mysql_close($conn);
?>