<!doctype html>
<html lang="en">
<head>
    <?php
    require_once "init_frontend.php";
    require_once FRONT_END_ROOT_PATH."/components/head.php";
    ?>
    <title>Trang chủ</title>
</head>
<body>

<div class="container">
    <header class="header">
        <div class="row">
            <div class="col-md-6">logo o day</div>
            <div class="col-md-6">banner o day</div>
        </div>
    </header>
    <section class="menu">
        <div class="row">
            <div class="col-md-12">
                menu ngang o day
            </div>
        </div>
    </section>
    <section class="promotion-product">
        <?php require_once FRONT_END_ROOT_PATH."/modules/promo_product.php"; ?>
    </section>
    <section class="new-product">
        <?php require_once FRONT_END_ROOT_PATH."/modules/new_product.php"; ?>
    </section>
    <?php require_once FRONT_END_ROOT_PATH."/components/footer.php"; ?>


</div>
</body>
</html>