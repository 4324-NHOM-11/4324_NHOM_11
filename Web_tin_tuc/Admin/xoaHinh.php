<?php 

$id = $_GET['id'];
$query = "SELECT * FROM tin WHERE idtin={$id}";

$result = $mysqli->query($query);
$arTin = mysqli_fetch_assoc($result);
	$tenhinh = $arTin['hinhanh'];
	echo $tenhinh;die();

unlink($_SERVER['DOCUMENT_ROOT'].'/Javionline-vs-1/images/'.$tenhinh);
?>