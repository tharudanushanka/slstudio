<?php

session_start();

require "connection.php";

$category = $_POST["c"];
$brand = $_POST["b"];
$model = $_POST["m"];
$title = $_POST["t"];
$condition = (int)$_POST["co"];
$colour = (int)$_POST["col"];
$qty = (int)$_POST["qty"];
$price = (int)$_POST["p"];
$description = $_POST["desc"];
// $imageFile = $_FILES["img"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$state = 1;

$useremail = $_SESSION["u"]["email"];

if ($category == "0") {
    echo "Please Select a Category";
} else if ($brand == "0") {
    echo "Please Select a Genre";
} else if ($model == "0") {
    echo "Please Select a Type";
} else if (empty($title)) {
    echo "Please Add a Title to your Movie";
} else if (strlen($title) > 100) {
    echo "Title Must Contain 100 or Less than 100 Characters.";
} else if ($qty == "0" || $qty == "e") {
    echo "Please Add a Valid Relased Year";
} else if (!is_int($qty)) {
    echo "Please Add a Valid Year";
} else if (empty($qty)) {
    echo "Please Add the Year";
} else if ($qty < 0) {
    echo "Please Add a Valid Year";
} else if (empty($price)) {
    echo "Please insert the price of your movie";
} else if (!is_int($price)) {
    echo "Please insert a valid price";
} else if (empty($description)) {
    echo "Please enter the description of your Movie";
} else {
    $modelHasBrand = Database::search("SELECT `id` FROM `model_has_brand` WHERE `brand_id`='" . $brand . "' AND `model_id`='" . $model . "' ");

    if ($modelHasBrand->num_rows == 0) {
        echo "The Movie Doesn't Exist";
    } else {
        $f = $modelHasBrand->fetch_assoc();
        $modelHasBrandID = $f["id"];

        Database::iud("INSERT INTO `product`(`category_id`,`model_has_brand_id`,`title`,`color_id`,`price`,`qty`,`description`,`condition_id`,`status_id`,`user_email`,`datetime_added`)
        VALUES('" . $category . "','" . $modelHasBrandID . "','" . $title . "','" . $colour . "','" . $price . "','" . $qty . "','" . $description . "','" . $condition . "','" . $state . "','" . $useremail . "','" . $date . "')");

        echo "Movie Added Successfully!";

        $last_id = Database::$connection->insert_id;

        $imageFile = $_FILES["img"];

        if (isset($_FILES["img"])) {

            $fileName = "resources//products//" . uniqid() . ".png";
            move_uploaded_file($imageFile["tmp_name"], $fileName);
        } else {
            echo "Please select an image";
        }

        Database::iud("INSERT INTO `images`(`code`,`product_id`) VALUES('" . $fileName . "','" . $last_id . "') ");
        echo "Image Saved Successfully!";


    }
}
