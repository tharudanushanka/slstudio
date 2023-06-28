<?php
require "connection.php";
?>

<!DOCTYPE html>

<html>

<head>

    <title>SLStudio|Add Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="addproduct.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container-fluid bg-dark text-light">
        <div class="row gy-3">
            <?php
            require "header.php";
            ?>
            <hr class="hrbreak1">
            <!-- heading -->
            <div id="addproductbox" class="mt-4">
                <div class="col-12 mb-2">
                    <h2 class="h2 display-5 text-center text-primary fw-bold">Movie Listing</h2>
                </div>
                <!-- heading -->
                <div class="col-12">
                    <hr />
                </div>
                <!-- category,brand,nodel -->

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Select the Category</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="form-select" id="ca">
                                        <option value="0">Select Category</option>
                                        <?php

                                        $rs1 = Database::search("SELECT * FROM `category`");
                                        $n1 = $rs1->num_rows;

                                        for ($i = 1; $i <= $n1; $i++) {
                                            $cat = $rs1->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $cat["id"] ?>"><?php echo $cat["name"] ?></option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Select Genre 1</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="form-select" id="br">
                                        <option value="0">Select Genre</option>
                                        <?php

                                        $rs2 = Database::search("SELECT * FROM `brand`");
                                        $n2 = $rs2->num_rows;

                                        for ($i = 1; $i <= $n2; $i++) {
                                            $brand = $rs2->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $brand["id"] ?>"><?php echo $brand["name"] ?></option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Select the Type</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="form-select" id="mo">
                                        <option value="0">Select Type</option>
                                        <?php

                                        $rs3 = Database::search("SELECT * FROM `model`");
                                        $n3 = $rs3->num_rows;

                                        for ($i = 1; $i <= $n3; $i++) {
                                            $mod = $rs3->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $mod["id"] ?>"><?php echo $mod["name"] ?></option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- category,brand,nodel -->

                <hr class="hrbreak1" />

                <!-- title -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Add a Title to your Movie</label>
                        </div>
                        <div class="offset-lg-2 col-12 col-lg-8">
                            <input class="form-control" type="text" id="ti" />
                        </div>
                    </div>
                </div>

                <!-- title -->

                <hr class="hrbreak1" />

                <!-- condition,color,qtv -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-lable lbl1">Select Language</label>
                                </div>
                                <div class="offset-1 col-11 col-lg-3 ms-5 form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="bn" checked>
                                    <label class="form-check-label" for="bn">
                                        English
                                    </label>
                                </div>
                                <div class="offset-1 col-11 col-lg-3 ms-5 form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="us">
                                    <label class="form-check-label" for="us">
                                        Other
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-lable lbl1">Select Rating</label>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr1" checked>
                                            <label class="form-check-label" for="clr1">
                                                9+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr2">
                                            <label class="form-check-label" for="clr2">
                                                8+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr3">
                                            <label class="form-check-label" for="clr3">
                                                7+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr4">
                                            <label class="form-check-label" for="clr4">
                                                6+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr5">
                                            <label class="form-check-label" for="clr5">
                                                5+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr6">
                                            <label class="form-check-label" for="clr6">
                                                4+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr7">
                                            <label class="form-check-label" for="clr7">
                                                3+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr8">
                                            <label class="form-check-label" for="clr8">
                                                2+
                                            </label>
                                        </div>
                                        <div class="offset-1 offset-lg-0 col-5 col-lg-4 form-check">
                                            <input class="form-check-input" type="radio" name="clorRadio" value="" id="clr9">
                                            <label class="form-check-label" for="clr9">
                                                1+
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-lable lbl1">Add the Released Year</label>
                                    <input class="form-control" type="number" value="0" min="1900" id="qty" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- condition,color,qtv -->

                <hr class="hrbreak1" />

                <!-- cost,payment method -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Price in Rupees</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="number" min="1" class="form-control" aria-label="Amount (to the nearest dollar)" id="cost">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label lbl1">Approved Payment Methods</label>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="offset-2 col-2 pm1"></div>
                                        <div class="col-2 pm2"></div>
                                        <div class="col-2 pm3"></div>
                                        <div class="col-2 pm4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- cost,payment method -->

                <hr class="hrbreak1" />

                <!-- description -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Add a Brief Description About the Movie</label>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" cols="10" rows="6" style="background-color: ghostwhite;" id="desc"></textarea>
                        </div>
                    </div>
                </div>

                <!-- description -->
                <hr class="hrbreak1">
                <!-- product img -->

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label lbl1">Add an Image of your Movie</label>
                        </div>
                        <div class="col-12">
                            <div class="row">

                                <div class="col-6 col-md-4">
                                    <img class="col-12 col-lg-6 ms-2 img-thumbnail" id="prev" src="resources/addproductimg.svg" />
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 mt-2">
                                                <div class="row">
                                                    <div class="col-12 col-lg-10">
                                                        <input class="d-none" type="file" accept="img/*" id="imguploader" />
                                                        <label class="btn btn-primary col-12 col-lg-8" for="imguploader" onclick="changeImage();">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- product img -->

                <hr class="hrbreak1" />

                <!-- notice -->

                <div class="col-12">
                    <label class="form-label lbl1">Notice...</label>
                    <br />
                    <label class="form-label">We are taking 5% of the product price from every product as a service charge</label>
                </div>

                <!-- notice -->

                <!-- save btn -->
                <div class="col-12">
                    <div class="row">
                        <div class="offset-lg-4 col-12 col-lg-4 d-grid">
                            <button class="btn btn-success searchbtn" onclick="addProduct();">Add your Movie</button>
                        </div>
                    </div>
                </div>
                <hr class="hrbreak1">
                <!-- save btn -->
            </div>
        </div>

        <!-- footer -->
        <?php
        require "footer.php";
        ?>
        <!-- footer -->

    </div>



    <script src="home.js"></script>
    <script src="addproduct.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>