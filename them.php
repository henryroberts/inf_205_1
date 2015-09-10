<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST['submit'])){
	include_once("connect.php");
	$id_san_pham = $_POST["id_san_pham"];
	$id_loai_sp = $_POST["id_loai_sp"];
	$ten_sp = $_POST["ten_sp"];
	$ga_sp = $_POST["ga_sp"];
	$mo_ta = $_POST["mo_ta"];
	$sql = "INSERT INTO san_pham (id_loai_sp,ten_sp, ga_sp, mo_ta) VALUES ($id_loai_sp, '$ten_sp', '$ga_sp', '$mo_ta')";
	mysql_query($sql);
	header("location: index.php");
	}
?>
<form method="post">
    <table border="1">
        <thead>
        <tr>
            <th>Mã loại</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Mô tả sản phẩm</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="id_loai_sp" /></td>
                <td><input type="text" name="ten_sp" /></td>
                <td><input type="text" name="ga_sp" /></td>
                <td><input type="text" name="mo_ta" /></td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="submit">Thêm</button>
</form>
<body>
</body>
</html>