<?php

session_start();
	$username=$_SESSION["username"];
?>


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
						<li class="main_nav_item"><a href="college_managedetails.php">Manage Details</a></li>
						<li class="main_nav_item"><a href="college_addcourse.php">Add Course Details</a></li>
						<li class="main_nav_item"><a href="college_pgapplications.php">PG Applications</a></li>
						<li class="main_nav_item"><a href="college_ugapplications.php">UG Applications</a></li>
						<li class="main_nav_item"><a href="login.php">Logout</a></li>
					
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
			<h1>PG Applications</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
				
<?php 


$iid=$_POST['hidid']; 


function Message($message)
   {
	   echo "<script type='text/javascript' >";
	   echo "alert('".$message."'); ";
	   echo "</script>";
	   
   }
 
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("university");

 $retriv="select * from ug_registration where id='$iid'";
 $res=mysql_query($retriv,$connect);
 while($fetch=mysql_fetch_array($res))
				   {
					   $id=$fetch['id'];
				 $first_name=$fetch['first_name'];
				$last_name=$fetch['last_name'];
				$dob=$fetch['date_of_birth'];
				$emailid=$fetch['email_id'];
				$mobile_number=$fetch['mobile_number'];
				$gender=$fetch['gender'];
				$address=$fetch['address'];
				$city=$fetch['city'];
				$pincode=$fetch['pincode'];
				$state=$fetch['state'];
				$biodata=$fetch['biodata'];
				$hobbies=$fetch['hobbies'];
				$course=$fetch['course'];
				$status=$fetch['status'];
				$photo=$fetch['photo'];
 
	 echo"<form action='' method='post' ><table>";
	  echo"<tr><td>Photo:</td><td><img src='$photo' width='150' height='150'></td></tr>";
	 echo"<tr><td>Id:</td><td>$iid</td></tr>";
	 echo"<tr><td>first_name:</td><td>$first_name</td></tr>";
	 echo"<tr><td>last_name:</td><td>$last_name</td></tr>";
	 echo"<tr><td>dob:</td><td>$dob</td></tr>";
	 echo"<tr><td>emailid:</td><td>$emailid</tr>";
	 echo"<tr><td>mobile_number:</td><td>$mobile_number</td></tr>";
	 echo"<tr><td>gender:</td><td>$gender</td></tr>";
	 echo"<tr><td>address:</td><td>$address</td></tr>";
	 echo"<tr><td>city:</td><td>$city</td></tr>";
	 echo"<tr><td>pincode:</td><td>$pincode</td></tr>";
	 echo"<tr><td>state:</td><td>$state</td></tr>";
	 echo"<tr><td>biodata:</td><td>$biodata</td></tr>";
	 echo"<tr><td>hobbies:</td><td>$hobbies</td></tr>";
	 echo"<tr><td>course:</td><td>$course</td></tr>";
	 echo"<tr><td>status:</td><td>$status</td></tr>";
	 echo"<tr><td>Reply:</td><td><textarea name='txtReply'></textarea></td></tr>";
	 echo"<tr><td><input type='submit' name='btnReply' value='Send' />&nbsp;<input type='submit' name='btnDelete' value='Rejected'/></td><input type='hidden' name='hidid' value='$iid' /><input type='hidden' name='hid3' value='$emailid' /></td></tr></table></form>";
	 
 }
 if(isset($_POST["btnReply"]))
 {
	// $date=date("y,m,d");
//	$rply=$_POST['txtReply'];
//	$id=$_POST['hidid'];
//	$email=$_POST['hid3'];
//	$utype=$_POST['hid2'];
	//$insert="insert into enquiry_reply(enquiryid,reply,date,usertype,emailid)values('{$id}','{$rply}','{$date}','{$utype}','{$email}')";
	$updt="update ug_registration set status='selected' where id='$id'";
	
	$res=mysql_query($updt,$connect);
	
	if($res>0)
	 {
		echo "<script>alert('Message send successfully');document.location.href='college_home.php';</script>";
		 
	 }
	 else
	 {
		echo "<script>alert(' failed');document.location.href='college_home.php';</script>";
	 }
	 
	 
 }
 
  if(isset($_POST["btnDelete"]))
 {
	 
      $iid=$_POST['hidid'];


	 $delete="update ug_registration set status='rejected' where id='$id'";
	 $result=mysql_query($delete,$connect);
	 if($result>0)
	 {
	 echo "<script>alert('rejected successfully');document.location.href='college_home.php';</script>";
		
	 }
	 else
	 {
		echo "<script>alert('rejection failed');document.location.href='college_home.php';</script>";
	 }
	
 }
 
 
?>
                
                   
                  
                   
                   
                   
         					
					<!-- Contact Form -->
					<div class="contact_form">
						

						<div class="contact_form_container">
							
						</div>
					</div>
						
				</div>																																																																	

				<div class="col-lg-4">
					<div class="about">
						
						

						

					</div>
				</div>

			</div>

			<!-- Google Map -->

			

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