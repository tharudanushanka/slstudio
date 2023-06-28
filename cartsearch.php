<?php

session_start();
require "connection.php";
$text = $_GET["s"];
if (!empty($text)) {
    if (isset($_SESSION["u"])) {
        $uemail = $_SESSION["u"]["email"];

        $total = "0";
        $subTotal = "0";
        $shipping = "0";

        $catrs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $uemail . "'");
        $cn = $catrs->num_rows;

        if ($cn == 0) {
            echo "empty";
        } else {
            for ($i = 0; $i < $cn; $i++) {
                $cr = $catrs->fetch_assoc();

                $productrs = Database::search("SELECT * FROM `product` WHERE `id` = '" . $cr["product_id"] . "' AND `title` LIKE '%" . $text . "%' ");
                $pron = $productrs->num_rows;
                if ($pron == 1) {
                    $pr = $productrs->fetch_assoc();

                    $total = $total + ($pr["price"] * $cr["qty"]);

                    $addressrs = Database::search("SELECT * FROM `user_has_address` WHERE `user_email`='" . $uemail . "'");
                    $ar = $addressrs->fetch_assoc();
                    $cityid = $ar["city_cid"];

                    $districtrs = Database::search("SELECT * FROM `city` WHERE `cid`='" . $cityid . "'");
                    $xr = $districtrs->fetch_assoc();
                    $districtid = $xr["district_did"];


                    // echo $total
                    $sellers = Database::search("SELECT * FROM `user` WHERE `email`='" . $pr["user_email"] . "' ");
                    $sn = $sellers->fetch_assoc()

?>

                    <!-- card start -->
                    <div class="card mb-3 mx-0 col-12 col-lg-10 bg-dark border border-2 border-primary text-light">
                        <div class="row g-0">
                            <div class="col-md-12 mt-3 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fw-bold fs-5">Seller :</span>&nbsp;
                                        <span class="fw-bold fs-5"><?php echo $sn["fname"] . " " . $sn["lname"] ?></span>&nbsp;
                                    </div>
                                </div>
                            </div>

                            <hr class="text-primary">

                            <?php
                            $imagers = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $pr["id"] . "' ");
                            $in = $imagers->num_rows;

                            $arr;

                            for ($x = 0; $x < $in; $x++) {
                                $ir = $imagers->fetch_assoc();
                                $arr[$x] = $ir["code"];
                            }

                            ?>

                            <div class="col-md-4 mb-1">
                                <img src="<?php echo $ir['code']; ?>" class="img-fluid rounded-start d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" title="<?php echo $pr["title"]; ?>" data-bs-content="<?php echo $pr["description"]; ?>" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="card-title fw-bold"><?php echo $pr["title"]; ?></h1>
                                    <?php
                                    $colur = Database::search("SELECT * FROM `color` WHERE `id`='" . $pr["color_id"] . "' ");
                                    $c = $colur->fetch_assoc();
                                    $cond = Database::search("SELECT * FROM `condition` WHERE `id`='" . $pr["condition_id"] . "' ");
                                    $co = $cond->fetch_assoc();
                                    ?>
                                    <hr>
                                    <label class="fs-5 text-warning"><span class="badge bg-warning text-dark fs-6">IMDb</span> Rating : <?php echo $c["name"] ?></label>
                                    <i class="fa fa-star mt-1 text-warning fs-6"></i>&nbsp;&nbsp;
                                    <span class="text-info">Language : <label class="text-light"><?php echo $co["name"]; ?></label></span>
                                    <hr>
                                    <span class="text-info fs-2">Price :</span>&nbsp;
                                    <span class="text-black fs-2">Rs.<?php echo $pr["price"]; ?>.00</span>
                                    <div class="d-grid mt-1">
                                        <a href="<?php echo "singleproductview.php?id=" . ($pr['id']); ?>" class="btn btn-success mb-2">Purchase Now</a>
                                        <a class="btn btn-danger mb-2" onclick="deleteformcart(<?php echo $cr['id']; ?>);">Remove from My Cart</a>
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