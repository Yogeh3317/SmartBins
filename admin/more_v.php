<?php 

session_start();



include 'common/connect.php';
//sssion start
if(!isset($_SESSION['admin_id']))
{
    header('location:index.php');
}

$id = $_SESSION['admin_id'];
$result = $obj->query("select * from user where user_id='$id'");
$row = $result->fetch_object();



//session close



$id=$_GET['moreid'];
$result1 = $obj->query("select * from user where user_id='$id'");

$row1 = $result1->fetch_object();

//for city
$city_id = $row1->city_id;
$city = $obj->query("select * from city where city_id=$city_id");
$row_city = $city->fetch_object();

//for area
$area_id = $row1->area_id;
$area = $obj->query("select * from area where area_id=$area_id");
$row_area = $area->fetch_object();

//for role
$role_id = $row1->role_id;
$role = $obj->query("select * from role where role_id=$role_id");
$row_role = $role->fetch_object();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Volunteer dtails</title>
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
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Volunteer details </h4>
						<table class="table" align="center">
							<thead>
								<tr>
								  <td>User_id</td>
								  <td><?php echo $row1->user_id; ?></td>

								</tr>
								<tr>
								  <td>Name</td>
								  <td><?php echo $row1->name; ?></td>
								 
								</tr>
								<tr>
								  <td>Email</td>
								  <td><?php echo $row1->email; ?></td>
								 
								</tr>
								<tr>
									<td>Contact</td>
									<td><?php echo $row1->contact; ?></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><?php echo $row1->gender; ?></td>
								</tr>
								<tr>
									<td>DOB</td>
									<td><?php echo $row1->dob; ?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><?php echo $row1->address; ?></td>
								</tr>
								<tr>
									<td>City </td>
									<td><?php echo $row_city->city_name; ?></td>
								</tr>
								<tr>
									<td>Area </td>
									<td><?php echo $row_area->area_name; ?></td>
								</tr>
								<tr>
									<td>Image name</td>
									<td><?php echo $row1->image; ?></td>
								</tr>
								<tr>
									<td>Image</td>
									<td><img src="../user1/upload/<?php echo $row1->image; ?>" height="100" width="100"></td>
								</tr>
								<tr>
									<td>Reg_Date</td>
									<td><?php echo $row1->reg_date; ?></td>
								</tr>
								<tr>
									<td>Role</td>
									<td><?php echo $row_role->role_name; ?></td>
								</tr>
							</thead>
							
						</table>
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