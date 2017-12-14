<?php 
$queryGT = "SELECT * FROM gioithieu WHERE hoatdong='1'";
$resultGT = $mysqli->query($queryGT);
$arGT = mysqli_fetch_assoc($resultGT);

?>
<div class="news-block">
	<h2 class="title-cat"><?=$arGT['ten']?></h2>  
	<div class="content-cat1">
		<div class="content-detail gioithieu">
		<?=$arGT['chitiet']?>
		</div>
	</div>
</div>
