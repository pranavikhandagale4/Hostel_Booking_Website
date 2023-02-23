<?php session_start(); ?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Services</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<h1><a class="navbar-brand" href="home.php">RIT<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>						
						<li class="nav-item">
							<a class="nav-link" href="payment_form.php">Payment</a>
						</li>
						<li class="nav-ite">
							<a class="nav-link" href="services_mess.php">Mess</a>
						</li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>

			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner -->



<!-- banner-bottom -->






<?php
    //$hostel_id = $_SESSION['hostel_id'];
    $query1 = "SELECT * FROM Mess";
    $result1 = mysqli_query($conn, $query1);
    //select the hostel name from hostel  table
    //$query6 = "SELECT * FROM Mess WHERE Mess_id = '$hostel_id'";
    //$result6 = mysqli_query($conn,$query6);
    //$row6 = mysqli_fetch_assoc($result6);
    //$hostel_name = $row6['Mess_name'];
    $i = 0;
    $j = 1;
    while ($row1 = mysqli_fetch_assoc($result1)) {
	    //get the room_no of the student from room_id in room table
    


	    if ($i % 4 == 0) {
			echo '<br><br>';
		    echo '<div class="banner-bottom">
<div class="container-fluid">
	<div class="banner_bottom_agile_grids">
		<div class="row wthree_banner_bottom_right_grids pr-sm-3">';
	    }

	    if ($j == 1) {
		    echo '<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
		<div class="view view-tenth">
			<div class="agile_text_box">
				<i class="fas fa-bed" aria-hidden="true"></i>
				<h3> Apply for ' . $row1['Mess_name'] . '</h3>
				<p>' . $row1['Mess_name'] . '</p>
				<p>Type:' . $row1['Mess_type'] . '</p>
				<p>Vacancy:' . $row1['Vacancy'] . '</p>
				<p>Size:' . $row1['Size'] . '</p>
			</div>
			<div class="mask">
				<a href="application_form_mess.php?id='. $row1['Mess_name'].'"><img src="web_home/images/s1.jpg" class="img-responsive" alt="" /></a>
			</div>
		</div>
	</div>';
		    $j = $j + 1;
		    $i = $i + 1;
	    } else if ($j == 2) {
		    echo '<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
<div class="view view1 view-tenth">
	<div class="agile_text_box">
		<i class="fas fa-bed" aria-hidden="true"></i>
		<h3>' . $row1['Mess_name'] . '</h3>
		<p>' . $row1['Mess_name'] . '</p>
		<p>Type:' . $row1['Mess_type'] . '</p>
		<p>Vacancy:' . $row1['Vacancy'] . '</p>
		<p>Size:' . $row1['Size'] . '</p>
	</div>
	<div class="mask">
		<a href="application_form_mess.php?id='. $row1['Mess_name'].'"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
	</div>
</div>
</div>';
		    $j = $j + 1;
		    $i = $i + 1;
	    } else if ($j == 3) {
		    echo '<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
<div class="view view2 view-tenth">
	<div class="agile_text_box">
		<i class="fas fa-bed" aria-hidden="true"></i>
		<h3>' . $row1['Mess_name'] . '</h3>
		<p>' . $row1['Mess_name'] . '</p>
		<p>Type:' . $row1['Mess_type'] . '</p>
		<p>Vacancy:' . $row1['Vacancy'] . '</p>
		<p>Size:' . $row1['Size'] . '</p>
	</div>
	<div class="mask">
		<a href="application_form_mess.php?id='. $row1['Mess_name'].'"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
	</div>
</div>
</div>';
		    $j = $j + 1;
		    $i = $i + 1;
	    } else if ($j == 4) {

		    echo '<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
<div class="view view3 view-tenth">
	<div class="agile_text_box">
		<i class="fas fa-bed" aria-hidden="true"></i>
		<h3>' . $row1['Mess_name'] . '</h3>
		<p>' . $row1['Mess_name'] . '</p>
		<p>Type:' . $row1['Mess_type'] . '</p>
		<p>Vacancy:' . $row1['Vacancy'] . '</p>
		<p>Size:' . $row1['Size'] . '</p>
	</div>
	<div class="mask">
		<a href="application_form_mess.php?id='. $row1['Mess_name'].'"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
	</div>
</div>
</div>';
$j = 1;
		    $i = $i + 1;

		   
	    } 
		



	    if ($i % 4 == 0) {
		    echo '<br><br>';
			echo '	</div>
			<div class="clearfix"> </div>
		   </div>
		   </div>
		   </div>';
	    }





	    $hostel_id = $row1['Mess_id'];
	    $hostel_name = $row1['Mess_name'];
	    // $crooms = $row1['No_of_rooms'];
	    // $arooms = $row1['current_no_of_rooms'];
	    // $students = $row1['No_of_students'];


	    //   echo "<tr><td>{$hostel_name}</td><td>{$row1['Hostel_id']}</td><td>{$crooms}</td><td>{$arooms}</td><td>{$students}</td></tr>\n";
    }






    ?>














<!-- banner-bottom -->

<br>
<br>


</div>
			<div class="clearfix"> </div>
		   </div>
		   </div>
		   </div>

	<div class="clearfix"> </div>
	<div class="clearfix"> </div>
	<div class="clearfix"> </div>
<!-- team -->

<!-- //team -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="http://www.ritindia.edu/" target="_blank">RIT <span class="display"> Rajamramnagar</span></a>
		</div>
		<div class="footer-grid">

			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home.php">Home</a>
					</li>

					<li>
						<a href="services_mess.php">Hostels</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>

					<li>
						<a href="profile.php">Mess</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
