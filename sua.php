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
            <th>M� s?n ph?m</th>
            <th>M� lo?i</th>
            <th>T�n s?n ph?m</th>
            <th>Gi� s?n ph?m</th>
            <th>M� t? s?n ph?m</th>
        </tr>
        </thead>
        <tbody>
        <?php include_once 'connect.php';
        $ma_sp = $_GET['ma_sp'];
        $sql = "SELECT * FROM san_pham WHERE ma_sp = ''";
        ?>
        <tr>
            <td><input type="text" name="ma_sp" /></td>
            <td><input type="text" name="ma_loai" /></td>
            <td><input type="text" name="ten_sp" /></td>
            <td><input type="text" name="gia_sp" /></td>
            <td><input type="text" name="mo_ta" /></td>
        </tr>
        </tbody>
    </table>
    <button type="submit" name="submit">Th�m</button>
</form>
</body>
</html>