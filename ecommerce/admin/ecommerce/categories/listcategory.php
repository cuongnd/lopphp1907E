<!doctype html>
<html lang="en">
<head>
    <?php
    require_once "../../../init.php";
    require_once ADMIN_ROOT_PATH."/components/head.php";
    ?>
    <title>Index</title>
</head>
<body>
<?php

if(!App::check_login()){
    header("location:login.php");
}
$query="SELECT * FROM categories";
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
                        <th>ID</th>
                        <th>Title</th>
                        <th>Ordering</th>
                        <th>Status</th>
                        <th><button class="btn btn-primary">Add category</button></th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row=mysqli_fetch_array($kq)){ ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['ordering'] ?></td>
                        <td><?php echo $row['published'] ?></td>
                        <td><button class="btn btn-primary btn-danger">Delete</button><button class="btn btn-primary">Edit</button></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>