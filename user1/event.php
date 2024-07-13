<?php 
session_start();

include 'common/connect.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location:home.php');
    exit();
}

// Handle form submission
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $e_type = $_POST['e_type'];
    $date = $_POST['date'];
    $status = 'pending';
    $user_id = $_SESSION['user_id'];
    $r_location = $_POST['r_location'];

    // Corrected the SQL query syntax
    $exe = $obj->query("INSERT INTO event (title, description, date, user_id, status, r_location, event_type) VALUES ('$title', '$desc', '$date', '$user_id', '$status', '$r_location', '$e_type')");
    
    if ($exe) {
        echo "<script>alert('Request sent successfully');document.location='read_event.php';</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
}
?>
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SmartBins</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <?php include 'common/header.php'; ?>

  <div class="inner-banner"></div>

  <!-- Contact Form -->
  <section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
          <div class="col-md-4 col-lg-4 col-xl-4">
            <br><br><br>
            <img src="event.jpeg" class="img-fluid" style="height: 250px;">
          </div>
          <div class="col-lg-8 form-inner-cont">
            <div class="title-content text-left">
              <h3 class="hny-title mb-lg-5 mb-4">Create a Request with us</h3>
            </div>
            <form method="post" class="signin-form">
              <div class="form-input">
                <input type="text" name="title" id="title" placeholder="Title" required />
                <textarea placeholder="Description" name="desc" id="desc" required></textarea>
                <input type="date" name="date" id="date" placeholder="Date" required />
                <a href="map.php">Click Here to view in map</a>
                <textarea name="r_location" id="r_location" placeholder="Address" required></textarea>
                <select class="form-control" id="e_type" name="e_type" required>
                  <option value="">--- Select garbage type ---</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Wet">Wet</option>
                  <option value="Flower">Flower</option>
                  <option value="Other">Other garbage</option>
                </select>
              </div>
              <div class="submit-button text-lg-center">
                <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'common/footer.php'; ?>

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      });
    });

    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

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
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
