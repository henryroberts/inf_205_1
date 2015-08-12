<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include_once("connect.php");
$ma_sp = $_GET['ma_sp'];
$sql = "DELETE FROM san_pham WHERE ma_sp ='".$ma_sp."'";
echo $sql;
mysql_query($sql);
//header("location: index.php");
?>
<body>
</body>
</html>