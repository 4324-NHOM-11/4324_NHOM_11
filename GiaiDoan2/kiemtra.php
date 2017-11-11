<?php
if (!$_SESSION['iduser']){
	header("LOCATION: login.php");
	exit();
}

?>