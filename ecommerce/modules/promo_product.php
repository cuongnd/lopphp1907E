<?php
$query="SELECT * FROM `products` WHERE promo=1";
$kq=mysqli_query($connection,$query);
?>
<h3>Promotion products</h3>
<div class="row">
<?php
while ($row = mysqli_fetch_array($kq)) {
    ?>
    <div class="col-md-3">
        <div class="item-product">
            <div class="wrapper-content-image">anh se hien thi o day</div>
            <div class="item-footer">
                <h3><?php echo $row['title'] ?></h3>
                <div>
                    Price:<span><?php echo $row['price'] ?></span>
                </div>
                <button class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <?php
}
    ?>
</div>
