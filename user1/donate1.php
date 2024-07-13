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



    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Thanks For Choosing Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Volunteer Form Starts Here ************************** -->
    <!-- php code for form validation -->
    <?php

    $errorfname = $errorlname = $erroremail = $genderErr = "";
    $fname = $lname = $email = $phone = $gender = $address = "";

    $anyErr = false;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // first fname
        if (empty($_POST["fname"])) {
            $errorfname = "First name is required";
            $anyErr = true;
        } else {
            $fname = $_POST["fname"];
            $fname = trim($fname);
            if (ctype_alpha(str_replace(' ', '', $fname)) === false) {
                $errorfname = "Please write a valid first name";
                $anyErr = true;
            }
        }
        // lname
        if (empty($_POST["lname"])) {
            $errorlname = "Last name is required";
            $anyErr = true;
        } else {
            $lname = $_POST["lname"];
            $lname = trim($lname);
            if (ctype_alpha(str_replace(' ', '', $lname)) === false) {
                $errorlname = "Please write a valid last name";
                $anyErr = true;
            }
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $anyErr = true;
        } else {
            $gender = test_input($_POST["gender"]);
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
            <h6><b >Contact person details</b></h6>
            <p>Personal details</p>
            <h6>(1/3)</h6>
        </div>

        <!-- donation form -->

        <form class="m-auto col-md-5" name="userForm" method="POST" <?php if ($anyErr==false) {echo "action='donate2.php'";} ?> >

            <!-- first name -->
            <div class="form-label-group">
                <label for="fname">First name<small>*</small></label>
                <input type="text" class="form-control" name="fname" required>
                <small id="errorfname"><?php echo $errorfname; ?> </small>
            </div>
            <!-- last name -->
            <div class="form-label-group">
                <label for="lname">Last name<small>*</small></label>
                <input type="text" class="form-control" name="lname" required>
                <small id="errorlname"><?php echo $errorlname; ?> </small>
            </div>

            <!-- age -->
            <div class="form-label-group">
                <label class="col-form-label" for="age">Age<small>*</small></label>
                <input class="form-control" min=15 type="number" name="age" required>
            </div>

            <!-- gender -->
            <div class="form-label-group">
                <label class="col-form-label" for="gender">Gender<small>*</small></label><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Female">&nbsp;&nbsp;Female<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Male">&nbsp;&nbsp;Male<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="Other">&nbsp;&nbsp;Other<br>
                <small id="genderErr"><?php echo $genderErr; ?> </small>
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