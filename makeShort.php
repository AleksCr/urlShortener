<!DOCTYPE html>
<html>
<head>
</head>
<div class="header"> Enjoy your new url<hr /></div>
<div class="content">
<?php

$connectToSql = mysql_connect("localhost","root","");
mysql_select_db("foo", $connectToSql); 
$id=rand(11111,99999);
$oldUrl=mysql_real_escape_string($_POST['url']); 
$final=base_convert($id,20,36);
$sql = "insert into foo.test values('$id','$oldUrl','$final')";
mysql_query($sql,$connectToSql);
echo "New url is <a href=\"http://localhost:8080/test/". $final ."\">http://localhost:8080/test/". $final ."</a>";
mysql_close($connectToSql);

?>
</div>
</body>
</html>