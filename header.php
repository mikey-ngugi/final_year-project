 <?php
error_reporting(0);
  //connecting to server and db
  $server = mysqli_connect("localhost", "root");
  $db = mysqli_select_db($server,"jkuat_db"); 
	session_start();
	
	   $user_email = $_SESSION['ses']['0'];

          $select = mysqli_query($server, "SELECT * FROM `usersdetails` WHERE `email`='$user_email'") or die('Mysql Error');

              while ($col=mysqli_fetch_array($select)) {
		    	$_SESSION['ses']['role'] = $col[6];

              }
	    	$role = $_SESSION['ses']['role'];
 
 ?> 
<!-- Mirrored from portal.jkuat.ac.ke/site/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Dec 2018 18:53:16 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="themes/rhea/css/main.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="css/form.css" media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="assets/5b4559bd/css/styles.min.html" />
<script type="text/javascript" src="assets/dff1bb83/jquery.min.js"></script>
<script type="text/javascript" src="assets/dff1bb83/jquery.yiiactiveform.js"></script>
<script type="text/javascript" src="assets/5b4559bd/js/Chart.min.js"></script>
<title>JKUAT Students&#039; Portal - Login</title>
	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-9956376-2', 'auto');
  	ga('require', 'displayfeatures');
	ga('send', 'pageview');
	</script>
</head>