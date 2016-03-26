<?php session_start();
	$_SESSION['nom'] = NULL;
	$_SESSION['password'] = NULL;
	
					header('Location: index.php');
?>
