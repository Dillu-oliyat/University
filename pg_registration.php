<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>University Management</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			
			<ul class="navigation">
		<a href="user_university.php">BACK TO HOME</a>
		  </ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
		  <div class="main">
          
            <?php
			
			 $connection=mysql_connect("localhost","root","");
		     $db=mysql_select_db("university");
			
		   session_start();
		 $collegename=$_SESSION["collegename"];
		  $email=$_SESSION["email"];
		  
		  
		  $hhddd=$_POST['hhddd']; 
		  
		   
			 $res1="select * from  college_addcourse where id='$hhddd'";
			 $result1=mysql_query($res1,$connection);
			
			 
			 
         $fetch1=mysql_fetch_array($result1);
				
				 $id1=$fetch1['id']; 
		  $type1=$fetch1['type'];
		   $collegename1=$fetch1['college'];
		 $university1=$fetch1['university'];
         $fee1=$fetch1['fee_structure'];
		 $course1=$fetch1['course'];
		
				
		  ?>
          
           <script type="text/javascript">
	  
         function validateEmail(email)
{

	result = false;

	var expEmail = /^[a-zA-Z0-9._-]+[@a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	if(expEmail.test(email) == true)
	{
		result = true;
	}

	return result;

} 



function doRegister()
{
	if(document.getElementById('firstname').value == "")
	{
		alert("Please Enter firstname");
	}
	else if(document.getElementById('lastname').value == "")
	{
		alert("Please Enter lastname");
	}
	else if(document.getElementById('dob').value == "")
	{
		alert("Please Enter dob");
	}
	
	
	else if(document.getElementById('email').value == "")
	{
		alert("Please Enter Email ID");
	}
	else if(validateEmail(document.getElementById('email').value) == false)
	{
		alert("Invalid Email ID");
	}
	else if(document.getElementById('mobile').value == "")
	{
		alert("Please Enter mobile");
	}
	else if(document.getElementById('gender').value == "")
	{
		alert("Please Enter gender");
	}
	else if(document.getElementById('address').value == "")
	{
		alert("Please Enter address");
	}
	else if(document.getElementById('city').value == "")
	{
		alert("Please Enter city");
	}
	
	 else if(document.getElementById('pin').value == "")
	{
		alert("Please enter pin");
	}

	else if(document.getElementById('state').value == "")
	{
		alert("Please Enter state");
	}
	
	
	 else if(document.getElementById('biodata').value == "")
	{
		alert("Please Upload biodata");
	}

	else if(document.getElementById('photo').value == "")
	{
		alert("Please upload photo");
	}
	
	else if(document.getElementById('tmark').value == "")
	{
		alert("Please Enter total mark");
	}
	
	else
	{
	
		
	}
}  
</script>
			
          
  <form action="" method="post" enctype="multipart/form-data">
  <table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" class="input_field contact_form_name" name="First_Name" id="firstname" required maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" id="lastname" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" id="dob" placeholder="" name="dob" class="" required />

</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" id="email" maxlength="100" required /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" id="mobile" maxlength="10" required />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" id="gender" value="Male" required />
Female <input type="radio" name="Gender" id="gender" value="Female" required />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30" id="address" required></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" id="city" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" id="pin" required />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" id="state" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 

 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby[]" value="Drawing" id="hobby"  />
Singing
<input type="checkbox" name="Hobby[]" value="Singing" id="hobby"  />
Dancing
<input type="checkbox" name="Hobby[]" value="Dancing" id="hobby"  />
Sketching
<input type="checkbox" name="Hobby[]" value="Cooking" id="hobby"  />
<br />
Others
<input type="checkbox" name="Hobby[]" value="Other" id="hobby" >

</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>UPLOAD BIODATA</td>
<td>
<input type="file" id="biodata"  name="biodata" class="" required />
 </td></tr>
 <tr>
<td>UPLOAD PHOTO</td>
<td>
<input type="file" id="photo"  name="photo" class="" required />
 </td></tr>
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
<input type="text" name="course" value="<?php echo $course1; ?>" readonly maxlength="30" />
</td>
</tr>
<tr>
<td>TOTAL MARK<br />(IN PERSENTAGE)</td>
<td>
<input type="text" name="tmark" id="tmark"  maxlength="30" required />
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" name="submit" onClick="doRegister();">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>

<?php


if(isset($_POST["submit"]))
			{
			
			 $connection=mysql_connect("localhost","root","");
		     $db=mysql_select_db("university");
		
		 $collegename=$_SESSION["collegename"];	
				 
			 
				$firstname=$_POST['First_Name'];
				$lastname=$_POST['Last_Name'];
				$dob=$_POST['dob'];
				$Email_Id=$_POST['Email_Id'];
				$Mobile_Number=$_POST['Mobile_Number'];
				$Gender=$_POST['Gender'];
				$Address=$_POST['Address'];
				$City=$_POST['City'];
				$Pin_Code=$_POST['Pin_Code'];
				$tmark=$_POST['tmark'];
				$State=$_POST['State'];
				$source=$_FILES["biodata"]["tmp_name"];
	            $dest='uploads/'.$_FILES["biodata"]["name"];
	            move_uploaded_file($source,$dest);
				
				$source1=$_FILES["photo"]["tmp_name"];
	            $dest1='uploads/'.$_FILES["photo"]["name"];
	            move_uploaded_file($source1,$dest1);
				
				$Hobby=implode(",",$_POST['Hobby']);
				$Course=$_POST['course'];
				
				 $query="insert into registration(first_name,last_name,date_of_birth,email_id,mobile_number,gender,address,city,pincode,state,biodata,photo,hobbies,course,type,status,collegename,email,total_mark)values('$firstname','$lastname','$dob','$Email_Id','$Mobile_Number','$Gender','$Address','$City','$Pin_Code','$State','$dest','$dest1','$Hobby','$Course','pg','0','$collegename','$email','$tmark')";
				 
				 $result=mysql_query($query,$connection);
					
				  if($result>0)
                      {
		   echo "<script>alert('Your Request Send Successfully.');document.location.href='user_home.php';</script>";
						    
                      }
				
			}

?>



		  </div>
	  </div>
	</div>
	
</body>
</html>