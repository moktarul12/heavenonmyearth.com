<?php 
    include_once "inc/db.php";
    include_once "inc/functions.php";

    if (isset($_POST['loginFormBtn'])) {
        $data['username'] = mysqli_real_escape_string($con, $_POST['username']);
        $data['password'] = mysqli_real_escape_string($con, $_POST['password']);
        get_login_user($data);
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Heave On My Earth - 2018 || Admin Panel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>
<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">H.O.M.E</h2>
            <!--// main-heading -->
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                        <form  method="POST" name="loginForm" id="loginForm" class="loginForm">
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="User Name" required="required">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                              </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-block btn-section" name="loginFormBtn" id="loginFormBtn" value="Login">
                            <div id="statusmessage"></div>
                        </form>
                        <!-- <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                            <a href="register.html">Create an account</a>
                        </p> -->
                        <h1 class="paragraph-agileits-w3layouts mt-2">
                            <a href="index.html">Back to Home</a>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Heaven On My Earth. All Rights Reserved</p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>