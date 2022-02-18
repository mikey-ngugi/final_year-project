
	<div id="mainmenu">
		<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Fee Statements</a></li>
<li><a href="#">Exam Results</a></li>
<li><a href="#">Unit Registration</a></li>
<li><a href="#">Library</a></li>
<li><a href="#">Evaluation</a></li>
<li><a href="studentid.php">Student Id</a></li>
<li><a href="index.php?log_out">Log Out</a></li>
</ul>	</div><!-- mainmenu -->
			<!-- breadcrumbs -->
<?php

                                  if(isset($_GET['log_out']))
                                        {
                                            $log_out = $_GET['log_out'];
                                            session_destroy();
                                            header("location:index.php");
                                        }
?>	