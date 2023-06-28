<?php

session_start();
require "connection.php";

if (isset($_SESSION["u"])) {
    $uemail = $_SESSION["u"]["email"];

    $total = "0";
    $subTotal = " 0";
    $shipping = "0";
?>

    <!DOCTYPE html>

    <html>

    <head>
        <title>SL Studio| Cart</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="resources/logo.svg">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="container-fluid bg-dark text-light">
            <div class="row gx-2 gy-2">
                <?php require "headerforWishlist.php"; ?>
                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <label class="form-label fs-1 fw-bold text-info">- My Cart -</label>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-0 offset-lg-2 mb-3">
                                    <input type="text" class="form-control" id="basic_search_w" onkeyup="cartsearch();" placeholder="Search the Cart...">
                                </div>
                                <div class="col-12 col-lg-2 d-grid mb-3">
                                    <button class="btn btn-primary" onclick="cartsearch();">Search</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12 col-lg-6">

                        </div>

                        <?php

                        $catrs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $uemail . "'");
                        $cn = $catrs->num_rows;

                        if ($cn == 0) {
                        ?>
                            <div class="col-12 col-lg-7 offset-lg-1 p-5 p-lg-0">
                                <div class="row">
                                    <div class="col-12 emptycart"></div>
                                    <div class="col-12 text-center mb-2">
                                        <label class="form-label fs-1 ">Your Cart is Empty!</label>
                                    </div>
                                    <div class="offset-0 offset-lg-4 col-lg-4 col-12 d-grid mb-4">
                                        <a href="home.php" class="btn btn-success fs-3">Start Watching</a>
                                    </div>
                                </div>
                            </div>
                        <?php

                        } else {
                        ?>

                            <div class="col-12 col-lg-7 offset-lg-1 p-5 p-lg-0">
                                <div class="row" id="product_view_div">

                                    <?php

                                    for ($i = 0; $i < $cn; $i++) {
                                        $cr = $catrs->fetch_assoc();

                                        $productrs = Database::search("SELECT * FROM `product` WHERE `id` = '" . $cr["product_id"] . "'");
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

                                        <div class="modal" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Modal body text goes here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card end -->
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                        <?php


                        }

                        ?>

                        <div class="col-12 col-lg-3 p-5 p-lg-0">
                            <div class="row border border-2 border-primary p-2">
                                <div class="col-12">
                                    <label class="form-label fw-bold fs-3 text-warning">Summary</label>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-6">
                                    <span class="fs-6 fw-bold">Items (<?php echo $cn; ?>)</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="fs-6 fw-bold">Rs.<?php echo $total; ?>.00</span>
                                </div>

                                <div class="col-12 mt-3">
                                    <hr>
                                </div>
                                <div class="col-6">
                                    <span class="fs-4 fw-bold">Total</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="fs-4 fw-bold">Rs.<?php echo $total ?>.00</span>
                                </div>
                                <div class="col-12">
                                    <hr>
                                    <hr>
                                </div>
                                <div class="col-12 mt-3 mb-3 d-grid">
                                    <button class="btn btn-primary fs-5 fw-bold" onclick="paynow(<?php echo $pr['price']; ?>);">CHECKOUT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <?php require "footer.php"; ?>

            </div>
        </div>

        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script src="home.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        </script>
    </body>

    </html>



<?php
}

?>