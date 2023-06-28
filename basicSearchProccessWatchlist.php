<?php

session_start();

require "connection.php";
$text = $_GET["s"];
if (!empty($text)) {
    if (isset($_SESSION["u"])) {

        $useremail = $_SESSION["u"]["email"];

        $watchlistrs = Database::search("SELECT * FROM `watchlist` WHERE `user_email`= '" . $useremail . "'");
        $wn = $watchlistrs->num_rows;

        if ($wn == 0) {
            echo "empty";
        } else {
            for ($i = 0; $i < $wn; $i++) {
                $wr = $watchlistrs->fetch_assoc();
                $wid = $wr["product_id"];

                $productrs = Database::search("SELECT * FROM `product` WHERE `id`='" . $wid . "' AND `title` LIKE '%" . $text . "%'");
                $pn = $productrs->num_rows;
                if ($pn == 1) {
                    $pr = $productrs->fetch_assoc();
                    $prodid = $pr["id"];

?>
                    <div class="col">
                        <div class="card bg-secondary mx-auto text-light h-100 pt-2 px-1" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <?php
                                    $imagers = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $prodid . "' ");
                                    $in = $imagers->num_rows;

                                    $arr;

                                    for ($x = 0; $x < $in; $x++) {
                                        $ir = $imagers->fetch_assoc();
                                        $arr[$x] = $ir["code"];
                                    }

                                    ?>
                                    <img src="<?php echo $arr[0]; ?>" class="img-fluid rounded-3">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $pr["title"] ?></h3>
                                        <?php
                                        $colur = Database::search("SELECT * FROM `color` WHERE `id`='" . $pr["color_id"] . "' ");
                                        $c = $colur->fetch_assoc();
                                        $cond = Database::search("SELECT * FROM `condition` WHERE `id`='" . $pr["condition_id"] . "' ");
                                        $co = $cond->fetch_assoc();
                                        ?>
                                        <span class="fw-bold text-warning">IMDB Rating : <?php echo $c["name"] ?></span>&nbsp;
                                        &nbsp;<span class="fw-bold text-black-50">Language : <?php echo $co["name"] ?></span>
                                        <br />
                                        <span class="fw-bold text-black-50 fs-5">Cost : </span>&nbsp;
                                        <span class="fw-bold text-black fs-5">Rs. <?php echo $pr["price"] ?>.00</span>
                                        <br />
                                        <span class="fw-bold text-black-50 fs-5">Seller :</span>

                                        <span class="text-info fw-bold fs-5"><?php echo $_SESSION["u"]["fname"] . " " . $_SESSION["u"]["lname"] ?></span>
                                        <br />
                                        <span class="text-dark fs-6"><?php echo $_SESSION["u"]["email"] ?></span>
                                        <div class="row">
                                            <div class="col-6 d-grid">
                                                <a href="<?php echo "singleproductview.php?id=" . ($pr['id']); ?>" class="btn btn-success mb-2">View More</a>
                                            </div>
                                            <div class="col-6 d-grid">
                                                <a href="#" onclick='addToCart(<?php echo $pr["id"] ?>)' class="btn btn-primary mb-2">Add to Cart</a>
                                            </div>
                                            <div class="col-12 d-grid">
                                                <a href="#" class="btn btn-danger mb-2" onclick="deleteformwatchlist(<?php echo $wr['id'] ?>);">Remove from My Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
                }
            }
        }
    }
} else {
    echo "empty";
}
?>