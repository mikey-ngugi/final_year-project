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

 if (isset($_POST['apply'])) {





                              $reg_no = $_POST['reg_no'];
                              $name = $_POST['name'];
                              $phone_no = $_POST['phone_no'];
                              $email = $user_email;

                              $date=date('Y-m-d');
                              $time= date("G:i:s");

//Uploading file
$target_dir = "_file/";
$target_file1 = $target_dir . basename($_FILES["abstract"]["name"]);
$target_file2 = $target_dir . basename($_FILES["receipt"]["name"]);
$uploadOk = 1;
$abstract = basename($_FILES["abstract"]["name"]);
$receipt = basename($_FILES["receipt"]["name"]);

// Check if file already exists
if (file_exists($target_file1) && file_exists($target_file2)) {
        echo "<div class='alert alert-block alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Sorry, File already exists.<br/> </div>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='alert alert-block alert-danger'>
          <button type='button' class='close' data-dismiss='alert'>×</button>
          Sorry, your file was not uploaded.<br/> </div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["abstract"]["tmp_name"], $target_file1) || move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_file2)) {
            echo "<div class='alert alert-block alert-success'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your files have been uploaded.<br/> </div>";
    } else {
        echo "<div class='alert alert-block alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Sorry, there was an error uploading your files. Please try again.<br/> </div>";
    }
}


        $insert = mysqli_query($server, "INSERT INTO  `apply_id`(`reg_no`, `name`, `phone_no`, `email`, `abstract`, `receipt`, `date`, `time`)  VALUES ('$reg_no', '$name', '$phone_no','$email','$abstract','$receipt','$date','$time')") ;
                                  


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

	<div class="tutorial" style="width: 57.6%; min-height: 300px;padding: 10px; float: left;" id="login-area">
		<h1>Apply for replacement</h1>
		<p>
			Please fill out the following form with your login credentials:
		</p>

		<div class="form">
			<form id="login-form" method="post"  enctype="multipart/form-data">
			<p class="note">
				Fields with <span class="required">*</span> are required.
			</p>

			<div class="row">
				<label  class="required">Reg no<span class="required">*</span></label>				
				<input placeholder="hb123-456/2015" name="reg_no" type="text" />
			</div>

			<div class="row">
				<label  class="required">Your name<span class="required">*</span></label>				
				<input placeholder="e.g John" name="name" type="text" />
			</div>

			<div class="row">
				<label  class="required">Your phone no.<span class="required">*</span></label>				
				<input placeholder="e.g 0712345678" name="phone_no" type="text" />
			</div>


			<div class="row">
				<label  class="required">Police Abstract<span class="required">*</span></label>				
				<input placeholder="" id="abstract" name="abstract" type="file" />
			</div>
			
			<div class="row">
				<label  class="required">Scanned Payment Receipt<span class="required">*</span></label>				
				<input placeholder="" id="receipt" name="receipt" type="file" />
			</div>
			 
			<div class="row buttons">
				<input class="cupid-green" type="submit" name="apply" value="Report Id" />			</div>

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
	
