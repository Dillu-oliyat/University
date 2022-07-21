<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">home</a></li>
						<li class="main_nav_item"><a href="about_us.php">about us</a></li>
						<li class="main_nav_item"><a href="university.php">universities</a></li>
						<li class="main_nav_item"><a href="registration.php">registration</a></li>
						<li class="main_nav_item"><a href="contact.php">contact</a></li>
						<li class="main_nav_item"><a href="login.php">login</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+43 4566 7788 2457</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Registration</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<h1>COLLEGE REGISTRATION </h1>

						<div class="contact_form_container">
							<form action="" method="post" enctype="multipart/form-data">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="name" placeholder="University" required="required" data-error="Name is required.">
								
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="category" placeholder="Category" required="required" data-error="Name is required.">
								
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="college_name" placeholder="College Name" required="required" data-error="College name is required.">
								
								<textarea id="contact_form_address" class="input_field contact_form_address" type="text" name="address" placeholder="Address" required="required" data-error="Address is required."></textarea>
								
							<input id="contact_form_name" class="input_field contact_form_name" type="int" name="pincode" placeholder="Pincode" required="required" data-error="Pincode is required.">
							
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="district" placeholder="District" required="required" data-error="District is required.">
								
								<input id="contact_form_name" class="input_field contact_form_name" type="int" name="phone" placeholder="Phone no." required="required" data-error="Phone number is required.">
								
								<input id="contact_form_email" class="input_field contact_form_email" type="email" name="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								
								<select id="contact_form_name" class="input_field contact_form_name"  name="type" placeholder="Type" required="required" data-error="Type is required.">
								<option>aided</option>
								<option>unaided</option></select>
								
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="pg_course" placeholder="PG Course" required="required" data-error="PG course is required.">
								
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="ug_course" placeholder="UG Course" required="required" data-error="UG course is required.">
								
								
								
								<input id="contact_form_password" class="input_field contact_form_password" type="password" name="password" placeholder="Password" required="required" data-error="Password is required.">
								
								<input id="contact_form_password" class="input_field contact_form_password" type="password" name="cpassword" placeholder="Confirm Password" required="required" data-error="Password is required.">
								
								<input id="contact_form_name" class="input_field contact_form_name" type="file" name="image" placeholder="Image" required="required" data-error="Image is required.">
								
								<input type="submit" name="a" value="REGISTER" class="contact_send_btn trans_200">
							</form>
							
							 <?php
			
			if(isset($_POST["a"]))
			{
				
				$university=$_POST['name']; 
				$category=$_POST['category'];			
				$college=$_POST['college_name'];
				$address=$_POST['address'];
				$pincode=$_POST['pincode'];
				$district=$_POST['district'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$type=$_POST['type'];
				$pg=$_POST['pg_course'];
				$ug=$_POST['ug_course'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$status=$_POST['status'];
				
				$source=$_FILES["image"]["tmp_name"];
	 			$dest='uploads/'.$_FILES["image"]["name"];
	 			move_uploaded_file($source,$dest);
				
				$connect=mysql_connect("localhost","root","");
	            $db=mysql_select_db("university");
				if($password==$cpassword)
				{
			      $query="insert into college_register(university,category,college_name,address,pincode,district,phone,email,type,pg_course,ug_course,password,status,image)values('$university','$category','$college','$address','$pincode','$district','$phone','$email','$type','$pg','$ug','$password',0,'$dest')";
				}
				else
				{
					echo "<script>alert('please confirm your password');document.location.href='college_register.php';</script>";
				}
				$result=mysql_query($query,$connect);

				if($password==$cpassword)
				{
				
				 $query1="insert into login(username,password,usertype)values('{$email}','{$password}','college')";
                $result=mysql_query($query1,$connect);
				}
				
			 if($result>0)
                      {
	                      echo"<script>alert('registered successfully');document.location.href='register.php';</script>";
                      }
               
				
			
			}
			
			
			
			?>
						</div>
					</div>
						
				</div>																																																																	

				<div class="col-lg-4">
					<div class="about">
						
						

						

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>university</span>
							</div>
						</div>

						

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Home</a></li>
								<li class="footer_list_item"><a href="#">ABOUT US</a></li>
								<li class="footer_list_item"><a href="courses.html">UNIVERSITIES</a></li>
								<li class="footer_list_item"><a href="news.html">REGISTRATION</a></li>
								<li class="footer_list_item"><a href="#">CONTACT</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Ar�valo
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>