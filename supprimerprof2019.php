<?php
	include('cnx.php');
	


	$q1 = "DELETE FROM prof2019 WHERE nom = '".$_GET['id']."'";
	$r1 = $db->query($q1);

    


	

	header('location:afficherprof2019.php');
?>