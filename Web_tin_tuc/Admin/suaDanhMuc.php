<?php
include_once 'header.php';
include_once 'dbconnect.php';
//SELECT category
$id = $_GET['id'];
$queryDM = "SELECT * FROM theloai WHERE maTheLoai={$id}";
$resultDM = $mysqli->query($queryDM);
$arDM = mysqli_fetch_assoc($resultDM);
$name = $arDM['tenTheLoai'];

if (isset($_POST['submit'])){
	$ten = $_POST['ten'];
$querySua = "UPDATE theloai SET tenTheLoai='{$ten}' WHERE maTheLoai={$id}";
$resultSua = $mysqli->query($querySua);
	if ($resultSua){
		header("LOCATION: danhmuc.php?mgs=Sửa Thành Công");
		exit();
	}else{
		echo "Lỗi";
	}
}
?>
<div class="grid_12">

	<div class="module">
		<h2>
			<span>Sửa Danh Mục</span>
		</h2>

		<div class="module-body">
			<form action="" method="post">
				<p>
					<label>Tên Danh Mục</label> <input type="text"
						class="input-medium" name="ten" value="<?=$name?>" required />
				</p>
				<fieldset>
					<input class="submit-green" type="submit" value="Sửa Danh Mục" name="submit" />
					<input class="submit-gray" type="reset" value="Nhập lại" name="reset" />
				</fieldset>
			</form>
		</div>
		<!-- End .module-body -->

	</div>
	<!-- End .module -->
	<div style="clear: both;"></div>
</div>