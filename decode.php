<?php

$connectToSql = mysql_connect("localhost","root","");
mysql_select_db("foo", $connectToSql); 
$decrypt= mysql_real_escape_string($_GET["decode"]);
$sql = 'select * from foo.test where shortened="$decrypt"';
$result=mysql_query("select * from foo.test where shortened='$decrypt'");
while($row = mysql_fetch_array($result)){
	$res=$row['url'];
	header("location:".$res);
}

?>