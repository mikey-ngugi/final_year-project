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
?>		
<div style="overflow: hidden;">
	<div class="tutorial" style="width: 100%; min-height: 300px;padding: 10px; float: left;">
		<h1>Why use the portal?</h1>
		<p>JKUAT online students' portal helps students access fundamental services offered in the university.
		You can now access your fee statement, posted exam results, register units, track status of your student ID processing and so much more.
		</p>
		<p>Take this opportunity to enjoy improved service delivery! </p>
		<h1>Need Help?</h1>
			<p>
		<strong>How do I log in?</strong><br/>
		Your username is the first part of your student email address e.g  <tt>john.doe@students.jkuat.ac.ke</tt> = <tt>john.doe@students</tt> 
		Your initial password is your registration number in lowercase. Please remember to change your password afterwards.
		</p>
		<p>
		<strong> I don't know my student email</strong><br/>
		Every JKUAT <i>bonafide</i> student has a student email address assigned to him/her. Please activate yours from 
		<a target="_blank" href="http://portal.jkuat.ac.ke/studentemail/">here</a><br/>
		If, after going to the above link, you don't find your details, please send an email to <tt><a href="mailto:admin@students.jkuat.ac.ke">admin@students.jkuat.ac.ke</a></tt>
		</p>
		<p> For more information, please email us at <tt><a href="mailto:portal@jkuat.ac.ke">portal@jkuat.ac.ke</a></tt></p>
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
	
