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
                   
                   
                   
                   
                   
                   
                  <form action="" method="post" enctype="multipart/form-data">
                  
                  <table class="form">
               
                        <tr>
                            <td>
                                <label>
                                    University</label>
                            </td>
                            <td>
                                <input type="text" class="mini" name="name" required="required" />
                            </td>
                        </tr>
                  
                        <tr>
                            <td>
                                <label>
                                    Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" required="required" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>
                                    Address</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="address" required="required"></textarea>
                            </td>
                        </tr>
                              <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>
                                    Description</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="Description" required="required"></textarea>
                            </td>
                        </tr>
                        <tr align="right">
                        <td>
                        <input type="submit" value="SUBMIT" name="submit"class="btn btn-navy">
			</td></tr>
                    </table>
                  
                  
                  </form>
                  <?php

				  
                   
                    if(isset($_POST["submit"]))
 {
	 $connect=mysql_connect("localhost","root","");
     $db=mysql_select_db("university");
	 
	 
	 $name=$_POST["name"];
	 $address=$_POST["address"];
	 $description=$_POST["Description"];

	 
	 $source=$_FILES["image"]["tmp_name"];
	 $dest='uploads/'.$_FILES["image"]["name"];
	 move_uploaded_file($source,$dest);
	 
	 $insert="insert into university_name(University,Image,Address,Description)values('{$name}','{$dest}','{$address}','{$description}')";
	 $res=mysql_query($insert,$connect);
	 
	 
	 if($res>0)
	 {
	 
	 echo "<script>alert('inserted successfully');document.location.href='manage_universities.php';</script>";
	 }
	 else
	 {
	
	 echo "<script>alert('inserted failed');document.location.href='manage_universities.php';</script>";
	 } 
 }
 ?>
                   
    
                   <?php
				   $connection=mysql_connect("localhost","root","");
				   $db=mysql_select_db("university");
				   $res="select * from university_name";
				   $result=mysql_query($res,$connection);
				   echo"<table border='1' width='800' height='300'><tr bgcolor='#006699'><th>id</th><th>University</th><th>Image</th><th>Address</th><th>Description</th></tr>";
				  $id='1';
				   while($fetch=mysql_fetch_array($result))
				   {
				       $id=$fetch["id"];
					   $university=$fetch["University"];
					   $address=$fetch["Address"];
					   $image=$fetch["Image"];
					      $description=$fetch["Description"];
					  
					   echo "<tr><td>$id</td>";
					   echo "<td>$university</td>";
					   echo "<td><img src='$image' height='60' width='60'></td>";
					   echo "<td>$address</td>";
					   echo "<td>$description</td>";
					   echo"<td><form action='' method='post'><input type='hidden' name='hid' value='$id'><input type='submit' name='btnDelete' value='Delete'></form>";
					   $id++;
					   
					   }
					   echo "</table>";
					   
					     if(isset($_POST["btnDelete"]))
 {
	 
      $hid=$_POST['hid'];


	 $delete="delete from  university_name where id='$hid'";
	 $result=mysql_query($delete,$connection);
	 if($result>0)
	 {
	  echo "<script>alert('deleted successfully');document.location.href='manage_universities.php';</script>";
		
	 }
	 else
	 {
		echo "<script>alert('Try again');document.location.href='manage_universities.php';</script>";
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
