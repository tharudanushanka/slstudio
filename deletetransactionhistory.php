<?php

require "connection.php";

$id = $_POST["id"];

Database::iud("DELETE FROM `invoice` WHERE `product_id` = '".$id."'");

echo "Movie Removed from the Transaction History";


?>