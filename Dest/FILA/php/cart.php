<?php
	header("Content-type:text/html;charset=utf-8");
	
	
	$delname = $_GET["delname"];
	$delsize = $_GET["delsize"];
	$delimg = $_GET["delimg"];
	
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("twosecond");
		
	mysql_query("delete from cart where cartname = '$delname' and cartsize = '$delsize' and cartimg = '$delimg'",$conn);
	
	
	$result = mysql_query("select * from cart",$conn);

	
	while($obj = mysql_fetch_assoc($result)){
		echo $obj["cartid"].",".$obj["cartimg"].",".$obj["cartname"].",".$obj["cartcolor"].",".$obj["cartsize"].",".$obj["cartnum"].",".$obj["cartprice"]."<br/>";
	}
	
	
	mysql_close($conn);
?>