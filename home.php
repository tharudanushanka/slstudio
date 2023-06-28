<?php
require "connection.php";


?>


<!DOCTYPE html>

<html>

<head>
    <title>SLStudio | Home</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="headers.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">

            <!-- header -->

            <?php

            require "header.php"

            ?>

            <!-- header -->

            <hr class="text-light">
            <!-- slide  -->
            <div class="row d-none d-lg-block">
                <div id="carouselExampleCaptions" class="col-12 carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="resources/slider images/thumb-1920-1091219.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block postercaption">
                                <h2 class="postertitle">Welcome to SL-Studio</h2>
                                <p class="postertext">Unlimited Movies, TV shows & More...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/6bwbcxcr2pn21.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/615221.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/MoneyHeist.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block postercaption">
                                <h5 class="postertitle">Enjoy on your TV</h5>
                                <p class="postertext">Watch Anywhere , Anytime</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/134-1344823_the-last-ship-wallpaper-last-ship.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/324a511fb2d414841cf6458088aa5d35.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/the-100-season-7-i6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/teen-wolf.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/wp1913208.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block postercaption1">
                                <h5 class="postertitle">Feel the Fear</h5>
                                <p class="postertext">Save your Favourites..</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/wp3078262.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/wp3418450.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/wp4275032.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/thumb-1920-806432.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block postercaption1">
                                <h5 class="postertitle">Action | Adventure | Horror | Thriller</h5>
                                <p class="postertext">All Kinds of Movies that Suits your Choice..</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="resources/slider images/1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- slide -->


            <div class="row" style="background-color: black;">
                <div class="col-12 col-md-6 text-white my-auto">
                    <h2 class="postertitle mx-4 mt-4">Enjoy on your own TV</h2>
                    <h3 class="mx-4 mt-4 mb-2">Watch on Smart TV's, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more</h3>
                </div>
                <div class="col-md-6 col-12">
                    <div id="tv_container" class="d-sm-block">
                        <video width="465" height="260" autoplay muted>
                            <source src="resources/Teen Wolf __ All Opening Titles_HD.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>

            <div class="row" style="background-color: black;">
                <div class="col-12 col-md-6">
                    <img src="resources/mobile-0819.jpg" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 text-white my-auto">
                    <h1 class="postertitle mx-4 mt-4">Download your shows to watch offline</h1>
                    <h3 class="mx-4 mt-4 mb-5">Save your favorites easily and always have something to watch</h3>
                </div>
            </div>
            <hr>

            <!-- product title view -->
            <div class="row" id="product_view_div">
                <?php
                $rs = Database::search("SELECT * FROM `category`");
                $n = $rs->num_rows;

                for ($x = 0; $x < $n; $x++) {
                    $c = $rs->fetch_assoc();
                ?>


                    <div class="col-12">
                        <a class="link-light link2 fs-1" href="<?php echo $c["name"]; ?>.php"><?php echo $c["name"]; ?></a>&nbsp;&nbsp;
                        <a class="link-light link3 fs-6" href="<?php echo $c["name"]; ?>.php">See All &rightarrow;</a>&nbsp;&nbsp;
                    </div>

                    <?php

                    $resultset = Database::search("SELECT * FROM `product` WHERE `status_id`='1' AND `category_id`='" . $c["id"] . "' ORDER BY `datetime_added` DESC  LIMIT 4 OFFSET 0  ");

                    ?>

                    <!-- product title view -->

                    <!-- product view -->

                    <div class="col-12 mb-4 mt-4">
                        <div class="row row-cols-1 row-cols-md-4 g-4" id=" pdeatails">

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
                            ?>
                        </div>


                    </div>

                    <!--Product view-->
                <?php
                }
                ?>
            </div>
            <hr class="text-light">

            <div class="row" style="background-color: black;">
                <div class="col-12 col-md-6 text-white my-auto">
                    <h2 class="postertitle mx-4 mt-4">Watch everywhere</h2>
                    <h3 class="mx-4 mt-4 mb-2">Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV</h3>
                </div>
                <div class="col-md-6 col-12 p-5">
                    <img src="resources/3.jpg" class="img-fluid">
                </div>
            </div>

            <div class="row" style="background-color: black;">
                <div class="col-12 col-md-6">
                    <img src="resources/5.png" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 text-white my-auto">
                    <h1 class="postertitle mx-4 mt-4">Create profiles which suits to kids</h1>
                    <h3 class="mx-4 mt-4 mb-5">Send kids on adventures with their favorite characters in a space made just for them with your every purchase.</h3>
                </div>
            </div>

            <hr class="hrbreak1">

            <div class="col-md-10 offset-md-1 col-12 mb-5 text-light p-3">
                <h1 class="postertitle text-center">Frequently Asked Questions</h1>

                <div class="row mt-3 g-4">
                    <div class="col-md-6 col-12 d-grid">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-lg p-4 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            What is SL-Studio?
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-2" id="exampleModalLabel">What is SL-Studio?</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                        SL-Studio is a Online Movie Store with streaming services that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of IOT devices.
                                        <br />
                                        <br />
                                        You can watch as much as you want, whenever you want without a single commercial – There's always something new to discover and new TV shows and movies are added every week!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 d-grid">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-lg p-4 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            How much does a Movie or Series Cost in SL-Studio?
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-2" id="exampleModalLabel">How much does a Movie or Series Cost in SL-Studio?</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                        Watch SL-Studio on your smartphone, tablet, Smart TV, laptop, or on streaming devices, all for an affordable price range. Plans range from Rs.1,000 to Rs.9,999. No extra costs, no contracts.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 d-grid">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-lg p-4 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            Where can I Watch?
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-2" id="exampleModalLabel">Where can I Watch?</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                        Watch anywhere, anytime. Sign in with your SL-Studio account to watch instantly on the web at slstudio.lk from your personal computer or on any internet-connected devices, including smart TVs, smartphones, tablets, streaming media players and game consoles.
                                        <br />
                                        <br />
                                        You can also download your favorite shows with the iOS, Android or using Web Browser. Use downloads to watch while you're on the go and without an internet connection. Take SL-Studio with you anywhere.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 d-grid">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-lg p-4 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            Do you give offers or packages?
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-2" id="exampleModalLabel">Do you give offers or packages?</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                        SL-Studio has various kinds of Packages + Offers according to your wish, Choose the best Plan that suits you and enjoy unlimited latest movies in any of your devices.
                                        <br />
                                        <br />
                                        We also give offers for highly estimated clients who buy movie collections from us. Feel free to contact us in any reason.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 d-grid">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-lg p-4 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            What can I watch on SL-Studio?
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-2" id="exampleModalLabel">What can I watch on SL-Studio?</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                        SL-Studio has an extensive library of all kinds of featured films, documentaries, TV shows, animations, award-winning Netflix movies and tv shows, and more. Watch as much as you want, anytime you want.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 d-grid">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-lg p-4 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            Is SL-Studio good for Children?
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-2" id="exampleModalLabel">Is SL-Studio good for Children?</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5">
                                        The SL-Studio Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space.
                                        <br>
                                        <br>
                                        Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <hr class="hrbreak1">
            <!--footer-->
            <?php
            require "footer.php";
            ?>
            <!--footer-->

            <!--container end-->
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="home.js"></script>
</body>

</html>