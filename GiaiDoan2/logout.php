<?php
include_once 'header.php';
?>
<div>
<?php 
if (isset($_SESSION['iduser'])){
	unset($_SESSION['iduser']);
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
	unset($_SESSION['fullname']);
	
	header("LOCATION: ../index.php");
	exit();
}

?>
</div>