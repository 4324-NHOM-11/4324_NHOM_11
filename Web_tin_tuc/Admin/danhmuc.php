<?php 
include_once 'header.php';
include_once 'dbconnect.php';
?>
<div class="bottom-spacing">
	<!-- Button -->
	<div class="float-left">
		<a href="addDanhMuc.php" class="button"> <span>Thêm Danh Mục Mới <img
				src="images/plus-small.gif" alt="Thêm tin mới"> </span> </a>
	</div>
	<div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2>
			<span>Danh Sách Danh Mục</span>
		</h2>

		<div class="module-table-body">
		
		<?php 
		if (isset($_GET['mgs'])){
			$mgs = $_GET['mgs'];
			echo "<p class='notification n-success'>$mgs</p>";
		}
		?>
			<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width: 4%; text-align: center;">ID</th>
							<th style="width: 20%">Danh Mục</th>
							<th style="width: 11%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
					
					<?php 
					$query = "SELECT * FROM theloai";
					$result = $mysqli->query($query);
					while ($danhmuc = mysqli_fetch_assoc($result)){
						$idcat = $danhmuc['maTheLoai'];
						$name = $danhmuc['tenTheLoai'];
					?>
					
						<tr>
							<td class="align-center"><?=$idcat?></td>
							<td><a href="listdanhmuc.php?id=<?=$idcat?>"><?=$name?></a></td>
							<td align="center"><a href="suaDanhMuc.php?id=<?=$idcat?>">Sửa <img src="images/pencil.gif"
									alt="edit" /> </a> <a href="xoaDanhMuc.php?id=<?=$idcat?>">Xóa <img src="images/bin.gif"
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

</div>
