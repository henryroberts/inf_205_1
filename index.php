<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
    <link href="style/style.less" rel="stylesheet/less" type="text/css" />
    <script language="JavaScript" src="js/less.min.js"></script>
</head>
<body>
<div id="wrapper">
    <aside>
        <h3>Category</h3>
        <ul>
            <li><a href="#">User management</a></li>
            <li class="active"><a href="#">Product management</a></li>
            <li><a href="#">Invoice management</a></li>
        </ul>
    </aside>
    <article>
        <h1>PRODUCT MANAGEMENT</h1>
        <form method="post">
            <table border="1">
                <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th colspan="2"><a href="them.php">Thêm mới sản phẩm</a></th>
                </tr>
                </thead>
                <tbody>
                <?php
				include_once("connect.php");
                $sql = "SELECT * FROM san_pham";
                $query = mysql_query($sql);
                while ($rows = mysql_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $rows['ma_sp']; ?></td>
                    <td><?php echo $rows['ma_loai']; ?></td>
                    <td><?php echo $rows['ten_sp']; ?></td>
                    <td><?php echo $rows['gia_sp']; ?></td>
                    <td><?php echo $rows['mo_ta']; ?></td>
                    <td><a href="sua.php?ma_sp=<?php echo $rows['ma_sp']; ?>">Sửa</a></td>
                    <td><a href="delete.php?ma_sp=<?php echo $rows['ma_sp']; ?>">Xóa</a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
    </article>
</div><!--end wrapper-->
</body>
</html>
