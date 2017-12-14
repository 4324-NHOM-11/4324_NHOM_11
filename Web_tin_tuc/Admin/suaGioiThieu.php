<?php
include_once 'header.php';
include_once 'dbconnect.php';

$id = $_GET['id'];

$queryGT = "SELECT * FROM gioithieu WHERE maGioiThieu={$id}";
$resultGT = $mysqli->query($queryGT);
$arGT = mysqli_fetch_assoc($resultGT);
	$name = $arGT['tenGioiThieu'];
	$Description = $arGT['mota']; 
if (isset($_POST['submit'])){
	$ten     = $mysqli->real_escape_string($_POST['ten']);
	$chitiet = $mysqli->real_escape_string($_POST['chitiet']);
	
	$querySuaGT = "UPDATE gioithieu SET tenGioiThieu='{$ten}',mota='{$chitiet}' WHERE maGioiThieu={$id}";
	$resultSuaGT = $mysqli->query($querySuaGT);
	if ($resultSuaGT){
		header("LOCATION: gioithieu.php?mgs=Sửa Thành Công");
		exit();
	}else {
		echo "<p class='error'>Lỗi</p>";
	}
}
?>
<div class="grid_12">

	<div class="module">
		<h2>
			<span>Thêm tin tức</span>
		</h2>

		<div class="module-body">
			<form action="" method="post" enctype="multipart/form-data">
				<p>
					<label>Tên Giới Thiệu</label> <input type="text" class="input-medium"
						name="ten" value="<?=$name?>" required />
				</p>
				<p>
					<label>Lời Giới Thiệu</label>
					<textarea rows="7" cols="90" class="input-long ckeditor"
						name="chitiet" required><?=$Description?></textarea>
				</p>

				<fieldset>
					<input class="submit-green" type="submit" value="Sửa Giới Thiệu"
						name="submit" /> <input class="submit-gray" type="reset"
						value="Nhập lại" name="reset" />
				</fieldset>
			</form>
		</div>
		<!-- End .module-body -->

	</div>
	<!-- End .module -->
	<div style="clear: both;"></div>
</div>
