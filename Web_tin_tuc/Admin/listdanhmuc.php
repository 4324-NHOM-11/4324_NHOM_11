<?php
include_once 'header.php';

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
	
		<h2>
			<span>Danh sách tin tức: </span>
		</h2>

		<div class="module-table-body">
		
			<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width: 4%; text-align: center;">ID</th>
							<th>Tên tin</th>
							<th style="width: 16%; text-align: center;">Hình ảnh</th>
							<th style="width: 11%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					
					while ($TinTuc = mysqli_fetch_assoc($resultTin)){
						$id_news = $TinTuc['IdNews'];
						$name = $TinTuc['Name'];
						$hinhanh = $TinTuc['Picture'];
						$idcat = $TinTuc['idnt'];
					?>
						<tr>
							<td class="align-center"></td>
							<td><a href="suaTinTuc.php?id="></a></td>
							<td align="center"><img src="/Javionline-vs-1/public/images/" class="hoa" />
							</td>
							<td align="center"><a href="suaTinTuc.php?id=">Sửa <img src="images/pencil.gif"
									alt="edit" /> </a> <a href="xoaTinTuc.php?id=">Xóa <img src="images/bin.gif"
									width="16" height="16" alt="delete" /> </a>
							</td>
						</tr>
					
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
		?>
			<a href="listdanhmuc.php?o=<?=$i?>&id=<?=$id?>"><?=$i?></a> |
		<?php }?>
		</div>
		<div style="clear: both;"></div>
	</div>

</div>

