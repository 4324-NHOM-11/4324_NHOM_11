
<?php 
include_once 'header.php';
include_once 'dbconnect.php';

$id_news=$_GET['id'];
$queryXoaTin = "DELETE FROM tintuc WHERE maTinTuc={$id_news} LIMIT 1";
$resultXoaTin=$mysqli->query($queryXoaTin);
if ($resultXoaTin){
	header("LOCATION: list.php?mgs=Xóa Thành Công");
	exit();
}else{
	echo "lỗi";
}
?>
</div>
