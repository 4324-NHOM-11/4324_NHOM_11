<?php 
include_once 'header.php';
include_once 'dbconnect.php'
?>
<div class="bottom-spacing">
	<!-- Button -->
	<div class="float-left">
		<a href="addGioiThieu.php" class="button"> <span>Thêm lời giới thiệu mới<img
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
		
			<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width: 4%; text-align: center;">ID</th>
							<th>Tên tin</th>
							<th style="width: 11%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$queryGT = "SELECT * FROM gioithieu ORDER BY maGioiThieu DESC";
					$resultGT = $mysqli->query($queryGT);
					while($arGT = mysqli_fetch_assoc($resultGT)){
						$id = $arGT['maGioiThieu'];
						$name = $arGT['tenGioiThieu'];
					?>
						<tr>
							<td class="align-center"><?=$id?></td>
							<td><a href="suaGioiThieu.php?id=<?=$id?>"><?=$name?></a></td>
							<td align="center"><a href="suaGioiThieu.php?id=<?=$id?>">Sửa <img src="images/pencil.gif"
									alt="edit" /> </a> <a href="xoaGioiThieu.php?id=<?=$id?>">Xóa <img src="images/bin.gif"
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

