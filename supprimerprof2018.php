<?php
	include('cnx.php');
	


	$q1 = "DELETE FROM prof2018 WHERE nom = '".$_GET['id']."'";
	$r1 = $db->query($q1);

    


	

	header('location:afficherprof2018.php');
?>