<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST['submit'])){
	include_once("connect.php");
	$ma_sp = $_POST["ma_sp"];
	$ma_loai = $_POST["ma_loai"];
	$ten_sp = $_POST["ten_sp"];
	$gia_sp = $_POST["gia_sp"];
	$mo_ta = $_POST["mo_ta"];
	$sql = "INSERT INTO san_pham (ma_sp, ma_loai, ten_sp, gia_sp, mo_ta) VALUES ('$ma_sp', '$ma_loai', '$ten_sp', '$gia_sp', '$mo_ta')";
	mysql_query($sql);
	header("location: index.php");
	}
?>
<form method="post">
    <table border="1">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Mã loại</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Mô tả sản phẩm</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="ma_sp" /></td>
                <td><input type="text" name="ma_loai" /></td>
                <td><input type="text" name="ten_sp" /></td>
                <td><input type="text" name="gia_sp" /></td>
                <td><input type="text" name="mo_ta" /></td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="submit">Thêm</button>
</form>
<body>
</body>
</html>