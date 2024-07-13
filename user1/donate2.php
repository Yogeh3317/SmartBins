<?php

// Start the session
session_start();

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SmartBin</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css.css" />
    <style>
        small {
            color: red;
        }
    </style>
</head>

<body>

<a href="home.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i>Go To Home</span>
        </button>
    </a>

    <?php

    // Set session variables
    $_SESSION["name"] = $_POST["fname"] . " " . $_POST["lname"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["gender"] = $_POST["gender"];

    ?>



    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Thanks For Choosing us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> conatct</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Volunteer Form Starts Here ************************** -->
    <!-- php code for form validation -->
    <?php

    $errorname = $erroremail = $errorphone = $genderErr = $addressErr = "";
    $name = $email = $phone = $gender = $address = "";

    $anyErr = false;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // name
        if (empty($_POST["name"])) {
            $errorname = "Name is required";
            $anyErr = true;
        } else {
            $name = $_POST["name"];
            $name = trim($name);
            if (ctype_alpha(str_replace(' ', '', $name)) === false) {
                $errorname = "Please write a valid name";
                $anyErr = true;
            }
        }

        // email
        if (empty($_POST["email"])) {
            $erroremail = "Email is required";
            $anyErr = true;
        } else {
            $email = trim($_POST["email"]);
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $erroremail = "Enter valid email";
                $anyErr = true;
            }
        }

        // phone
        if (empty($_POST["phone"])) {
            $errorphone = "Phone is required";
            $anyErr = true;
        } else {
            $phone = trim($_POST["phone"]);
            if (!ctype_digit($phone)) {
                $errorphone = "Only digits are allowed";
                $anyErr = true;
            }
            if (strlen($phone) < 10) {
                $errorphone = "Phone number cannot be less than 10 digits";
                $anyErr = true;
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }
    }

    function checkSubmission()
    {
        global $anyErr;
        if ($anyErr == false) {
            return true;
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


    <div class="">

        <div class="text-center">
            <br>
            <h1>Please fill the form below</h1>
            <h5>We assure you that all your payment are being make secure and fast.</h5>
            <br>
            <h6>Please fill the form</h6>
            <p>Contact Person details</p>
            <h6>(2/3)</h6>
        </div>

        <!-- donation form -->

        <form class="m-auto col-md-5" name="userForm" method="POST" action='donate3.php'>

            <!-- email -->
            <div class="form-label-group">
                <label class="col-form-label" for="email">Email<small>*</small></label>
                <input class="form-control" type="email" name="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <small id="erroremail"><?php // echo $erroremail; 
                                        ?> </small>
            </div>

            <!-- phone -->
            <div class="form-label-group">
                <label class="col-form-label" for="phone">Phone<small>*</small></label>
                <input class="form-control" type="number" name="phone" required>
                <small id="erroremail"><?php //echo $erroremail; 
                                        ?> </small>
            </div>

            <br>
            <br>
            <input class="btn btn-green pull-left" type="submit" value="Next " />
            <input class="btn btn-danger pull-right" type="reset" value="Reset" />
            <br><br>
        </form>

    </div>






    <!--  ************************* Footer Starts Here ************************** -->



</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>