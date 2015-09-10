<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <!-- <link href="style/style.less" rel="stylesheet/less" type="text/css" />
    <script type="text/javascript" src="js/less.min.js"></script> -->
</head>
<body>
<section id="wrapper">
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
                    <th>ID sản phẩm</th>
                    <th>Tên loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th colspan="2"><a href="them.php">Thêm mới sản phẩm</a></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("connect.php");
                $sql = "SELECT * FROM san_pham INNER JOIN loai_sp ON loai_sp.id_loai_sp=san_pham.id_loai_sp";
                $query = mysql_query($sql);
                while ($rows = mysql_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $rows['id_san_pham']; ?></td>
                        <td><?php echo $rows['ten_loai']; ?></td>
                        <td><?php echo $rows['ten_sp']; ?></td>
                        <td><?php echo $rows['ga_sp']; ?></td>
                        <td><?php echo $rows['mo_ta']; ?></td>
                        <td><a href="sua.php?id_san_pham=<?php echo $rows['id_san_pham']; ?>">Sửa</a></td>
                        <td><a href="delete.php?id_san_pham=<?php echo $rows['id_san_pham']; ?>">Xóa</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
    </article>
</section>
</body>
</html>
