<?php
	include('cnx.php');
	


	$q1 = "DELETE FROM eleves WHERE nom = '".$_GET['id']."'";
	$r1 = $db->query($q1);

    


	

	header('location:afficherclasses.php');
?>