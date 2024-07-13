<?php
// Database Connection
session_start();
include 'common/connect.php';

if(!isset($_SESSION['user_id']))
{
    header('location:home.php');
}



if(isset($_POST['submit']))
{
  $rating  = $_POST['rating'];
  $comment = $_POST['comment'];
  $date    = date('Y-m-d');
  $user_id = $_SESSION['user_id'];


  $exe = $obj->query("insert into feedback(date,rating,comment,user_id) values('$date','$rating','$comment','$user_id')");

  if($exe)
  {
    echo "<script>alert('feedback send Successfullly');</script>";
  }
  else
  {
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
    <title>ConnectNGO(NGO)
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
  <!-- /contact-form -->
  <section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
        <div class="col-lg-4 contact-left pr-lg-4">
          <div class="partners">
            <div class="cont-details"><br><br><br>
           <div class="col-md-6 col-lg-7 col-xl-6">
              <img src="feed_back.png" class="img-fluid" style="height: 200px; width: 200px;">
            </div>
            
            </div>
          </div>
          </div>
        <div class="col-lg-8 form-inner-cont">
          <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Send Feedback</h3>
          </div>
          <form  method="post" class="feedback-form">
            
        <div class="form-input">
            <select class="form-control" id="rating" name="rating" >
              <option value="">Please Select Rating...</option>
              <option value="1">    1   </option>
              <option value="2">    2   </option>
              <option value="3">    3   </option>
              <option value="4">    4   </option>
              <option value="5">    5   </option>
              
            </select>
            <!-- <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="rating" value="1">
          <label class="custom-control-label" for="defaultGroupExample1">&#128544;</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="rating" value="2">
          <label class="custom-control-label" for="defaultGroupExample2">&#128577; </label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="rating" value="3">
          <label class="custom-control-label" for="defaultGroupExample3">&#128578; </label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="rating" value="4">
          <label class="custom-control-label" for="defaultGroupExample4">&#128524; </label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample5" name="rating" value="5">
          <label class="custom-control-label" for="defaultGroupExample5">&#128512; </label>
        </div> -->
          
    
          <br>  <textarea placeholder="comment" id="comment" name="comment" required=""></textarea>
        
          </div>
          <div class="submit-button text-lg-center">
             <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
            </div>
          </form>
        </div>

      </div>
      </div>
     <!-- <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5832020013786!2d72.62799931496815!3d23.039070984944615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8691219fcc49%3A0x3b9e0bbd566d855d!2sBrainKlick%20Technologies!5e0!3m2!1sen!2sin!4v1672226949385!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
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