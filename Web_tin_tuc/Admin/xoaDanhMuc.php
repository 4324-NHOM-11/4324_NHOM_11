<?php 
include_once 'header.php';
include_once 'dbconnect.php';

$id = $_GET['id'];

$queryXoaDM = "DELETE FROM theloai WHERE maTheLoai={$id} LIMIT 1";
$resultXoaDM = $mysqli->query($queryXoaDM);
if ($resultXoaDM){
	header("LOCATION: danhmuc.php?mgs=Xóa Thành Công");
	exit();
}else{
	echo "Lỗi";
}
?>
