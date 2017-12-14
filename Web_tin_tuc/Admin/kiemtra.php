<?php
if (!$_SESSION['iduser']){
	header("LOCATION: Login.php");
	exit();
}
?>