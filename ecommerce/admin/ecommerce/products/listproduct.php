<!doctype html>
<html lang="en">
<head>
    <?php
    require_once "../../../init.php";

    ?>
    <?php include_once ADMIN_ROOT_PATH."/components/head.php"?>
    <title>List products</title>
</head>
<body>
<?php
$query="SELECT * FROM `products`";
$kq=mysqli_query($connection,$query);
?>
    <div class="container">
        <?php include_once ADMIN_ROOT_PATH."/components/top_header.php" ?>
        <div class="row">
            <?php include_once ADMIN_ROOT_PATH."/components/negative.php" ?>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Short description</th>
                            <th>Status</th>
                            <th>Product old</th>
                            <th><a href="<?php echo ADMIN_ROOT_SITE ?>/ecommerce/products/addproduct.php" class="btn btn-primary">Add product</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_array($kq)){ ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['short_description'] ?></td>
                            <td><?php echo $row['published'] ?></td>
                            <td><?php echo $row['product_old'] ?></td>
                            <td>
                                <button class="btn btn-primary btn-danger">Delete</button>
                                <button class="btn btn-primary">Edit</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>