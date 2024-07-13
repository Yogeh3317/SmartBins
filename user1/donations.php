<?php

session_start();
include 'common/connect.php';

//session code

if(!isset($_SESSION['user_id']))
{
    header('location:home.php');
}
//finish



$cat = $obj->query("select * from category");
$city = $obj->query("select * from city");
$area = $obj->query("select * from area");



if (isset($_POST['submit'])) {
  # code...
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $cat_id = $_POST['cat_id'];
  $dob = $_POST['date'];
  $address = $_POST['add'];
  $city_id = $_POST['city_id'];
  $area_id = $_POST['area_id'];
  $status = 'pending';
  $time = $_POST['dtime'];
  $etime = $_POST['etime'];
  $c_name = $_POST['c_name'];
  $c_num = $_POST['c_number'];

  $user_id = $_SESSION['user_id'];

  $exe = $obj->query("INSERT INTO donation(title,description,cat_id,donation_date,address,city_id,area_id,status,fromtime,user_id,contact_name,contact_number,totime)VALUES('$title','$desc',$cat_id,'$dob','$address',$city_id,$area_id,'$status','$time',$user_id,'$c_name','$c_num','$etime')");
  if($exe){
        echo "<script>alert('Complaint has been register succesfully , ASP Our Team Will Be Contact With You !');</script>";
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
    <title>SmartBins
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
            <h3 class="hny-title mb-lg-5 mb-4">Please Enter You Events In Details</h3>
          </div>
          <form  method="post" class="signin-form">
          <div class="container">
          <div class="col-lg-10 form-input">
            <input type="text" name="title" id="title" placeholder="title" required="" />
          
           <textarea name="desc" id="desc" placeholder="description"></textarea>

           <input type="text" name="c_name" id="c_name" placeholder="Contact Name" required="" />

           <input type="text" name="c_number" id="c_number" placeholder="Contact Number" required="" />
          
           <select class="form-control"  id="cat_id" name="cat_id">
             <option value="">--Select category--</option>
                <?php
                        while($ca = $cat->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $ca->cat_id;?>"><?php echo $ca->cat_name;?></option>
                            <?php
                        }

                ?>
            </select>
          <br>
                      <a href="map.php">Click Here to view in map</a> 

            <textarea name="add" id="add" placeholder="Address"></textarea>
          
          <select class="form-control"  id="city_id" name="city_id">
             <option value="">--Select city--</option>
                <?php
                        while($ci = $city->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $ci->city_id;?>"><?php echo $ci->city_name;?></option>
                            <?php
                        }

                ?>
            </select>
          <br>
           <select class="form-control"  id="area_id" name="area_id">
             <option value="">--Select area--</option>
                <?php
                        while($a = $area->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $a->area_id;?>"><?php echo $a->area_name;?></option>
                            <?php
                        }

                ?>
            </select>
          <br>
           <input type="date" name="date" id="date" placeholder="Date" required="" />
          <label for="dtime">From time</label>
          <input type="time" name="dtime" id="dtime" placeholder="Starttime" required="" />
          <label for="etime">To time</label>
          <input type="time" name="etime" id="etime" placeholder="Endtime" required="" />
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