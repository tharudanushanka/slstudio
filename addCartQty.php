<?php

session_start();

require "connection.php";

$total = "0";
$subTotal = "0";
$shipping = "0";


if (isset($_SESSION["u"])) {

    $uemail = $_SESSION["u"]["email"];


    $catrs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $uemail . "'");
    $cn = $catrs->num_rows;

    if ($cn == 0) {
        echo "no items in your cart";
    } else {
        for ($i = 0; $i < $cn; $i++) {

            $id = $_GET["id"];
            $qty = $_GET["qty"];

            $q = Database::iud("UPDATE `cart` SET `qty` = '" . $qty . "' WHERE `id` = '" . $id . "' ");

            $catrs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $uemail . "' AND `id`='".$id."'");
            $cn = $catrs->num_rows;

            $cr = $catrs->fetch_assoc();

            $productrs = Database::search("SELECT * FROM `product` WHERE `id` = '" . $cr["product_id"] . "'");
            $pr = $productrs->fetch_assoc();

            $addressrs = Database::search("SELECT * FROM `user_has_address` WHERE `user_email`='" . $uemail . "'");
            $ar = $addressrs->fetch_assoc();
            $cityid = $ar["city_cid"];

            $districtrs = Database::search("SELECT * FROM `city` WHERE `cid`='" . $cityid . "'");
            $xr = $districtrs->fetch_assoc();
            $districtid = $xr["district_did"];


            $ship = "0";

            if ($districtid == 2) {
                $ship = $pr["delivery_fee_colombo"];
                $shipping = $shipping + $pr["delivery_fee_colombo"];
            } else {
                $ship = $pr["delivery_fee_other"];
                $shipping = $shipping + $pr["delivery_fee_other"];
            }
            $total = ($total + ($pr["price"] * $cr["qty"])) + $shipping;
        }
        echo $total;
    }
}
