<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table border="1">
        <thead>
        <tr>
            <th>ID sản phẩm</th>
            <th>ID loại sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Mô tả sản phẩm</th>
        </tr>
        </thead>
        <tbody>
        <?php include_once 'connect.php';
        $id_sp = $_GET['id_san_pham'];
        $sql = "SELECT * FROM san_pham WHERE id_san_pham = ''";
        ?>
        <tr>
            <td><input type="text" name="id_san_pham" /></td>
            <td><input type="text" name="id_loai_sp" /></td>
            <td><input type="text" name="ten_sp" /></td>
            <td><input type="text" name="gia_sp" /></td>
            <td><input type="text" name="mo_ta" /></td>
        </tr>
        </tbody>
    </table>
    <button type="submit" name="submit">Thêm</button>
</form>
</body>
</html>