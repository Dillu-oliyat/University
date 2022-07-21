<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Typography | BlueWhale Admin</title>
   <link rel="stylesheet" type="text/admin_css" href="admin_css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin_css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin_css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin_css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin_css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="js/jqPlot/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.donutRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"></script>
    <!-- END: load jqplot -->
    <script src="js/setup.js" type="text/javascript"></script>
  <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

          			setSidebarHeight();


        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft"></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                       
                            <li><a href="index.php">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
             <li class=""><a href="admin_menu.php"><span>Home</span></a> </li>
                <li class=""><a href="manage_universities.php"><span>Manage University</span></a> </li>
                <li class=""><a href="admin_add_college.php"><span>Manage Colleges</span></a>
                 
                </li>
                <li class=""><a href="admin_feedback.php"><span>FeedBack</span></a></li>
				<li class=""><a href="user_details.php"><span>User Details</span></a></li>
              
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_10">
            <div class="box round first">
                <h2>Welcome Admin</h2>
                <div class="block">
                
                
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

 $retriv="select * from college_register where id='$iid'";
 $res=mysql_query($retriv,$connect);
 while($fetch=mysql_fetch_array($res))
				   {
					   $id=$fetch['id'];
				 $university=$fetch['university'];
				$catogory=$fetch['category'];
				$cname=$fetch['college_name'];
				$address=$fetch['address'];
				$pincode=$fetch['pincode'];
				$district=$fetch['district'];
				$phone=$fetch['phone'];
				$email=$fetch['email'];
				$type=$fetch['type'];
				$pg=$fetch['pg_course'];
				$ug=$fetch['ug_course'];
				$status=$fetch['status'];
					   
 
	 echo"<form action='' method='post' ><table>";
	 echo"<tr><td>Id:</td><td>$iid</td></tr>";
	 echo"<tr><td>university:</td><td>$university</td></tr>";
	 echo"<tr><td>catogory:</td><td>$catogory</td></tr>";
	 echo"<tr><td>cname:</td><td>$cname</td></tr>";
	 echo"<tr><td>address:</td><td><br>$address<br>$pincode<br>$district<br>$phone</td></tr>";
	 echo"<tr><td>email:</td><td>$email</td></tr>";
	 echo"<tr><td>type:</td><td>$type</td></tr>";
	 echo"<tr><td>pg:</td><td>$pg</td></tr>";
	 echo"<tr><td>ug:</td><td>$ug</td></tr>";
	 echo"<tr><td>status:</td><td>$status</td></tr>";
	 echo"<tr><td>Reply:</td><td><textarea name='txtReply'></textarea></td></tr>";
	 echo"<tr><td><input type='submit' name='btnReply' value='Send' /><input type='hidden' name='hidid' value='$iid' /><input type='hidden' name='hid3' value='$email' /></td></tr>";
	 echo"<tr><td><form action='' method='post'><input type='hidden' name='hid' value='$id'><input type='submit' name='btnDelete' value='Delete'></form></td></tr></table></form>";
	 
 }
 if(isset($_POST["btnReply"]))
 {
	// $date=date("y,m,d");
//	$rply=$_POST['txtReply'];
//	$id=$_POST['hidid'];
//	$email=$_POST['hid3'];
//	$utype=$_POST['hid2'];
	//$insert="insert into enquiry_reply(enquiryid,reply,date,usertype,emailid)values('{$id}','{$rply}','{$date}','{$utype}','{$email}')";
	$updt="update college_register set status='approved' where id='$id'";
	
	$res=mysql_query($updt,$connect);
	
	if($res>0)
	 {
	  echo "<script>alert('Message send successfully');document.location.href='admin_add_college.php';</script>";
	
	 }
	 else
	 {
		echo "<script>alert('Message send Failed');document.location.href='admin_add_college.php';</script>";
	 }
	 
	 
 }
 
   if(isset($_POST["btnDelete"]))
 {
	 
      $hid=$_POST['hid'];


	 $delete="delete from  college_register where id='$hid'";
	 $result=mysql_query($delete,$connect);
	 if($result>0)
	 {
	  echo "<script>alert('deleted successfully');document.location.href='admin_add_college.php';</script>";
		
	 }
	 else
	 {
		echo "<script>alert('Try again');document.location.href='admin_add_college.php';</script>";
	 }
	
 }
 
 
?>
                
                   
                  
                   
                   
                   
                   
                   
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            <a href="#"></a>
        </p>
    </div>
    
</body>
</html>
