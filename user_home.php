<?php
session_start();
$username=$_SESSION["username"];

if(isset($_SESSION['username']))
{
//echo $_SESSION['emailid'];
}
else
{
echo "<script>alert('you must login first!!..');document.location.href='login.php';</script>";
//header("Location:dcrs/Login.php");
echo"this document is protected";
}

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
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>university</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="user_home.php">home</a></li>
						<li class="main_nav_item"><a href="user_university.php">universities</a></li>
						<li class="main_nav_item"><a href="user_feedback.php">feedback</a></li>
						<li class="main_nav_item"><a href="logout.php">logout</a></li>
						
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
			<h1>WELCOME</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<h1>Update Your Profile </h1>

						<div class="contact_form_container">
							
				 <?php
          	
		      $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("university");
			  
			  
		 
		 $retriv="select * from register where username='$username'";
		 $res=mysql_query($retriv,$connect);
		 
		 $result=mysql_fetch_array($res);
		 
		 $name=$result['name'];
		 $dob=$result['dob'];
		 $email=$result['email'];
		 $address=$result['address'];
		
		 $password=$result['password'];
		  $id=$result['id'];

			?> 
            
            
 
            
              <form action="" method="POST">
               <table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td> Name</td>
<td><input type="text" name="name" maxlength="30" class="input_field contact_form_name" value="<?php echo"$name" ?>"/>

</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>E-mail</td>
<td><input type="text" name="email" maxlength="30" class="input_field contact_form_name" value="<?php echo"$email" ?>"/>

</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>Date Of Birth</td>
 
<td>
<input type="date" id="form-field-1" placeholder="" name="dob" class="input_field contact_form_name" value="<?php echo"$dob" ?>"/> </td>
</tr>

 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Address</td>
<td>
<input type="text" name="address" maxlength="10" class="input_field contact_form_name" value="<?php echo"$address" ?>"/> 

</td>
</tr>

<!----- Qualification---------------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Update" name="update">
</td>
</tr>
</table></form>

            
          			
				 <?php
                  	
		      $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("university");
			  
			  
			  
		

				$retriv1="select * from  login where username='$username'";
				$res1=mysql_query($retriv,$connect);
				
				 while($result1=mysql_fetch_array($res1))
                   {
	             // $username=$result1['username'];
	             $password1=$result1['password'];
	          $idd=$result1['id'];
	         
	            
			}
			?>     
            <br>     
 
 <h2>change Password</h2>
       <form action="" method="post">
<table>

<tr><td>Enter new password:</td><td><input type="text" name="txtPswd" value="<?php echo"$password1";?>" class="input_field contact_form_name"  /></td></tr>
<tr><td><input type="submit" name="btnOk" value="Change" /></table></form>


         <?php
if(isset($_POST["btnOk"]))
{

	 $password=$_POST['txtPswd'];
	
	$chng="update login set password='$password' where username='$username'";
	$res2=mysql_query($chng,$connect);
	$chng1="update register set password='$password' where username='$username'";
	$res3=mysql_query($chng1,$connect);
	if($res2>0)
	{
	
		 echo"<script>alert('Password Changed successfully');document.location.href='user_home.php';</script>";
	 }
	 else
	 {
		 echo"<script>alert('failed');document.location.href='user_home.php';</script>";
	 }
		
	
}
	?> 
		 
   
          
          
           
 
 
 
 <?php
			if(isset($_POST["update"]))
			{
		
		 
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $address=$_POST['address'];
	  $dob=$_POST['dob'];
	
				
				$update="update register set name='$name',email='$email',address='$address',dob='$dob' where id='$id'";
				 $ress=mysql_query($update,$connect);
					
			 if($ress>0)
                      {
	                      echo"<script>alert('updated successfully');document.location.href='user_home.php';</script>";
                      }
               else
			   {
				    echo"<script>alert('not success');document.location.href='user_home.php';</script>";
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