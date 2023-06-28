<!DOCTYPE html>

<html>

<head>
    <title>SL-Studio | Login & SignUp</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="main-background">

    <div class="container-fluid vh-100 d-flex justify-content-center">

        <div class="row align-content-center">
            <!-- content -->
            <div class="col-12 px-5">
                <div class="row">
                    <div class="col-6 d-none d-lg-block">

                    </div>
                    <div class="col-12 col-lg-6 signup p-4" id="signUpBox">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <img src="resources/slstudio.svg" alt="">
                            </div>
                        </div>
                        <div class="row g-1">
                            <div class="col-12 my-auto">
                                <p class="title2 text-white">Create New Account</p>
                                <p class="text-danger" id="msg"></p>
                            </div>

                            <div class="col-6">
                                <label class="form-label text-white">First Name</label>
                                <input class="form-control" type="text" id="fname" />
                            </div>

                            <div class="col-6">
                                <label class="form-label text-white">Last Name</label>
                                <input class="form-control" type="text" id="lname" />
                            </div>

                            <div class="col-12">
                                <label class="form-label text-white">Email</label>
                                <input class="form-control" type="text" id="email" />
                            </div>

                            <div class="col-12">
                                <label class="form-label text-white">Password</label>
                                <input class="form-control" type="password" id="password" />
                            </div>

                            <div class="col-6">
                                <label class="form-label text-white">Mobile</label>
                                <input class="form-control" type="text" id="mobile" />
                            </div>

                            <div class="col-6">
                                <label class="form-label text-white">Gender</label>
                                <select class="form-select" id="gender">
                                    <?php
                                    require "connection.php";
                                    $r = Database::search("SELECT * FROM `gender`");
                                    $n = $r->num_rows;
                                    for ($x = 0; $x < $n; $x++) {
                                        $d = $r->fetch_assoc();
                                    ?>
                                        <option value="<?php echo $d["id"] ?>"><?php echo $d["name"] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12 col-lg-6 d-grid mt-2">
                                <button class="btn btn-primary" onclick="signUp();">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid mt-2">
                                <button class="btn btn-dark" onclick="changeView()">Already have an account? Sign In</button>
                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-6 d-none signup p-4" id="signInBox">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <img src="resources/slstudio.svg" alt="">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 my-auto">
                                <p class="title2 text-white">Sign In To Your Account</p>
                                <p class="text-danger" id="msg2"></p>
                            </div>


                            <div class="col-12">

                                <?php

                                $e = "";
                                $p = "";

                                if (isset($_COOKIE["e"])) {
                                    $e = $_COOKIE["e"];
                                }

                                if (isset($_COOKIE["p"])) {
                                    $p = $_COOKIE["p"];
                                }

                                ?>

                                <label class="form-label text-white">Email</label>
                                <input class="form-control" value="<?php echo $e; ?>" type="text" id="email2" />
                            </div>

                            <div class="col-12">
                                <label class="form-label text-white">Password</label>
                                <input class="form-control" value="<?php echo $p; ?>" type="password" id="password2" />
                            </div>

                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label text-white">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <a href="#" onclick="fogotPassword();" class="text-white">Forgot Password?</a>
                            </div>


                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="signIn();">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-danger" onclick="changeView()">New to SLStudio? Join Now</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- content -->

            <!-- footer  -->
            <div class="col-12 d-none d-lg-block fixed-bottom">
                <p class="text-center text-white">&copy; 2021 SLStudio.lk All Rights Reserved</p>
            </div>
            <!-- footer -->

            <!-- model -->
            <div class="modal fade" tabindex="-1" id="forgetPasswordModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Password Reset</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="password" id="np" />
                                        <button class="btn btn-outline-primary" type="button" id="npb" onclick="showPassword1();">Show</button>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <label class="form-label">Re-type Password</label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="password" id="rnp" />
                                        <button class="btn btn-outline-primary" type="button" id="rnpb" onclick="showPassword2();">Show</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Verification Code</label>
                                    <input class="form-label" type="text" id="vc" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- model -->

        </div>


    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>