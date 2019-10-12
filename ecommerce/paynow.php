<!doctype html>
<html lang="en">
<head>
    <?php
    require_once "init_frontend.php";
    require_once FRONT_END_ROOT_PATH . "/components/head.php";
    ?>
    <title>Trang chủ</title>
</head>
<body>

<div class="container">
    <?php require_once FRONT_END_ROOT_PATH . "/components/banner_menu.php"; ?>

    <?php if (isset($_GET['action']) && $_GET['action'] == "pay_now") {
        //save oder
        $total = 0;
        foreach ($_SESSION['cart'] as $key => $product) {
            $current_price = $product['sale_price'] != 0 ? $product['sale_price'] : $product['price'];
            $total_current_product = $current_price * $product['quality'];
            $total += $total_current_product;
        }

        //save info contact
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $user = App::get_user();
        $user_id = $user->id;
        $query = "INSERT INTO `customers` (`id`, `user_id`, `last_name`, `first_name`, `phone_number`, `address`, `block`) 
                VALUES (NULL, '$user_id', '$last_name', '$first_name', '$phone_number', '$address', '0');";
        mysqli_query($connection, $query);
        $new_customer_insert_id = mysqli_insert_id($connection);


    } ?>

    <?php require_once FRONT_END_ROOT_PATH . "/components/footer.php"; ?>


</div>
</body>
</html>