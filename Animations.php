<?php
require "connection.php";


?>


<!DOCTYPE html>

<html>

<head>
    <title>SLStudio | See All Animations</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="headers.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid bg-dark text-light">
        <div class="row">
            <!-- header -->

            <?php

            require "header.php"

            ?>

            <!-- header -->
            <hr>

            <h1 class="text-center fw-bold">Animations</h1>
            <hr>

            <div class="col-12">
                <div class="row">
                    <div class="offset-0 offset-lg-2 col-12 col-lg-6 mb-3">
                        <input type="text" class="form-control" id="filmsearch" onkeyup="animesearch();" aria-label="Text input with dropdown button" placeholder="Search Animations Here..." />
                    </div>
                    <div class="col-12 col-lg-2 d-grid mb-3">
                        <button class="btn btn-success" onclick="animesearch();">Search</button>
                    </div>
                    <div class="col-12 col-lg-2 my-2 text-center">
                        <a href="advancedSearch.php" class="link link-info text-decoration-none">Advanced Search</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <!-- product title view -->
        <div class="row mx-auto" id="product_view_div">
            <?php
            

            $resultset = Database::search("SELECT * FROM `product` WHERE `status_id`='1' AND `category_id`='2' ORDER BY `title` ASC");

            ?>

            <!-- product title view -->

            <!-- product view -->

            <div class="col-12 mb-4 mt-4">
                <div class="row row-cols-1 row-cols-md-4 g-4" id="films">

                    <?php

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

                                <a href="<?php echo "singleproductview.php?id=" . ($prod['id']); ?>" class="h-100"><img src="<?php echo $imgrow["code"] ?>" class="card-img-top h-100" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" title="<?php echo $prod["title"]; ?>" data-bs-content="<?php echo $prod["description"]; ?>"></a>
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
                    ?>
                </div>


            </div>
        </div>

        <hr>
        <!--footer-->
        <?php
        require "footer.php";
        ?>
        <!--footer-->
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="home.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
</body>

</html>