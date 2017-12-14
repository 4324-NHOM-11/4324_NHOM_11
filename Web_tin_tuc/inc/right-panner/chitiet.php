<?php
$id = $_GET['id'];
$cid = $_GET['cid'];
$queryTin = "SELECT * FROM tintuc WHERE maTinTuc={$id}";
$resultTin = $mysqli->query($queryTin);
$rowTin = mysqli_fetch_assoc($resultTin);
$date = date_default_timezone_set('UTC');
$date = strtotime($rowTin['thoiGian']);
$date = date('d-m-Y', $date);
$idcat = $rowTin['maTinTuc'];
$name = $rowTin['tenTinTuc'];
$chitiet = $rowTin['noiDung'];
$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$idcat}";
$resultDM = $mysqli->query($queryDM);
$rowDM = mysqli_fetch_assoc($resultDM);
?>
<div class="news-block detail">
	<h1 class="title">
	<?=$name?>
	</h1>
	<p class="cat-date">
		<a title="Thanh hóa" href="danhmuc.php?id=<?=$idcat?>"><?=$rowDM['tenTheLoai']?>
		</a> <span>Cập nhật: <?=$date?></span>
	</p>
	<div class="content-detail">
	<?=$chitiet?>
	</div>

	<div class="orther-detail">

		<div class="orther-news">
			<p class="title orther-icon">Các tin khác</p>
			<div class="items">
				<ul>
				<?php
				$query = "SELECT * FROM tintuc WHERE maTinTuc={$cid} AND maTinTuc!={$id} ORDER BY maTinTuc DESC LIMIT 0,4";
				$result = $mysqli->query($query);
				while ($row = mysqli_fetch_assoc($result)){
					$idcat = $row['maTheLoai'];
					$idnews = $row['maTinTuc'];
					$name = $row['tenTinTuc'];
					$hinhanh = $row['hinhAnh'];
					?>
					<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>"
						title=""><img
							alt="" src="images/<?=$hinhanh?>">
					</a>
						<p>
							<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>"
								title=""><?=$name?> </a>
						</p>
					</li>
					<?php }?>
				</ul>
				<div class="clr"></div>
			</div>
			<div class="items-noimg">
				<ul>
				<?php 
				$query = "SELECT * FROM tintuc WHERE maTheLoai={$cid} ORDER BY maTinTuc DESC LIMIT 0,8";
				$result = $mysqli->query($query);
				while ($row = mysqli_fetch_assoc($result)){
					$idcat = $row['maTheLoai'];
					$idnews = $row['maTinTuc'];
					$name = $row['tenTinTuc'];
				?>
					<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>"
						title="<?=$name?>"><?=$name?></a></li>
				<?php }?>
				</ul>
				<div class="clr"></div>
			</div>
		</div>
	</div>

</div>
