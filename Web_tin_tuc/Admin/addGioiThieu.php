<?php
include_once 'header.php';
include_once 'dbconnect.php';

if (isset($_POST['submit'])){
	$ten     = $mysqli->real_escape_string($_POST['ten']);
	$chitiet = $mysqli->real_escape_string($_POST['chitiet']);
	$hd      = $mysqli->real_escape_string($_POST['hoatdong']);
	
	$queryThemGT = "INSERT INTO gioithieu (tenGioiThieu, mota,hoatdong) VALUES ('{$ten}','{$chitiet}','{$hd}')";
	$resultThemGT = $mysqli->query($queryThemGT);
	if ($resultThemGT){
		header("LOCATION: gioithieu.php?mgs=Thêm Thành Công");
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
						name="ten" required />
				</p>
				<p>
					<label>Hoạt Động</label> <input type="text" class="input-medium"
						name="hd" required />
				</p>
				<p>
					<label>Lời Giới Thiệu</label>
					<textarea rows="7" cols="90" class="input-long ckeditor"
						name="chitiet" required></textarea>
				</p>

				<fieldset>
					<input class="submit-green" type="submit" value="Thêm Giới Thiệu"
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
						