<?php

require "connection.php";

if (isset($_GET["s"])) {
    $text = $_GET["s"];
    if (!empty($text)) {
        $resultset = Database::search("SELECT * FROM `product` WHERE `status_id`='1' AND `category_id`='2' AND `title` LIKE '%" . $text . "%' ");

        $nr = $resultset->num_rows;
        for ($y = 0; $y < $nr; $y++) {
            $prod = $resultset->fetch_assoc();
?>
            <div class="col">
                <div class="card h-100 border border-1 border-light text-light bg-dark">

                    <?php

                    $pimage = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $prod["id"] . "' ");
                    $imgrow = $pimage->fetch_assoc();

                    ?>

                    <a href="<?php echo "singleproductview.php?id=" . ($prod['id']); ?>" class="h-100"><img src="<?php echo $imgrow["code"] ?>" class="card-img-top h-100"></a>
                    <div class="card-body d-grid">
                        <h6 class="card-title fs-2"><?php echo $prod["title"]; ?></h6>
                        <span class="card-text text-primary fw-bold fs-5">Cost :- Rs. <?php echo $prod["price"]; ?>.00</span>
                        <a href="<?php echo "singleproductview.php?id=" . ($prod['id']); ?>" class="btn btn-light mt-1 fw-bold ">View More</a>
                        <div class="row g-1">
                            <div class="col-6 d-grid">
                                <a href="#" onclick='addToCart(<?php echo $prod["id"] ?>)' class="btn btn-primary mt-1 mb-1">Add to Cart</a>
                            </div>
                            <div class="col-6 d-grid">
                                <a href="#" class="btn btn-danger mt-1 mb-1" onclick="addToWatchList(<?php echo $prod['id']; ?>);"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
<?php
        }
    }else{
        echo "empty";
    }
}
?>
