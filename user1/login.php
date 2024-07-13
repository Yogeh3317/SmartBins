<?php 
session_start();
include 'common/connect.php'; 
$role = $obj->query("select * from role where role_id!=1");

if(isset($_POST['submit']))
{
  $email    = $_POST['email'];
  $password = $_POST['pass'];
  $role = $_POST['role'];

  $result = $obj->query("select * from user where email='$email' and password='$password' and role_id='$role'");
  $rowcount = $result->num_rows;


  if($rowcount == 1)
  {
      if(isset($_POST['rem']))
    {
      setcookie("email",$email,time()+3600*24*1);
      setcookie("password",$password,time()+3600*24*1);
    }
      $row = $result->fetch_object();
      if($role == 2) $_SESSION['user_id'] = $row->user_id;
      elseif ($role == 3) {
         # code...
          $_SESSION['volunteer_id'] = $row->user_id;
          
       }
      echo "<script>alert('Login successfully');window.location='home.php';</script>";
  }
  else
  {
    echo "<script>alert('Login failed!!!');window.location='login.php';</script>";
  }
}


?>
<!doctype html>
<html lang="zxx">


	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>SmartBin
		</title>
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/style-starter.css">
		<!-- Template CSS -->
		<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
		<!-- Template CSS -->
	</head>

<body>

	

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
            <input type="email" id="email" name="email" class="form-control form-control-lg" value="<?php if(isset($_COOKIE['email']))echo $_COOKIE['email']?>" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          	 <label class="form-label" for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="form-control form-control-lg" value="<?php if(isset($_COOKIE['password']))echo $_COOKIE['password']?>" />
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
      
          <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="defaultGroupExample1" name="rem" value="rem"
          <?php if(isset($_COOKIE['email']))echo "checked";?>>
          <label class="custom-control-label" for="defaultGroupExample1">Remember me </label>
          
            
         <a href="f_pass.php" style="float:right;font-size:16px;">Forgot password?</a><br>
        </div>
        
          <br>
          <!-- Submit button -->
          <button type="submit" class="btn btn-style btn-lg btn-block" name="submit" id="submit">Sign in</button>


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