<?php
include_once 'header.php';
include_once 'dbconnect.php';

if (isset($_POST['submit'])){
	$ten = $mysqli->real_escape_string($_POST['ten']);
	$danhmuc = $mysqli->real_escape_string($_POST['danhmuc']);
	$mota = $mysqli->real_escape_string($_POST['mota']);
	$chitiet = $mysqli->real_escape_string($_POST['chitiet']);
	$timeday = date_default_timezone_set('UTC');
	$timeday = getdate();
	$Date1 = $mysqli->real_escape_string($timeday);
	$now = date_default_timezone_set('UTC');
	$now = getdate();
	$Date = $now["year"] . "." . $now["mon"] . "." . $now["mday"]; 	
	$arHinh = $_FILES['hinhanh'];
	$tenhinh = $arHinh['name'];

	if ($Date1 == ''){
		if ($tenhinh == ''){
			$queryThemtintuc = "INSERT INTO tintuc (tentintuc, moTaND, noiDung, maTheLoai , thoiGian)
							 VALUES ('{$ten}','{$mota}','{$chitiet}',{$danhmuc}, '{$Date}')";
		}else{
			$filename = $arHinh['tmp_name'];
			$destintucation = $_SERVER['DOCUMENT_ROOT']. '/web_tintuc_tuc/images/'.$tenhinh;
			//echo (var_dump($destintucation)) ;
			//exit;
			move_uploaded_file($filename, $destintucation);
	
			$queryThemtintuc = "INSERT INTO tintuc (tentintuc, moTaND, noiDung, maTheLoai, hinhanh, thoiGian)
							 VALUES ('{$ten}','{$mota}','{$chitiet}',{$danhmuc},'{$tenhinh}','{$Date}')";
		}
		$resultThemtintuc = $mysqli->query($queryThemtintuc);
		if($resultThemtintuc){
			header("LOCATION: list.php?mgs=Thêm Thành Công");
			exit();
		}else{
			echo "Lỗi";
		}
	} else {
		if ($tenhinh == ''){
			$queryThemtintuc = "INSERT INTO tintuc (tentintuc, moTaND, noiDung, maTheLoai , thoiGian)
							 VALUES ('{$ten}','{$mota}','{$chitiet}',{$danhmuc}, '{$Date1}')";
		}else{
			$filename = $arHinh['tmp_name'];
			$destintucation = $_SERVER['DOCUMENT_ROOT']. '/web_tintuc_tuc/images/'.$tenhinh;
			move_uploaded_file($filename, $destintucation);
	
			$queryThemtintuc = "INSERT INTO tintuc (tentintuc, moTaND, noiDung, maTheLoai, hinhanh, thoiGian)
							 VALUES ('{$ten}','{$mota}','{$chitiet}',{$danhmuc},'{$tenhinh}','{$Date1}')";
		}
		$resultThemtintuc = $mysqli->query($queryThemtintuc);
		if($resultThemtintuc){
			header("LOCATION: list.php?mgs=Thêm Thành Công");
			exit();
		}else{
			echo "Lỗi";
		}
	}
}
?>
<!-- Form elements -->
<div class="grid_12">

	<div class="module">
		<h2>
			<span>Thêm tin tức</span>
		</h2>

		<div class="module-body">
			<form action="" method="post" enctype="multipart/form-data">
				<p>
					<label>Tên tin tức</label> <input type="text" class="input-medium"
						name="ten" required />
				</p>



				<p>
					<label>Danh mục tin tức</label> <select class="input-short"
						name="danhmuc" required>
						<?php
						$queryDM = "SELECT * FROM theloai";
						$resultDM = $mysqli->query($queryDM);
						while ($danhmuc = mysqli_fetch_assoc($resultDM)){
							$idcat = $danhmuc['maTheLoai'];
							$name = $danhmuc['tenTheLoai'];
							?>
						<option value="<?=$idcat?>">
						<?=$name?>
						</option>
						<?php }?>
					</select>

				</p>

				<p>
					<label>Hình ảnh</label><input type="file" name="hinhanh" id="hinhanh" value="" />
				</p>

				<p>
					<label>Mô tả</label>
					<textarea rows="7" cols="90" class="input-medium" name="mota"
						required></textarea>
				</p>


				<p>
					<label>Chi tiết</label>
					<textarea rows="7" cols="90" class="input-long ckeditor"
						name="chitiet" required></textarea>
				</p>

				<fieldset>
					<input class="submit-green" type="submit" value="Thêm tin tức"
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
