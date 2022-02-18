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
	<div class="tutorial" style="width: 100%; min-height: 300px;padding: 10px; float: left;">
		<h1>Welcome to Students ID Portal</h1>
		<p>Thank you for trying JKUAT new Student ID portal. Here you can access all the details of your STUDENT ID and be able to report any cases of lost and found. Its now easey. You have lost your id? Worry know more at the gate. Track status of your student ID processing and so much more.
		</p>

		<h1>All Applications</h1>
					<table class="table" border="1">
						<thead>
							<tr>
								<th>Id</th>
								<th>Reg no</th>
								<th>Name</th>
								<th>Phone no</th>
								<th>Email</th>
								<th>Abstract</th>
								<th>Receipt</th>
								<th>Date</th>
								<th>Time</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
                                    if(isset($_GET['ud']))
                                    {
                                        $ud = $_GET['ud'];
                                        $st = $_GET['st'];
                                        $user_email = $_SESSION['ses']['0'];

                                      
if ($st =='a') {
    $update = mysqli_query($server, "UPDATE `apply_id` SET `status`='Ready' WHERE id='$ud'") or die('Error');
}else if ($st == 'r') {
    $update = mysqli_query($server, "UPDATE `apply_id` SET `status`='In Progress' WHERE id='$ud'") or die('Error');
}
                                                if ($update) {
                                                  echo "<div class='alert alert-block alert-success'>
                                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                                    Status was successfully set.<br/> </div>";
                                                }else {
                                                  echo "<div class='alert alert-block alert-danger'>
                                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                                   Failed to set status. Please try again.<br/> </div>";
                                                }


                                    }

									 if(isset($_GET['dd']))
                                    {
                                        $dd = $_GET['dd'];

                                                $delete = mysqli_query($server, "DELETE FROM `apply_id` WHERE id='$dd'") or die('Error');
                                                if ($delete) {
                                                  echo "<div class='alert alert-block alert-success'>
                                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                                    Id successfully removed.<br/> </div>";
                                                }else {
                                                  echo "<div class='alert alert-block alert-danger'>
                                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                                   Failed to remove Id. Please try again.<br/> </div>";
                                                }
                                            }

                        $select = mysqli_query($server, "SELECT * FROM `apply_id` ORDER BY `reg_no`ASC ") or die('Mysql Error');
                            while ($column=mysqli_fetch_array($select)) {
                            	echo "
                            	<tr>
                            		<td>$column[0]</td>
                            		<td>$column[1]</td>
                            		<td>$column[2]</td>
                            		<td>$column[3]</td>
                            		<td>$column[4]</td>
                            		<td><a href='_file/$column[5]'>$column[5]</a></td>
                            		<td><a href='_file/$column[6]'>$column[6]</a></td>
                            		<td>$column[7]</td>
                            		<td>$column[8]</td>
                            		<td>$column[9]</td>
                                <td><a class='btn btn-mini btn-info' href='allapplications.php?st=a&ud=$column[0]'>Ready</a>
                                <br><br><a class='btn btn-mini btn-danger' href='allapplications.php?st=r&ud=$column[0]'>In progress</a></td>
                            	</tr>
                            	";
                            }
							?>


						</tbody>
					</table>
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
	
