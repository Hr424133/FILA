<?php
	header("Content-type:text/html;charset=utf-8");
	
	$si = $_GET["si"];
	$name = $_GET["name"];
	$price = $_GET["price"];
	$color = $_GET["color"];
	$size = $_GET["size"];
	$num = $_GET["num"];
	
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("twosecond");
	
	
	
	$result = mysql_query("select * from cart",$conn);
	$id = mysql_num_rows($result);
	
	mysql_query("insert into cart values ($id+1,'$si','$name','$color','$size',$num,$price)",$conn);
	
	
	
	mysql_close($conn);
?>