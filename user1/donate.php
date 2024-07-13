<?php

session_start();
include 'common/connect.php';

//session code

if(!isset($_SESSION['user_id']))
{
    header('location:home.php');
}
//finish

if (isset($_POST['submit'])) {
  # code...
  $d_name = $_POST['d_name'];
  $amt = $_POST['amt'];
  $desc = $_POST['desc'];
  $date = date('Y-m-d');
  $user_id = $_SESSION['user_id'];

  $exe = $obj->query("insert into money_donation(user_id,amount,description,date,d_name) values('$user_id','$amt','$desc','$date','$d_name')");

  if($exe ){
        header("location:payment.php");
    }
    else {
        echo "<script>alert(' error');</script>";
    }
}




?>

<!doctype html>
<html lang="zxx">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helping-Hand(NGO)
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
  </head>

<body>

  <!--w3l-header-->

  <?php include 'common/header.php'; ?>
<!--/header-->
<div class="inner-banner">
</div>
  <!-- /donation-form -->
  <section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
        <div class="col-lg-6 contact-left pr-lg-4">
          
     
        </div>
        
        <div class="col-lg-12 form-inner-cont">
        <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Click Here <br>     <b style="/*! margin-right: 46px; */margin: 0 0 0 82px;">Make Payement<a href="donate1.php"> Click Here</a></b></h3>
          </div>
          <!-- <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Please Click Here <br>     <b style="/*! margin-right: 46px; */margin: 0 0 0 82px;">Donate CSR fund NGO<a href="Donation_R.php"> Click Here</a></b></h3>
          </div> -->
          <form  method="post" class="signin-form">
          <div class="container">
          <div class="col-lg-10 form-input">
            <input type="text" name="d_name" id="d_name" placeholder="Donor Name" required="" />
          </div>
          <br>
          <div class="col-lg-10 form-input">
            <input type="text" name="amt" id="amt" placeholder="amount" required="" />
          </div>
          <br>
          <div class="col-lg-10 form-input">
            <textarea name="desc" id="desc" placeholder="description"></textarea>
          </div><br>
          <div class="submit-button text-lg-center">
             <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>
     
    </section>
  <!-- //contact-form -->
  <!-- footer-66 -->

  <?php include 'common/footer.php'; ?>
  <!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>