<?php
include_once 'header.php';
include_once 'dbconnect.php';
?>
<div class="bottom-spacing">
	<!-- Button -->
	<div class="float-left">
		
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
			<span>Danh sách liên hệ</span>
		</h2>

		<div class="module-table-body">
		
			<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width: 4%; text-align: center;">ID</th>
							<th>Tên Liên Hệ</th>
							<th style="width: 20%">Email</th>
							<th style="width: 16%; text-align: center;">Điện thoại</th>
							<th style="width: 16%; text-align: center;">Nội dung</th>
							<th style="width: 11%; text-align: center;">Chức Năng</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$queryLH = "SELECT * FROM lienhe ORDER BY maLienHe DESC";
						$resultLH = $mysqli->query($queryLH);
						while ($arLH = mysqli_fetch_assoc($resultLH)){
							$idcontact = $arLH['maLienHe'];
							$name = $arLH['hoTen'];
							$mail = $arLH['Email'];
							$phone = $arLH['Phone'];
							$description = $arLH['noiDung'];
					?>
						<tr>
							<td class="align-center"><?=$idcontact?></td>
							<td><?=$name?> </td>
							<td><?=$mail?></td>
							<td align="center"><?=$phone?></td>
							<td align="center"><?=$description?></td>
							<td align="center"><a href="suaLienHe.php?id=<?=$idcontact?>">Sửa <img
									src="images/pencil.gif" alt="edit" /> </a> <a
								href="xoaLienHe.php?id=<?=$idcontact?>">Xóa <img
									src="images/bin.gif" width="16" height="16" alt="delete" /> </a>
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
		