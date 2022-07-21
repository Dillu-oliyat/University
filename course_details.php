<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
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
					<span>course</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="user_home.php">Userhome</a></li>
						<li class="main_nav_item"><a href="user_university.php">University</a></li>
						<li class="main_nav_item"><a href="user_feedback.php">Feedback</a></li>
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
					<li class="menu_item menu_mm"><a href="#">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
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

				<div class="menu_copyright menu_mm"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
		</div>
		
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					
					<div class="news_posts">
						<!-- News Post -->
			  <?php
			
			$hdid1=$_POST['hdid1']; 
			
			 $connection=mysql_connect("localhost","root","");
		     $db=mysql_select_db("university");
			 
			
	
			 
			 
			 $res="select * from college_register where id='$hdid1'";
			 $result=mysql_query($res,$connection);
			 
			 
			 
			 
         $fetch=mysql_fetch_array($result);
		 $id=$fetch['id']; 
		  $type=$fetch['type'];
		   $collegename=$fetch['college_name'];
		// $pg_courses=$fetch['pg_courses'];
        // $ug_courses=$fetch['ug_courses'];
		 // $course=$fetch['course'];
		  session_start();
       
		 $_SESSION["collegename"]=$collegename;
		 $email=$_SESSION["email"];
		
		
			
			
			?>

                     
              <form action="" method="post"> 
             <div class="news_post_title">
										<h1><font color="#000000"><u><?php echo "$collegename"; ?></u></font></h1>
									</div>
                        
                  <table width="100%">
                 <tr><td><font color="#000000">Type of Institution:</font></td><td><font color="#000000"><?php echo "$type"; ?></font></td></tr>
                 <tr><td></td></tr>    <br> 
                 <tr><td><h1><font color="#000000">Course Offered</font></td></tr> </form>
                 
                      
                 <tr><td><h3><u><font color="#000000">Post Graduate</font></u></td></tr>
                 
                                         <?php
			
			
			 $connection=mysql_connect("localhost","root","");
		     $db=mysql_select_db("university");
			 
			
	
			 
			 
			 $res2="select * from college_addcourse where type='pg' and college='$collegename'";
			
			 $result2=mysql_query($res2,$connection);
		
         while($fetch2=mysql_fetch_array($result2))
				 {
		 $idd=$fetch2['id']; 
		  $type2=$fetch2['type'];
		   $collegename2=$fetch2['college'];
		 $university2=$fetch2['university'];
         $fee2=$fetch2['fee_structure'];
		  $course2=$fetch2['course'];
		  
       
		 $_SESSION["collegename"]=$collegename;
		 $email=$_SESSION["email"];
		
		
			
			
			?>

            
                 <tr><td>&nbsp;&nbsp;<?php  echo"<form action='user_pgcourse_details.php' method='post'><input type='hidden' name='hihdid' value='{$idd}'/><input type='submit' name='btnDt' value='$course2' style='background:#ffb606;'></form>"; ?> <?php }?>
                 </td></tr>
               
                 
                   <tr><td><h3><font color="#000000"><u>Graduate</u></font></td></tr>
                 
                 
                 
                 
                               
                                         <?php
			
			
			 $connection=mysql_connect("localhost","root","");
		     $db=mysql_select_db("university");
			 
			
	
			 
			 
			 $res1="select * from college_addcourse where type='ug' and college='$collegename'";
			 $result1=mysql_query($res1,$connection);
			 
			 
			 
			 
         while($fetch1=mysql_fetch_array($result1))
		 {
		 $id1=$fetch1['id']; 
		  $type1=$fetch1['type'];
		   $collegename1=$fetch1['college'];
		 $university1=$fetch1['university'];
         $fee1=$fetch1['fee_structure'];
		  $course1=$fetch1['course'];
		  
       
		 $_SESSION["collegename"]=$collegename;
		 $email=$_SESSION["email"];
		
		
			
			
			?>
            
          

                 <tr><td>&nbsp;&nbsp;<?php  echo"<form action='user_ugcourse_details.php' method='post'><input type='hidden' name='hhhh' value='{$id1}'/><input type='submit' name='btn' value='$course1' style='background:#ffb606;'></form>"; ?> <?php }?></td></tr>
                 
                

              
                 
    </table>
									</div>
									
								</div>
							</div>
							<div class="news_post_text">
								
							</div>
							
						</div>

					</div>
					
				
</table>

					<!-- Page Nav -->

					

				</div>

				<!-- Sidebar Column -->

				
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
								<span>course</span>
							</div>
						</div>

						<p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="courses.html">Courses</a></li>
								<li class="footer_list_item"><a href="#">News</a></li>
								<li class="footer_list_item"><a href="contact.html">Contact</a></li>
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
					<span>Colorlib All rights reserved</span>
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
<script src="plugins/easing/easing.js"></script>
<script src="js/news_custom.js"></script>

</body>
</html>