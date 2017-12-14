<?php 
include_once 'header.php';
include_once 'dbconnect.php';

$id = $_GET['id'];

$queryXoaGT = "DELETE FROM gioithieu WHERE maGioiThieu={$id} LIMIT 1";
$resultXoaGT = $mysqli->query($queryXoaGT);
if ($resultXoaGT){
	header("LOCATION: gioithieu.php?mgs=Xóa Thành Công");
	exit();
}else{
	echo "Lỗi";
}
?>
</div>