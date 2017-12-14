<?php
include_once 'header.php';
include_once 'dbconnect.php';
//SELECT Tin
$id=$_GET['id'];
$queryTin = "SELECT * FROM tintuc WHERE maTinTuc={$id}";
$resultTin = $mysqli->query($queryTin);
$arTin = mysqli_fetch_assoc($resultTin);
$idnews = $arTin['maTinTuc'];
$tenhinh = $arTin['hinhAnh'];
$cid = $arTin['maTinTuc'];
$_SESSION['tenhinh'] = $arTin['hinhAnh'];
if (isset($_POST['xoahinh'])){
	$destination = $_SERVER['DOCUMENT_ROOT'].'/images/'.$tenhinh;
	unlink($destination);
	$arTin['hinhAnh'] = '';
}
if (isset($_POST['submit'])){
	$ten = $mysqli->real_escape_string($_POST['ten']);
	$danhmuc = $mysqli->real_escape_string($_POST['danhmuc']);
	$mota = $mysqli->real_escape_string($_POST['mota']);
	$chitiet = $mysqli->real_escape_string($_POST['chitiet']);
	$Date = $mysqli->real_escape_string($_POST['date']);

	$arHinh = $_FILES['hinhanh'];
	$tenhinh = $arHinh['name'];


	if ($Date == ''){
			if ($tenhinh == ''){
				$querySuaTin = "UPDATE tintuc SET tenTinTuc='$ten', moTaND='$mota', noiDung='$chitiet', maTheLoai='$danhmuc' WHERE maTinTuc={$id}";
			}else{
				$filename = $arHinh['tmp_name'];
				$destination = $_SERVER['DOCUMENT_ROOT']. '/images/'.$tenhinh;
				move_uploaded_file($filename, $destination);
		
				$querySuaTin = "UPDATE tintuc SET tenTinTuc='$ten', moTaND='$mota', noiDung='$chitiet', maTheLoai='$danhmuc',hinhAnh='$tenhinh' WHERE maTinTuc={$id}";
			}
			$resultSuaTin = $mysqli->query($querySuaTin);
			if($resultSuaTin){
				header("LOCATION: list.php?mgs=Sửa Thành Công");
				exit();
			}else{
				echo "Lỗi";
			}
	} else {
			if ($tenhinh == ''){
				$querySuaTin = "UPDATE tintuc SET tenTinTuc='$ten', moTaND='$mota', noiDung='$chitiet', maTheLoai='$danhmuc' WHERE maTinTuc={$id}";
			}else{
				$filename = $arHinh['tmp_name'];
				$destination = $_SERVER['DOCUMENT_ROOT']. '/images/'.$tenhinh;
				move_uploaded_file($filename, $destination);
		
				$querySuaTin = "UPDATE tintuc SET tenTinTuc='$ten', moTaND='$mota', noiDung='$chitiet', maTheLoai='$danhmuc',hinhAnh='$tenhinh' WHERE maTinTuc={$id}";
			}
			$resultSuaTin = $mysqli->query($querySuaTin);
			if($resultSuaTin){
				header("LOCATION: list.php?mgs=Sửa Thành Công");
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
			<span>Sửa tin tức</span>
		</h2>

		<div class="module-body">
			<form action="" method="post" enctype="multipart/form-data">
				<p>
					<label>Tên Tin</label> <input type="text" class="input-medium"
						name="ten" value="<?php echo $arTin['tenTinTuc']?>" required />
				</p>



				<p>
					<label>Danh mục tin</label> <select class="input-short"
						name="danhmuc" required>
						<?php
						$queryDM = "SELECT * FROM theloai";
						$resultDM = $mysqli->query($queryDM);
						while ($danhmuc = mysqli_fetch_assoc($resultDM)){
							$idcat = $danhmuc['maTheLoai'];
							$name = $danhmuc['tenTheLoai'];
							?>
						<option value="<?=$idcat?>" <?php if($cid == $idcat) echo 'selected="selected"'?>>
						<?=$name?>
						</option>
						<?php }?>
					</select>

				</p>
				
				<p>
					<label>Ngày Đăng Tin (YYYY-MM-DD)</label> <input type="text" class="input-medium"
						name="date" value="<?php echo $arTin['thoiGian']?>" required />
				</p>
				
				<p>
				<label>Hình Cũ:</label><img alt="" src="../images/<?=$arTin['hinhAnh']?>" width="100px" /><br>
				<input class="submit-green" type="submit" value="Xóa Hình"
						name="xoahinh" />
						
						
		
				</p>

				<p>
					<label>Hình ảnh</label><input type="file" name="hinhanh" value="" />
					
				</p>

				<p>
					<label>Mô tả</label>
					<textarea rows="7" cols="90" class="input-medium"
						name="mota" value="" required><?php echo $arTin['moTaND']?></textarea>
				</p>


				<p>
					<label>Chi tiết</label>
					<textarea rows="7" cols="90" class="input-long ckeditor"
						name="chitiet" value="" required><?php echo $arTin['noiDung']?></textarea>
				</p>

				<fieldset>
					<input class="submit-green" type="submit" value="Sửa tin"
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
