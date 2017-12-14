<?php
include_once 'header-taikhoan.php';
include_once 'dbconnect.php';

$id = $_GET['id'];
$queryXoaTK = "DELETE FROM users WHERE IdUser = {$id} LIMIT 1";
$resultXoaTK = $mysqli->query($queryXoaTK);
if ($resultXoaTK)
	{
		header("LOCATION: taikhoan.php?mgs=Xóa Thành Công");
	}
	else 
	{
		echo "Lỗi";
	}
?>