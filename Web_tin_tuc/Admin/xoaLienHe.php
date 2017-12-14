<?php
include_once 'header.php';
include_once 'dbconnect.php';

$id = $_GET['id'];
$queryXoaLH = "DELETE FROM lienhe WHERE maLienHe = {$id} LIMIT 1";
$resultXoaLH = $mysqli->query($queryXoaLH);
if ($resultXoaLH){
	header("LOCATION: lienhe.php?mgs='Xóa Thành Công'");
	exit();
}else {
	echo "<p class='error'>lỗi</p>";
}
?>