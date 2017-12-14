
<div class="news-block">

	<h2 class="title-cat">
	<?php 
		$query = "SELECT * FROM theloai WHERE maTheLoai='1'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_assoc($result);
	?>
		<a href="danhmuc.php?id=<?=$row['maTheLoai']?>" title="<?=$row['tenTheLoai']?>"><?=$row['tenTheLoai']?></a>
	</h2>
	<div class="content-cat">
		<div class="item-left fl">
		<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '1' ORDER BY maTinTuc DESC LIMIT 0,1 "; //lay 1 dong du lieu moi nhap vao csdl de dua ra web
			$result = $mysqli->query($query);
			$row = mysqli_fetch_assoc($result);
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tenTinTuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
		?>
			<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""><img
			src="images/<?=$hinhAnh?>"
			alt="<?=$name?>" /> </a> <a
			href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
				class="title"><?=$name?>
			</a>
			<p>
			<?=$mota?>
			</p>
		</div>
		<div class="item-right fr">
			<ul>
			<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '1' ORDER BY maTheLoai DESC LIMIT 1,3 ";
			$result = $mysqli->query($query);
			while ($row = mysqli_fetch_assoc($result)){
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
				//$date = $row['DateCreate'];
				$date = date_default_timezone_set('UTC'); // ham fomat lai thoi gian theo UTC
				$date = strtotime($row['thoiGian']);
				$date = date('d-m-Y', $date);
				$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$idcat}";
				$resultDM = $mysqli->query($queryDM);
				$rowDM = mysqli_fetch_assoc($resultDM);
				?>
				<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
					class="title"><?=$name?>
				</a>
					<p class="cat-date">
						<a href="danhmuc.php?id=<?=$idcat?>" title="<?=$rowDM['tentintuc']?>"><?=$rowDM['tenTheLoai']?>
						</a> <span>Cập nhật: <?=$date?></span>
					</p>
					<p class="preview">
					<?=$mota?>
					</p></li>
					<?php }?>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div class="news-block">
	<h2 class="title-cat">
	<?php 
		$query = "SELECT * FROM theloai WHERE maTheLoai='2'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_assoc($result);
	?>
		<a href="danhmuc.php?id=<?=$row['maTheLoai']?>" title="<?=$row['tenTheLoai']?>"><?=$row['tenTheLoai']?></a>
	</h2>
	<div class="content-cat">
		<div class="item-left fl">
		<?php
		$query = "SELECT * FROM tintuc WHERE maTheLoai = '2' ORDER BY maTinTuc DESC LIMIT 0,1 ";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_assoc($result);
		$idcat = $row['maTheLoai'];
		$idnews = $row['maTinTuc'];
		$name = $row['tentintuc'];
		$mota = $row['moTaND'];
		$hinhAnh = $row['hinhAnh'];
		?>
			<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>"
				title="<?=$name?>"><img src="images/<?=$hinhAnh?>"
				alt="<?=$name?>" /> </a> <a
				href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
				class="title"><?=$name?> </a>
			<p>
			<?=$mota?>
			</p>
		</div>
		<div class="item-right fr">
			<ul>
			<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '2' ORDER BY maTinTuc DESC LIMIT 1,3 ";
			$result = $mysqli->query($query);
			while ($row = mysqli_fetch_assoc($result)){
				$idnews = $row['maTinTuc'];
				$idcat = $row['maTheLoai'];
				$name = $row['tentintuc'];
				$mota = $row['moTaND'];
				$date = $row['thoiGian'];
				$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$idcat}";
				$resultDM = $mysqli->query($queryDM);
				$rowDM = mysqli_fetch_assoc($resultDM);
				?>
				<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
					class="title"><?=$name?> </a>
					<p class="cat-date">
						<a href="danhmuc.php?id=<?=$idcat?>" title="<?=$rowDM['tentintuc']?>"><?=$rowDM['tenTheLoai']?>
						</a> <span>Cập nhật: <?=$date?></span>
					</p>
					<p class="preview">
					<?=$mota?>
					</p>
				</li>
				<?php }?>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div class="news-block">

	<h2 class="title-cat">
	<?php 
		$query = "SELECT * FROM theloai WHERE maTheLoai='3'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_assoc($result);
	?>
		<a href="danhmuc.php?id=<?=$row['maTheLoai']?>" title="<?=$row['tenTheLoai']?>"><?=$row['tenTheLoai']?></a>
	</h2>
	<div class="content-cat">
		<div class="item-left fl">
		<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '3' ORDER BY maTinTuc DESC LIMIT 0,1 "; //lay 1 dong du lieu moi nhap vao csdl de dua ra web
			$result = $mysqli->query($query);
			$row = mysqli_fetch_assoc($result);
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
		?>
			<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""><img
			src="images/<?=$hinhAnh?>"
			alt="<?=$name?>" /> </a> <a
			href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
				class="title"><?=$name?>
			</a>
			<p>
			<?=$mota?>
			</p>
		</div>
		<div class="item-right fr">
			<ul>
			<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '3' ORDER BY maTheLoai DESC LIMIT 1,3 ";
			$result = $mysqli->query($query);
			while ($row = mysqli_fetch_assoc($result)){
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
				//$date = $row['DateCreate'];
				$date = date_default_timezone_set('UTC'); // ham fomat lai thoi gian theo UTC
				$date = strtotime($row['thoiGian']);
				$date = date('d-m-Y', $date);
				$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$idcat}";
				$resultDM = $mysqli->query($queryDM);
				$rowDM = mysqli_fetch_assoc($resultDM);
				?>
				<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
					class="title"><?=$name?>
				</a>
					<p class="cat-date">
						<a href="danhmuc.php?id=<?=$idcat?>" title="<?=$rowDM['tentintuc']?>"><?=$rowDM['tenTheLoai']?>
						</a> <span>Cập nhật: <?=$date?></span>
					</p>
					<p class="preview">
					<?=$mota?>
					</p></li>
					<?php }?>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div class="news-block">

	<h2 class="title-cat">
	<?php 
		$query = "SELECT * FROM theloai WHERE maTheLoai='4'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_assoc($result);
	?>
		<a href="danhmuc.php?id=<?=$row['maTheLoai']?>" title="<?=$row['tenTheLoai']?>"><?=$row['tenTheLoai']?></a>
	</h2>
	<div class="content-cat">
		<div class="item-left fl">
		<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '4' ORDER BY maTinTuc DESC LIMIT 0,1 "; //lay 1 dong du lieu moi nhap vao csdl de dua ra web
			$result = $mysqli->query($query);
			$row = mysqli_fetch_assoc($result);
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
		?>
			<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""><img
			src="images/<?=$hinhAnh?>"
			alt="<?=$name?>" /> </a> <a
			href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
				class="title"><?=$name?>
			</a>
			<p>
			<?=$mota?>
			</p>
		</div>
		<div class="item-right fr">
			<ul>
			<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '4' ORDER BY maTheLoai DESC LIMIT 1,3 ";
			$result = $mysqli->query($query);
			while ($row = mysqli_fetch_assoc($result)){
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
				//$date = $row['DateCreate'];
				$date = date_default_timezone_set('UTC'); // ham fomat lai thoi gian theo UTC
				$date = strtotime($row['thoiGian']);
				$date = date('d-m-Y', $date);
				$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$idcat}";
				$resultDM = $mysqli->query($queryDM);
				$rowDM = mysqli_fetch_assoc($resultDM);
				?>
				<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
					class="title"><?=$name?>
				</a>
					<p class="cat-date">
						<a href="danhmuc.php?id=<?=$idcat?>" title="<?=$rowDM['tentintuc']?>"><?=$rowDM['tenTheLoai']?>
						</a> <span>Cập nhật: <?=$date?></span>
					</p>
					<p class="preview">
					<?=$mota?>
					</p></li>
					<?php }?>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div class="news-block">

	<h2 class="title-cat">
	<?php 
		$query = "SELECT * FROM theloai WHERE maTheLoai='5'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_assoc($result);
	?>
		<a href="danhmuc.php?id=<?=$row['maTheLoai']?>" title="<?=$row['tenTheLoai']?>"><?=$row['tenTheLoai']?></a>
	</h2>
	<div class="content-cat">
		<div class="item-left fl">
		<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '5' ORDER BY maTinTuc DESC LIMIT 0,1 "; //lay 1 dong du lieu moi nhap vao csdl de dua ra web
			$result = $mysqli->query($query);
			$row = mysqli_fetch_assoc($result);
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
		?>
			<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""><img
			src="images/<?=$hinhAnh?>"
			alt="<?=$name?>" /> </a> <a
			href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
				class="title"><?=$name?>
			</a>
			<p>
			<?=$mota?>
			</p>
		</div>
		<div class="item-right fr">
			<ul>
			<?php
			$query = "SELECT * FROM tintuc WHERE maTheLoai = '5' ORDER BY maTheLoai DESC LIMIT 1,3 ";
			$result = $mysqli->query($query);
			while ($row = mysqli_fetch_assoc($result)){
			$idcat = $row['maTheLoai'];
			$idnews = $row['maTinTuc'];
			$name = $row['tentintuc'];
			$mota = $row['moTaND'];
			$hinhAnh = $row['hinhAnh'];
				//$date = $row['DateCreate'];
				$date = date_default_timezone_set('UTC'); // ham fomat lai thoi gian theo UTC
				$date = strtotime($row['thoiGian']);
				$date = date('d-m-Y', $date);
				$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$idcat}";
				$resultDM = $mysqli->query($queryDM);
				$rowDM = mysqli_fetch_assoc($resultDM);
				?>
				<li><a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title="<?=$name?>"
					class="title"><?=$name?>
				</a>
					<p class="cat-date">
						<a href="danhmuc.php?id=<?=$idcat?>" title="<?=$rowDM['tentintuc']?>"><?=$rowDM['tenTheLoai']?>
						</a> <span>Cập nhật: <?=$date?></span>
					</p>
					<p class="preview">
					<?=$mota?>
					</p></li>
					<?php }?>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
</div>