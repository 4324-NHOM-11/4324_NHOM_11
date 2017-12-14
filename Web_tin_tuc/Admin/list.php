<?php
include_once 'header.php';
include_once 'dbconnect.php';
define('COUNT_PER_PAGE', 10);

$count = COUNT_PER_PAGE;
$offset = 0;
if(isset($_GET['o'])){
	$o = $_GET['o'];
	$offset = ($o - 1) * $count;
}
$queryTD = "SELECT count(maTinTuc) AS tongdong FROM tintuc";
$resultTD = $mysqli->query($queryTD);
$arTD = mysqli_fetch_assoc($resultTD);
$tongdong = $arTD['tongdong'];
$sotrang = ceil($tongdong/$count);

$queryTin = "SELECT * FROM tintuc ORDER BY maTinTuc DESC LIMIT $offset,$count";
$resultTin = $mysqli->query($queryTin);

if (!isset($_GET['begin'])){
	$begin=0;
}else {
	$begin = $_GET['begin']; 
}
$tranghientai = ($begin/$count) +1;
?>
<div class="bottom-spacing">
	<!-- Button -->
	<div class="float-left">
		<a href="addTinTuc.php" class="button"> <span>Thêm Tin Tức Mới <img
				src="images/plus-small.gif" alt="Thêm tin mới"> </span> </a>
	</div>
	<div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
	<?php 
		if (isset($_GET['mgs'])){
			$mgs = $_GET['mgs'];
			echo "<p class='notification n-success'>$mgs</p>";
		}
	?>
		<h2>
			<span>Danh sách tin tức</span>
		</h2>

		<div class="module-table-body">
		
			<form action="" enctype="multipart/form-data">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width: 4%; text-align: center;">ID</th>
							<th>Tên tin</th>
							<th style="width: 20%">Danh Mục</th>
							<th style="width: 16%; text-align: center;">Hình ảnh</th>
							<th style="width: 11%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					
					while ($TinTuc = mysqli_fetch_assoc($resultTin)){
						$id_news = $TinTuc['maTinTuc'];
						$name = $TinTuc['tenTinTuc'];
						$hinhanh = $TinTuc['hinhAnh'];
						$idcat = $TinTuc['maTheLoai'];
					$query = "SELECT tenTheLoai FROM theloai WHERE maTheLoai = $idcat";
					$result = $mysqli->query($query);
					$rows = mysqli_fetch_assoc($result);
						$danhmuc = $rows['tenTheLoai'];
					?>
						<tr>
							<td class="align-center"><?=$id_news?></td>
							<td><a href="suaTinTuc.php?id=<?=$id_news?>"><?=$name?></a></td>
							<td><?=$danhmuc?></td>
							<td align="center"><img src="../images/<?=$hinhanh?>" class="hoa" />
							</td>
							<td align="center"><a href="suaTinTuc.php?id=<?=$id_news?>">Sửa <img src="images/pencil.gif"
									alt="edit" /> </a> <a href="xoaTinTuc.php?id=<?=$id_news?>">Xóa <img src="images/bin.gif"
									width="16" height="16" alt="delete" /> </a>
							</td>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</form>
		</div>
		<!-- End .module-table-body -->
	</div>
	<!-- End .module -->


	<div class="pagination">
		<div class="numbers">
		<span>Page:</span> 
		<?php 
		for ($i = 1; $i <= $sotrang; $i++) {
			$begin = $count*($i-1);
			if ($tranghientai==$i){
				$class = 'style="color:red"';
			}else {
				$class=NULL;
			}
		?>
			<a href="list.php?o=<?=$i?>&begin=<?=$begin?>" <?php echo $class?>><?=$i?></a> |
		<?php }?>
		</div>
		<div style="clear: both;"></div>
	</div>

</div>

