<?php
	header("Content-type:text/html;charset=utf-8");
	
	$phone = $_GET["userphone"];
	$pwd = $_GET["pwd"];
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("twosecond");
	
	
	$result = mysql_query("select * from user where userphone = '$phone'",$conn);
	$result1 = mysql_query("select * from user",$conn);
	
	
	$id = mysql_num_rows($result1);
	
	if(mysql_num_rows($result) == 1){
		echo "0";
	}else{
		mysql_query("insert into user values ($id+1,'$phone','$pwd')",$conn);
		echo "1";
	}
	
	mysql_close($conn);
?>