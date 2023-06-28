<!DOCTYPE html>

<html>

<head>
    <title>SLStudio|Admin Sign In</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="text-light women">
    <div class="container-fluid vh-100 justify-content-center">  
        <div class="row align-content-center">

            <div class="col-12">
                <div class="row">
                    
                    <div class="col-12">
                        <p class="title">Welcome to the SL-Studio Admin Panel</p>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="row mt-5">
                    
                    <div class="col-12 col-lg-6 d-block mt-5 p-3">
                        <div class="row g-3">
                            <div class="col-12">
                                <p class="title2">Sign In To Your Account</p>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="e" />
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="adminverification();">Send Verification code to Log In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <a href="index.php" class="btn btn-danger">Back to User's Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="verificatiomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Admin Verification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Enter the verification code you got by an Email.</label>
                            <input type="text" class="form-control" id="v" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-none d-lg-block fixed-bottom">
                <p class="text-center">&copy; 2021 SL-Studio.lk All Rights Reserved</p>
            </div>

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>

</body>

</html>