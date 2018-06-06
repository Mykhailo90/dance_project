<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
Result GOOD WORK</br>
<?php
$connect = mysqli_connect("localhost", "root", "test12345");
if (!$connect)
{
die('ERROR! ' . mysql_error());
}
else
{
echo "Connected successfully!";
}
mysql_close($connect);
?> 

</body>
</html>>

