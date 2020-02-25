<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');
}


 
?>
<!DOCTYPE html>
<?php

 include('cnx.php');

?>
<html>
<head>
	<?php include('inccss.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/styleannee.css">

 
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>
<?php include('menu.php'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main anne">
	<br>
	
	<a href="afficherprof2018.php"><img src="2017.jpg"></a>
	<br>
<a href="afficherprof2019.php"><img src="2018.jpg"></a>
	<br>
	<a href="afficherprof2020.php"><img src="2019.jpg"></a>
	
</div>
</body>
</html>
