<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php
include 'header.php';
?>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo" style="overflow: hidden">
			<div style="float: left"> 
				<img class="resize" src="images/jkuat-logo.png" alt="Logo" />			</div>	 
			<div style="float: left; padding: 20px;">
				 JKUAT Students&#039; Portal 
			</div>
					</div>
	</div><!-- header -->
	 <div class="flash-success" style="margin-top: -36px;">
        A new android application for JKUAT Portal is now available.<a href="https://portal.jkuat.ac.ke/app/index">Download from here</a>    	</div>
<?php
include 'mainmenu.php';
?>
<!-- mainmenu -->
			<!-- breadcrumbs -->
	
	<div id="main-content">
		<div class="container">
	<div id="content">
<?php

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $res= mysqli_query($server, "SELECT * FROM usersdetails WHERE email='$email' AND password='$password'") or 
    die(mysql_error());
    //check rows returned
    $count=mysqli_num_rows($res);

    if($count<1)
    {
        echo "<div class='alert alert-block alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            <strong>Failed to log in.</strong>Wrong email or password.<br/>
            <br/>
            </div>";

    }
    else
    {


    $_SESSION['ses']=array();
    $_SESSION['ses']['0']=$email;

    header("location:home.php");
    }
}

 if (isset($_POST['report'])) {


                              $reg_no = $_POST['reg_no'];
                              $owner_name = $_POST['owner_name'];
                              $place_found = $_POST['place_found'];
                              $name = $_POST['name'];
                              $phone_no = $_POST['phone_no'];

                              $date=date('Y-m-d');
                              $time= date("G:i:s");
//SELECT `id`, `reg_no`, `owner_name`, `place_found`, `phone_no`, `name`, `email`, `date`, `time` FROM `lost_ids` WHERE 1

        $insert = mysqli_query($server, "INSERT INTO  `lost_ids`(`reg_no`, `owner_name`, `place_found`, `phone_no`, `name`, `email`, `date`, `time`) VALUES ('$reg_no', '$owner_name', '$place_found','$phone_no','$name','$user_email','$date','$time')") ;
                                  


                if ($insert) {
                  echo "<div class='alert alert-block alert-success'>
                   <button type='button' class='close' data-dismiss='alert'>×</button>
                   Successfully posted<br/> </div>";
                }else {
                  echo "<div class='alert alert-block alert-danger'>
                   <button type='button' class='close' data-dismiss='alert'>×</button>
                   Posting failed. Please try again<br/> </div>";
                }

                                    
                                }                              
                            ?> 
<div style="overflow: hidden;">
<?php
include 'submenu.php';
?>	
	<div class="tutorial" style="width: 57.6%; min-height: 300px;padding: 10px; float: left;">
		<h1>Welcome to Students ID Portal</h1>
		<p>Thank you for trying JKUAT new Student ID portal. Here you can access all the details of your STUDENT ID and be able to report any cases of lost and found. Its now easey. You have lost your id? Worry know more at the gate. Track status of your student ID processing and so much more.
		</p>
		<p><?php
          $select = mysqli_query($server, "SELECT * FROM `usersdetails` WHERE `email`='$user_email'") or die('Mysql Error');

              while ($col=mysqli_fetch_array($select)) {
		    	echo "
		    	<img src='_img/avatar.jpg' height='150px' width='150px'></img><br>
		    	<b>Name:</b> $col[1] $col[2]<br><br>
		    	<b>National id no:</b> $col[3]<br><br>
		    	<b>Email:</b> $col[4].ac.ke<br><br>
		    	<b>Ref No:</b> $col[5]";

              }
		?> </p>

	</div>
	<div id="login-area">
		<h1>Report Found Id</h1>
		<p>
			Please fill out the following form with your login credentials:
		</p>

		<div class="form">
			<form id="login-form" method="post">
			<p class="note">
				Fields with <span class="required">*</span> are required.
			</p>

			<div class="row">
				<label  class="required">Reg no<span class="required">*</span></label>				
				<input placeholder="hb123-456/2015" name="reg_no" type="text" />
			</div>


			<div class="row">
				<label  class="required">Owner Name<span class="required">*</span></label>				
				<input placeholder="John Doe" name="owner_name" type="text" />
			</div>


			<div class="row">
				<label  class="required">Place found<span class="required">*</span></label>				
				<input placeholder="Place Found" name="place_found" type="text" />
			</div>

			<div class="row">
				<label  class="required">Your phone no.<span class="required">*</span></label>				
				<input placeholder="e.g 0712345678" name="phone_no" type="text" />
			</div>

			<div class="row">
				<label  class="required">Your name<span class="required">*</span></label>				
				<input placeholder="e.g John" name="name" type="text" />
			</div>

			 
			<div class="row buttons">
				<input class="cupid-green" type="submit" name="report" value="Report Id" />			</div>

			</form>		</div><!-- form -->


	</div>
</div>
	</div><!-- content -->
</div>
	</div>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; 2018 JKUAT. All Rights Reserved.
	</div><!-- footer -->
</div><!-- page -->
 <p class="disclaimer">
    <strong> DISCLAIMER: <br/></strong>
	<i>This document has been printed from the JKUAT students' portal. It is for informational purposes only and should not be presented as the official document to any entity whatsoever. For official documents, kindly refer to JKUAT Students Finance office or the relevant office concerned.</i>
</p>
<script type="text/javascript">
</script>
</body>

<!-- Mirrored from portal.jkuat.ac.ke/site/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Dec 2018 18:53:16 GMT -->
</html>
	
