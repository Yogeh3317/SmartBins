<?php 
session_start();
include 'common/connect.php'; 
$role = $obj->query("select * from role where role_id!=1");

if(isset($_POST['submit']))
{
  $email    = $_POST['email'];
  $password = $_POST['pass'];
  $role = $_POST['role'];
  $cpass = $_POST['cpass'];

  


  if($password == $cpass)
  {
      $exe = $obj->query("update user set password='$password' where email='$email' and role_id=$role");
      if ($exe) {
        # code...
        echo "<script>alert('Password update successfully');window.location='login.php';</script>";
      }
      else{
        echo "<script>alert('Record does'n match);window.location='f_pass.php';</script>";
      }
}
else{
  echo "<script>alert('Password does't match');window.location='f_pass.php';</script>";
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
	<!-- /login-form -->
	<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="login.png"
          class="img-fluid" style="height: 300px;">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
          	<label class="form-label" for="email">Email </label>
            <input type="email" id="email" name="email" class="form-control form-control-lg"  />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          	 <label class="form-label" for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="form-control form-control-lg"  />
          </div>
          <div class="form-outline mb-4">
             <label class="form-label" for="pass">Confirm Password</label>
            <input type="password" id="cpass" name="cpass" class="form-control form-control-lg"  />
          </div>
          <div class="form-outline mb-4">
        <select class="form-control"  id="role" name="role">
         <option value="">--Select Role--</option>
            <?php
                    while($r = $role->fetch_object())
                    {
                        ?>
                        <option value="<?php echo $r->role_id;?>"><?php echo $r->role_name;?></option>
                        <?php
                    }

            ?>
        </select>
        
        </div>
          <!-- <div class="d-flex justify-content-around align-items-center mb-4"> -->
            <!-- Checkbox -->
           <!--  <div class="form-check mb-3">
              <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember">
                Remember me </label>
            </div>
            <a href="#!">Forgot password?</a> -->
          <!-- </div> -->
         

          <br>
          <!-- Submit button -->
          <button type="submit" class="btn btn-style btn-lg btn-block" name="submit" id="submit">Update password</button>


        </form>
      </div>
    </div>
  </div>
</section>
	<!-- //login-form -->
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