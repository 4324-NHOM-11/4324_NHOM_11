<?php
include_once 'header.php';
include_once 'dbconnect.php';
//Lấy thông tin liên hệ
$id = $_GET['id'];
$queryLH = "SELECT * FROM lienhe WHERE maLienHe={$id}";
$resultLH = $mysqli->query($queryLH);
$arLH = mysqli_fetch_assoc($resultLH);

if(isset($_POST['submit'])){
	$ten     = $mysqli->real_escape_string($_POST['ten']);
	$email   = $mysqli->real_escape_string($_POST['email']);
	$phone   = $mysqli->real_escape_string($_POST['phone']);
	$mota    = $mysqli->real_escape_string($_POST['mota']);
	
	$querySuaLH = "UPDATE lienhe SET hoTen='$ten',Email='$email',Phone='$phone',noiDung='$mota' WHERE maLienHe={$id}";
	$resultSuaLH = $mysqli->query($querySuaLH);
	if ($resultSuaLH){
		header("LOCATION: lienhe.php?mgs=Sửa Thành Công");
	}else {
		echo "Lỗi";
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
					<label>Tên Liên Hệ:</label> <input type="text" class="input-medium"
						name="ten" value="<?=$arLH['hoTen']?>" required />
				</p>

				<p>
					<label>Email:</label> <input type="text" class="input-medium"
						name="email" value="<?=$arLH['Email']?>" required />
				</p>

				<p>
					<label>Phone:</label> <input type="text" class="input-medium"
						name="phone" value="<?=$arLH['Phone']?>" required />
				</p>
				
				<p>
					<label>Mô Tả</label>
					<textarea rows="7" cols="90" class="input-long ckeditor"
						name="mota" required><?=$arLH['noiDung']?></textarea>
				</p>

				<fieldset>
					<input class="submit-green" type="submit" value="Sửa Liên Hệ"
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
