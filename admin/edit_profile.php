<?php

session_start();



include 'common/connect.php';


$city = $obj->query("select * from city");
$area = $obj->query("select * from area");
$role = $obj->query("select * from role");


//session start
if(!isset($_SESSION['admin_id']))
{
    header('location:index.php');
}

$id = $_SESSION['admin_id'];
$result = $obj->query("select * from user where user_id='$id'");
$row = $result->fetch_object();
//session close

//editcode
$id1 = $_GET['editid'];
$result1 = $obj->query("select * from user where user_id='$id'");
$row1 = $result->fetch_object();



$row1 = $result->fetch_object();
$gen=$row->gender;


if (isset($_POST['submit'])) {

  # code...
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpass = $_POST['cpassword'];
  $contact = $_POST['contact'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  
  $address = $_POST['address'];
  $area = $_POST['area'];
  $city = $_POST['city'];
  $role = $_POST['role'];
  $reg_date    = date('Y-m-d');

  $filename = $_FILES['f']['name'];
  $filename_array = explode(".", $filename);
  $ext = strtolower(end($filename_array));

  $tmp = $_FILES['f']['tmp_name'];
  $path = "../user1/upload/$filename";
  

  if ($password == $cpass) {
    # code...
    if($ext=='jpg' ||$ext=='gif' ||$ext=='png' ||$ext=='jpeg')
    {
    

    $exe = $obj->query("update user set name='$name',email='$email',contact='$contact', gender='$gender',dob='$dob',address='$address',city_id='$city',area_id='$area',image='$filename',reg_date='$reg_date',password='$password',role_id='$role' where user_id='$id' ");

    
    if($exe)
    {
      unlink("../user1/upload/$row1->image");
      move_uploaded_file($tmp, $path);

      
      echo "<script>alert('File Uploaded Successfullly & profile updated succesfully');document.location='dashboard.php';</script>";
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


<!DOCTYPE HTML>
<html>
<head>
<title>Update Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php include 'common/sidebar.php' ?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include 'common/header.php' ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Update Profile</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						s
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							
							<div class="row">
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="name" name="name" placeholder=" Name" value="<?php echo $row->name; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" name="email" id="email" placeholder="Email" value="<?php echo $row->email; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Contact</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="contact" placeholder="Contact" value="<?php  echo $row->contact;?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="password" name="password" placeholder="Contact" value="<?php echo $row->password; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Confirm password</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="cpassword" name="cpassword" placeholder="Contact" value="<?php echo $row->password; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">DOB</label>
									<div class="col-sm-8">
										<input type="date" class="form-control1" id="dob" name="dob" placeholder="Contact">
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8"> 
										<input type="radio" name="gender" id="gender" value="Male"<?php if ($gen == 'Male') echo 'checked';?>>
										<label for="gender">Male</label>
										<input type="radio" name="gender" id="gender" value="Female"<?php if ($gen == 'Female') echo 'checked';?>>
										<label for="gender">Male</label>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-8"><textarea name="address" id="address" name="address" cols="60" rows="10" class="form-control1"><?php echo $row->address; ?></textarea></div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">City</label>
									<div class="col-sm-8">
									<select class="form-control"  id="city" name="city">
								         <option value="">--Select City--</option>
								            <?php
								                    while($c = $city->fetch_object())
								                    {
								                        ?>
								                        <option value="<?php echo $c->city_id;?>"<?php if($row->city_id== $c->city_id) echo 'selected'; ?>><?php echo $c->city_name;?></option>
								                        <?php
								                    }

								            ?>
								        </select> 
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Area</label>
									<div class="col-sm-8">
									 <select class="form-control"  id="area" name="area">
								         <option value="">--Select Area--</option>
								            <?php
								                    while($a = $area->fetch_object())
								                    {
								                        ?>
								                        <option value="<?php echo $a->area_id;?>"<?php if($row->area_id== $a->area_id) echo 'selected'; ?>><?php echo $a->area_name;?></option>
								                        <?php
								                    }

								            ?>
								        </select> 
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8"> 
										 <select class="form-control"  id="role" name="role">
									         <option value="">--Select Role--</option>
									            <?php
									                    while($r = $role->fetch_object())
									                    {
									                        ?>
									                        <option value="<?php echo $r->role_id;?>"<?php if($row->role_id== $r->role_id) echo 'selected'; ?>><?php echo $r->role_name;?></option>
									                        <?php
									                    }

									            ?>
									        </select>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm"> Choose pic</label>
									<div class="col-sm-8">
										<input type="file" id="f" name="f"> <p class="help-block">choose youe image.</p> 
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg"></label>
									<div class="col-sm-8">
										<button type="submit" class="btn btn-default" name="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
						</div>
							</form>

						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include 'common/footr.php' ?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>