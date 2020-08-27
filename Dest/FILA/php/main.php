<?php
	header("Content-type:text/html;charset=utf-8");
	
	
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("twosecond");
	
	$result = mysql_query("select * from goods",$conn);
	
	
	while($obj = mysql_fetch_assoc($result)){
		echo $obj["goodsid"].",".$obj["goodsimg"].",".$obj["goodsname"].",".$obj["goodscolor"].",".$obj["goodsprice"].",".$obj["goodssize"]."<br/>";
	}
	
	
	mysql_close($conn);
?>