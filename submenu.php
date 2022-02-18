

<div id="mainmenu">
<ul>
	
	<li><a href="alllostfoundids.php">Lost Found Ids</a></li>
	<li><a href="studentid.php">Student Id</a></li>
<?php
if ($role == 'student') {
	echo '

	<li><a href="mylostfoundids.php">My Found Ids</a></li>
	<li><a href="reportfoundid.php">Report Found Id</a></li><br><br><br>
	<li><a href="applyreplacement.php">Apply For Replacement</a></li>
	<li><a href="myapplication.php">My Applications</a></li>
	';
}elseif ($role == 'admin') {
echo '
	<li><a href="allapplications.php">All Applications</a></li>';
}
?>	
</ul>	</div><!-- mainmenu -->
			<!-- breadcrumbs -->
	