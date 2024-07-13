
<?php 
session_start();
include 'common/connect.php';

//for user
$result = $obj->query("SELECT * from user where role_id=2");
$row = mysqli_num_rows($result);
//for volunteer
$result1 = $obj->query("SELECT * from user WHERE role_id=3");
$row1 = mysqli_num_rows($result1);
//for event
$result2 = $obj->query("SELECT * from event WHERE STATUS='complete'");
$row2 = mysqli_num_rows($result2);
//for mother donation
$result3 = $obj->query("SELECT * from donation WHERE STATUS='accept'");
$row3 = mysqli_num_rows($result3);

$sql = $obj->query("SELECT SUM(amount) FROM money_donation");
while ($row4 = mysqli_fetch_array($sql)) {
    # code...
    $sum = $row4['SUM(amount)'];
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
	  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetss/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetss/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetss/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetss/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetss/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetss/css/style.css" rel="stylesheet">

    <!-- cdn for awesome fonts icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />

</head>

<body>
	<!--header-->
	
<?php include 'common/header.php' ?>

	<!--/header-->
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Small steps for a cleaner world. Start today!!!</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="register.php">Join Us</a>
											<a href="#small-dialog" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Creative a Better Future through your Help</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.html">Volunteer</a>
											<a href="#small-dialog" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Actions speak louder than words! Give today.</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.html">Volunteer</a>
											<a href="#small-dialog1" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Creative a Better Future through your Help</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.html">Volunteer</a>
											<a href="#small-dialog2" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>

											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //banner-slider-->
	<!-- //bottom-grids -->
	<div class="w3l-bottom-grids">
		<div class="container-fluid px-0">
			<div class="bottomhny-grids-sec">
				<div class="bottomhny-1">
					<div class="bottomhny-gd-ingf">
						<h4>Be a waste management champion. Smart bins make it easy to do the right thing.</h4>
					</div>
				</div>
				<div class="bottomhny-1 bottomhny-2">
					<div class="bottomhny-gd-ingf">
						<h4>Fill your smart bin, it's a simple task. You'll be helping the planet, that's a fact!
</h4>
					</div>
				</div>
				<div class="bottomhny-1 bottomhny-1-img">
					<div class="bottomhny-gd-ingf">

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- //bottom-grids -->

	<!-- /features-4 -->
	<section class="features-4">
		<div class="features4-block py-5">
			<div class="container py-lg-4">
				<div class="title-content text-center mb-lg-5 mt-4">
					<h6 class="sub-title">Why Choose Us</h6>
					<h3 class="hny-title">How Can Help?</h3>
					<p class="fea-para"></p>
				</div>
				<div class="row features4-grids text-left mt-lg-6">
					<div class="col-lg-4 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-1">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-1"></div>
											<div class="ch-info-back">
												<h4>Sustainable Solution</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="features4-rightinfo">
								<h5><a href="#URL">Sustainable Solution</a></h5>
								<p>Reduce waste, maximize impact. Sustainable Solution Smart Bins make managing waste effortless and efficient, helping you create a greener future.</p>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-2">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-2"></div>
											<div class="ch-info-back">
												<h4>Smart Sorting, Simplified Recycling</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="register.php">
								Smart Sorting, Simplified Recycling</a></h5>
								<p>Ditch the sorting struggle! Our smart bins use AI to automatically sort waste, making recycling effortless.</p>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-3">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-3"></div>
											<div class="ch-info-back">
												<h4>Smiley  Face Mission</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
								Smiley  Face Mission
							</a></h5>
								<p>To ensure a future where environmental responsibility goes hand-in-hand with social progress and economic prosperity.</p>

							</div>
						</div>
					</div>
					<!--
						<div class="col-lg-3 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-4">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-4"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
										Help For Education</a></h5>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>

							</div>
						</div>
					</div>
					 -->
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--//features-4 -->

	<!-- /specification-6-->
	<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-5">
				<div class="row story-6-grids">
					<div class="col-lg-10 story-gd pl-lg-4  text-center mx-auto">
						<div class="title-content px-lg-5">
							<h6 class="sub-title" style="color:#FF4500 ">Our Organization</h6>
							<h3 class="hny-title two">Want to get involved?</h3>
							<p class="mt-3 mb-lg-5 px-lg-5 counter-para"> <b>Do you care about the environment and want to see a cleaner future?</b>
 We believe everyone has a role to play in creating a sustainable waste management system. That's where you come in!</p>
						</div>
						<div class="skill_info mt-lg-5 mt-4 pt-lg-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter"><?php echo $row; ?></p>
										<h4>Total Users</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter"><?php echo $sum; ?></p>
										<h4>Tree Plantation</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter"><?php echo $row3; ?></p>
										<h4>Avilable City</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter"><?php echo $row1; ?></p>
										<h4>Worldwide Organization</h4>

									</div>
								</div>
							</div>
						</div>
						<br><br><br>
						<div class="title-content">
								<h6 class="sub-title" style="color: #FF4500;">Join Us</h6>
								<h3 class="hny-title two">Become A Volunteer</h3>
								<p class="counter-para">Join your hand with us for a better life and beautiful future</p>

							</div>
							<a href="donate.php" class="btn btn-style -btn mt-4">Contact</a>
							<a href="contact.php" class="btn btn-style btn-primary mt-4">Inquiry </a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //specification-6-->
	<!--/blog-grids-home-->
	<!--<section class="bloghny-gds py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h6 class="sub-title">Latest Posts</h6>
				<h3 class="hny-title">News & Updates</h3>

			</div>
			<div class="row text-left img-grids">
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g1.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g2.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g3.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g4.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g5.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g6.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>-->
	<!--//blog-grids-home-->
	<!-- middle -->
	<!--<div class="middle py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="welcome-left text-center py-3">
				<div class="title-content">
					<h6 class="sub-title">Join Us</h6>
					<h3 class="hny-title two">Become A Volunteer</h3>
					<p>Join your hand with us for a better life and beautiful future</p>

				</div>
				<a href="donate.php" class="btn btn-style transparent-btn mt-4 mr-sm-2">Donate Now</a>
				<a href="contact.php" class="btn btn-style btn-primary mt-4">Inquiry </a>
			</div>
		</div>
	</div>-->
	<!-- //middle -->
	   <!-- START FAQ -->
	   <main id="main">


<!-- ======= About Us Section ======= -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

	<div class="row">

	  <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

		<div class="content">
		  <h3>Guidelines implementation  <strong>must for proper management of medical waste</strong></h3>
		  <p>
			A hospital is the last resort of hope for sick people who expect to get better and heal.
			However, shortcoming on the part of the hospital staff and management could instead have an adverse effect on public health.
			According to the annual health report published by the Department of Health Services in 2000/2001, there are 74 hospitals,
			172 Primary Health Care Units, 710 Health Posts and 3132 Sub-health Post run by the government across Nepal.
			The number of healthcare institutions has certainly surged in the recent years.
			All healthcare facilities are required to follow the ‘National Health Care Waste Management Guidelines’ 
			prepared by the National Health Research Council (NHRC)
		 </div>

		<div class="accordion-list">
		  <ul>
			<li>
			  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>  “Wastes from health care institutions can be categorized as infectious or noninfectious." <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
				<p>
				  Infectious wastes include human, animal, or biological wastes and any items that may be contaminated with pathogens.
				   Non-infectious wastes include toxic chemicals, cytotoxic drugs, and radioactive, flammable, and explosive wastes,
				   reads the guideline.  
			   </p>
			
			  </div>
			</li>

			<li>
			  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Implementation problem <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
				<p>
				  However, not all hospitals are following the guidelines mainly because of the lack of budget, 
				  lack of orientation regarding medical waste management to waste handlers, and flimsy monitoring from the government.
				 Segregation of medical waste is a vital part of hospital waste management. Poor management of hospital waste poses 
				 risk not only to its handlers during its treatment and disposal but also to the environment 
				 if not disposed in a proper manner. Haphazard management of hospital waste also gives black marketers an opportunity
				  to collect the disposed medical equipment and resell them.                     </p>
			  </div>
			</li>

			<li>
			  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dr Kedar Century, Executive Director at Bir Hospital said, <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
				<p>
				   “We used to have an ideal waste management system to sterilize and dispose hospital waste before the 2015 earthquake. But the earthquake damaged the building where we had installed the autoclave device and now we don’t have any space. The new building is currently being used to accommodate admitted patients.”

				  Dr Century added that lack of space has barred the hospital from following NHRC’s National Health Care Waste Management Guidelines and they are relying on traditional means of sterilization for the time being.
				  
				  Management of medical waste at private hospitals is poorer as compared to government run hospitals for want of regular monitoring from authorities concerned. A report published by the Ministry of Health and Population shows that private hospitals continue to burn, bury and dispose hazardous immunization waste mixing it up with the municipal waste.                    </p>
			  </div>
			</li>

		  </ul>
		</div>

	  </div>

	  <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assetss/img/Medical-Waste.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
	</div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
  <div class="container" data-aos="fade-up">

	<div class="row">
	  <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
		<img src="assetss/img/recycling5.png" class="img-fluid" alt="">
	  </div>
	  <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
		<h3>Composition and Percentage of Waste Generation</h3>
		<p class="fst-italic">
		  Management of Municipal Solid Wastes: A Case Study in Limpopo Province, South Africa
		  
		</p>

		<div class="skills-content">

		  <div class="progress">
			<span class="skill">Plastics <i class="val">35%</i></span>
			<div class="progress-bar-wrap">
			  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		  </div>

		  <div class="progress">
			<span class="skill">Paper and Glass <i class="val">25%</i></span>
			<div class="progress-bar-wrap">
			  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		  </div>

		  <div class="progress">
			<span class="skill">Food Waste  <i class="val">25%</i></span>
			<div class="progress-bar-wrap">
			  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		  </div>

		  <div class="progress">
			<span class="skill">Garden Waste<i class="val">15%</i></span>
			<div class="progress-bar-wrap">
			  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		  </div>

		</div>

	  </div>
	</div>

  </div>
</section><!-- End Skills Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

	<div class="row">
	  <div class="col-lg-9 text-center text-lg-start">
		<h3>Call To Action</h3>
		<p> Here is the phone number of municipality.</p>
	  </div>
	  <div class="col-lg-3 cta-btn-container text-center">
		<a class="cta-btn align-middle" href="tel:+919511937793">Call To Action</a>
	  </div>
	</div>

  </div>
</section><!-- End Cta Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>Frequently Asked Questions</h2>
	  <p>Waste management regulations and disposal methods.</p>
	</div>

	<div class="faq-list">
	  <ul>
		<li data-aos="fade-up" data-aos-delay="100">
		  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> What is waste management? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
			<p>
			  Waste management is the collection, transportation and disposal of waste materials.                </p>
		  </div>
		</li>

		<li data-aos="fade-up" data-aos-delay="200">
		  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">   How do I practice waste management at home? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
			<p>
			  Keep separate containers for dry and wet waste in the kitchen.
			  Keep two bags for dry waste collection- paper and plastic, for the rest of the household waste.
			  Keep plastic from the kitchen clean and dry and drop into the dry waste bin. Keep glass /plastic containers rinsed of food matter.
			  Keep a paper bag for throwing sanitary waste.                </p>
		  </div>
		</li>

		<li data-aos="fade-up" data-aos-delay="300">
		  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"> What are the first few steps to initiate a waste management programme in your apartment complex?
			<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
			<p>
			  Form a group with like-minded people.
			  Explain waste segregation to your family / neighbours in your apartment building.
			  Get the staff in the apartment building to also understand its importance.
			  Get separate storage drums for storing dry and wet waste.
			  Have the dry waste picked up by the dry waste collection centre or your local scrap dealer.                </p>
		  </div>
		</li>

		<li data-aos="fade-up" data-aos-delay="400">
		  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What are the different types of waste? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
			<p>
			   1. Wet waste- Wet waste consists of kitchen waste - including vegetable and fruit peels and pieces, tea leaves, coffee grounds, eggshells, bones and entrails, fish scales, as well as cooked food (both veg and non-veg).
			  <br><br>
			  2. Dry Waste- Paper, plastics, metal, glass, rubber, thermocol, styrofoam, fabric, leather, rexine, wood – anything that can be kept for an extended period without decomposing is classified as dry waste.
			  <br><br>
			   3 .Hazardous waste- Household hazardous waste or HHW include three sub-categories – E-waste; toxic substances such as paints, cleaning agents, solvents, insecticides and their containers, other chemicals; and biomedical waste.
			  <br><br>
			  4. E-waste- E-waste or electronic waste consists of batteries, computer parts, wires, electrical equipment of any kind, electrical and electronic toys, remotes, watches, cell phones, bulbs, tube lights and CFLs.
			  <br><br>
			   5. Biomedical waste- This includes used menstrual cloth, sanitary napkins, disposable diapers, bandages and any material that is contaminated with blood or other body fluids. 
		   </p>
		  </div>
		</li>

		<li data-aos="fade-up" data-aos-delay="500">
		  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What are ways of storing the waste at homes? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
			<p>
			  1. Dry waste-                  
			  Store it in a bag in the utility area after cleaning and drying till it is picked up. No food residue must be left in the bottles and packets. Clean them as you would to reuse them. If clothes are totally unusable, or very damaged, they are categorized as dry waste. If clothes are soiled with body fluids, they become sanitary waste. If they are soiled with paint, or any chemicals, they are HHW (household hazardous waste).
			  
			  <br><br> 2. E-waste-                  
			  Store them in separate container which is kept closed, away from moisture and in which nothing else is put.                </p>
		  </div>
		</li>
		<li data-aos="fade-up" data-aos-delay="600">
		  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">How do I dispose my waste? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
		  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
			<p>
			  1. Compost your wet waste at home-

			  Home composting can easily be done in any aerated container. Get more details on composting and begin composting today! 
			  <br><br>
			  2 Compost your wet waste at the community level-
			  
			  If you live in a large apartment building, a community composting system like tank composting could be set up for all the wet waste from the residents. If not, the wet waste can be given out every day to your Municipality collection system.
			  <br><br>
			  3 Biomedical waste has to be wrapped separately in a newspaper and handed over to the municipality waste collection system. Expired medicines and injections, used syringes also have to be disposed in the same manner.
			  
			  Paint and other hazardous waste like cosmetics, mosquito repellents, tube lights etc have to be stored separately and handed over to the Municipal collection system.
			</p>
		  </div>
		</li>
	  </ul>
	</div>

  </div>
</section><!-- End Frequently Asked Questions Section -->
</main>
<!-- End FAQ -->

	<!--/testimonials-->
	<section class="w3l-testimonials">
		<div class="testimonials py-5">
			<div class="container text-center py-lg-3">
				<div class="title-content text-center mb-lg-5 mb-4">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="hny-title">What Our
						People Says?</h3>

				</div>
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="owl-testimonial owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f2.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">I was inspired to donate to Organization after hearing you talk so much about their work.</div>
									<div class="name">- Jemmy carter</div>

								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f4.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Though I am unable to donate funds, I will donate my time as joining volunteer in NGO...</div>
									<div class="name">- John Balmer</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f3.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">I am feeling charitable this time of year, and I would love to make an event in your honor. can organization  support us..</div>
									<div class="name">- karen gillan</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="assets/images/f6.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Many Are In Need Of Your Helping Hand.</div>
									<div class="name">- Tom cruise</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->

	<!-- footer-66 -->
	

	<?php include 'common/footer.php' ?>
	<!--//footer-66 -->
	<!-- <div id="preloader"></div> -->

<!-- Vendor JS Files -->
<script src="assetss/vendor/aos/aos.js"></script>
<script src="assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assetss/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assetss/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assetss/vendor/php-email-form/validate.js"></script>
<script src="assetss/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assetss/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assetss/js/main.js"></script>

</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-testimonial').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
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