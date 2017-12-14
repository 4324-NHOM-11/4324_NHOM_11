<?php
include_once 'inc/header/header-index.php';
include_once 'inc/left-panner.php';
include_once 'inc/define.php';

$id=$_GET['id'];

$count = COUNT_PER_PAGE;
$offset = 0;
if(isset($_GET['o'])){
	$o = $_GET['o'];
	$offset = (($o - 1)* $count) ;
}
$queryTong = "SELECT count(maTinTuc) AS tongdong FROM tintuc WHERE maTheLoai='{$id}'";
$resultTong = $mysqli->query($queryTong);
$rowTong = mysqli_fetch_assoc($resultTong);
$tongdong = $rowTong['tongdong'];
$sotrang = ceil($tongdong/$count);

$query1 = "SELECT * FROM tintuc WHERE maTheLoai={$id} ORDER BY maTinTuc DESC LIMIT $offset,$count";
$result1= $mysqli->query($query1);

if (!isset($_GET['begin'])){
	$begin = 0;
}else {
	$begin = $_GET['begin'];
}
$tranghientai = ($begin/$count) +1;
?>
<div class="body-right fr">
	<div class="news-block">
	<?php
	$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$id}";
	$resultDM = $mysqli->query($queryDM);
	$arDM = mysqli_fetch_assoc($resultDM);
		$idcat=$arDM['maTheLoai'];
	?>
		<h2 class="title-cat">
			<a href="danhmuc.php?id=<?=$idcat?>" title="<?=$arDM['tenTheLoai']?>"><?=$arDM['tenTheLoai']?> </a>
		</h2>
		<div class="content-cat1">
		<?php
		$i=1;
		while ($row1 = mysqli_fetch_assoc($result1)){
			$idnews = $row1['maTinTuc'];
			$idcat = $row1['maTheLoai'];
			$name = $row1['tenTinTuc'];
			$mota = $row1['moTaND'];
			$hinhanh = $row1['hinhAnh'];

			if ($i==1 && $offset <= 1){
				?>

			
				<div class="item-top">
					<div class="item-left fl">
						<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""> <img
							src="images/<?=$hinhanh?>" alt=""> </a>
					</div>
					<div class="item-right-cat fr">
						<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""
							class="title"><?=$name?> </a>
						<div style="margin: 10px;"></div>
						<p class="preview">
						<?=$mota?>
						</p>
					</div>
					<div class="clr"></div>
				</div>
				<?php
			}else {
				?>
				<div class="item">
					<div class="item-left fl">
						<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""> <img
							src="images/<?=$hinhanh?>" alt=""> </a>
					</div>

					<div class="item-right-cat fr">
						<a href="chitiet.php?id=<?=$idnews?>&cid=<?=$idcat?>" title=""
							class="title"><?=$name?> </a>
						<div style="margin: 10px;"></div>
						<p class="preview">
						<?=$mota?>
						</p>
					</div>
					<div class="clr"></div>
				</div>
				<?php } $i++; }?>

			</div>

			<div class="pager">
				<style>
.page-blue a {
	padding: 3px 7px;
	border: 1px solid green;
	background: green;
	color: #FFF;
	font-weight: bold;
	text-decoration: none;
}

.page-blue a:hover {
	padding: 3px 7px;
	border: 1px solid #144879;
	background: #144879;
	color: #FFF;
	font-weight: bold;
	text-decoration: none;
	margin-left: 2px;
}

.page-blue .nav-current-page {
	padding: 3px 7px;
	border: 1px solid #144879;
	background: #144879;
	color: #FFF;
	font-weight: bold;
	
}
</style>
				<div class="page-blue">
				
				
				<?php
				for ($i = 1; $i <= $sotrang; $i++) {
					$begin=$count * ($i-1);
					if ($tranghientai==$i){
						$class = 'style="color:red"';
					}else {
						$class=NULL;
					}
					?>
					
					<a href=danhmuc.php?o=<?=$i?>&id=<?=$idcat?>&begin=<?=$begin?> <?php echo $class?>><?=$i?></a>
					
					<?php }?>

				</div>
			</div>

		</div>

	</div>

	<?php
				include_once 'inc/footer.php';
				?>