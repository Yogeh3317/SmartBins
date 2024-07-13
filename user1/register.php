<?php 

include 'common/connect.php';

$city = $obj->query("select * from city");
$area = $obj->query("select * from area");
$role = $obj->query("select * from role where not role_id='1'");

if (isset($_POST['submit'])) {

	# code...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpass = $_POST['cpassword'];
	$contact = $_POST['contact'];
	$gender = $_POST['gender'];
	$dob = $_POST['date'];
	
	$address = $_POST['address'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$role = $_POST['role'];
	$reg_date    = date('Y-m-d');

	$filename = $_FILES['f']['name'];
	$filename_array = explode(".", $filename);
	$ext = strtolower(end($filename_array));

	$tmp = $_FILES['f']['tmp_name'];
	$path = "upload/$filename";
	
 

	if ($password == $cpass)
   {
		# code...
		if($ext=='jpg' ||$ext=='gif' ||$ext=='png' ||$ext=='jpeg')
		{
		

  		$exe = $obj->query("insert into user(name,email,contact,gender,dob,address,city_id,area_id,image,reg_date,password,role_id) values('$name','$email','$contact','$gender','$dob','$address','$city','$area','$filename','$reg_date','$password','$role')");
  		if($exe)
  		{
        move_uploaded_file($tmp, $path);

        
  			echo "<script>alert('File Uploaded Successfullly & registration succesfully'); </script>";
          header("location:home.php");
  		}
  		else
  		{
  			echo "<script>alert(' error');</script>";
  		}
    }
	}
	else
	{
		echo "<script>alert('mismatch password');</script>";
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
	<!-- /register-form -->
	<section class="w3l-contact-11">
		<div class="form-41-mian py-5">
			<div class="container py-lg-2">
			  <div class="row align-form-map">
				
				<div class="col-lg-12 form-inner-cont">
					<div class="title-content text-left">
						<h3 class="hny-title mb-lg-5 mb-4">Get register</h3>
					</div>
				  <form  method="post" class="signin-form" enctype="multipart/form-data">
					<div class="container">
        <div class="col-lg-10 form-input">
      <input type="text" name="name" id="name" placeholder="Name" required="" />
    </div>
    <br>
    <div class="col-lg-10 form-input">
      <input type="email" name="email" id="email" placeholder="Email" required="" />
    </div>
    <br>
    <div class="col-lg-10 form-input">

      <input type="password" name="password" id="password" placeholder="Password" required="" />
    </div>
    <br>
    <div class="col-lg-10 form-input">

      <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required="" />
    </div>
    <br>
    <div class="col-lg-10 form-input">
      <input type="text" name="contact" id="contact" maxlength="10" placeholder="Contact" required="" />
    </div>
    <br>
    <div class="col-lg-10 form-checked"> 
        <!--Gender -->
        <!-- Group of default radios - option 1 -->
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="gender" value="Male">
          <label class="custom-control-label" for="defaultGroupExample1">Male </label>
        </div>

        
        <!-- Group of default radios - option 3 -->
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="gender" value="Female">
          <label class="custom-control-label" for="defaultGroupExample3">Female </label>
        </div>
    </div>
    <br>
    <div class="col-lg-10 form-input">
        
      <input type="date" name="date" id="date" placeholder="DOB" required="" />
    </div>
    <br>
    <div class="col-lg-10 form-input">

        <textarea name="address" id="address" placeholder="Address" required="" /></textarea> 
    </div>
    <br>
    
    <div class="col-lg-10 form-input">

      <input type="file" name="f" id="f">
    </div>
    <br>
    <div class="col-lg-10 form-input">
        <select class="form-control"  id="city" name="city">
         <option value="">--Select City--</option>
            <?php
                    while($c = $city->fetch_object())
                    {
                        ?>
                        <option value="<?php echo $c->city_id;?>"><?php echo $c->city_name;?></option>
                        <?php
                    }

            ?>
        </select>
        
    </div>
    <br>
    <div class="col-lg-10 form-input">
        <select class="form-control"  id="area" name="area">
         <option value="">--Select Area--</option>
            <?php
                    while($a = $area->fetch_object())
                    {
                        ?>
                        <option value="<?php echo $a->area_id;?>"><?php echo $a->area_name;?></option>
                        <?php
                    }

            ?>
        </select>
        
    </div>
    <br>
    <div class="col-lg-10 form-input">
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
    <br>
    <div class="submit-button text-lg-center">
       <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
    </div>
				  </form>
				</div>

			  </div>
        <div class="col-lg-6 contact-left pr-lg-4">
          <div class="partners">
            <div class="cont-details">
            <div class="title-content text-left">
            </div><br><br>
           
            
            </div>
            <br><br><br>
            <div class="container">
              <br><br><br>
              <br><br><br><br><br><br>
            </div>
           
          </div>
          </div>
			</div>
		  </div>
		 
	  </section>

	<!-- //register-form -->
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