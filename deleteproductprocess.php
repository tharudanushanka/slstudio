<?php

require "connection.php";

$pid = $_GET["id"];

$product = Database::search("SELECT * FROM `product` WHERE `id`='".$pid."' ");
$pn = $product->num_rows;

if($pn == 1){

    Database::iud("DELETE FROM `images` WHERE `product_id`='".$pid."' ");

    // echo "Image deleted";

    Database::iud("DELETE FROM `recent` WHERE `product_id`='".$pid."' ");

    Database::iud("DELETE FROM `watchlist` WHERE `product_id`='".$pid."' ");

    Database::iud("DELETE FROM `cart` WHERE `product_id`='".$pid."' ");

    Database::iud("DELETE FROM `invoice` WHERE `product_id`='".$pid."' ");

    Database::iud("DELETE FROM `feedback` WHERE `product_id`='".$pid."' ");

    Database::iud("DELETE FROM `product` WHERE `id`='".$pid."' ");

    // echo "product deleted";

    echo "sucsess";

} else {
    echo "Movie does not exist";
}

?>