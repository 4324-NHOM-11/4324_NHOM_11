<?php
include_once 'header.php';
include_once 'dbconnect.php';

if (isset($_POST['submit'])){
	$ten = $mysqli->real_escape_string($_POST['ten']);
$queryKT = "SELECT * FROM theloai WHERE tenTheLoai='{$ten}'";
$resultKT = $mysqli->query($queryKT);
if(mysqli_num_rows($resultKT)!=0)
{	
	echo "<p class='notification n-error'>Tên bạn vừa nhập đã bị trùng</p>";
}
else{
	
$queryThem = "INSERT INTO theloai (tenTheLoai) VALUE ('{$ten}')";
$resultThem = $mysqli->query($queryThem);
	
		header("LOCATION: danhmuc.php?mgs=Thêm Thành Công");
	
}
}
?>


<div class="grid_12">

	<div class="module">
		<h2>
			<span>Thêm tin tức</span>
		</h2>

		<div class="module-body">
			<form action="" method="post">
				<p>
					<label>Thêm Danh Mục</label> <input type="text"
						class="input-medium" name="ten" required />
				</p>
				<fieldset>
					<input class="submit-green" type="submit" value="Thêm Danh Mục" name="submit" />
					<input class="submit-gray" type="reset" value="Nhập lại" name="reset" />
				</fieldset>
			</form>
		</div>
		<!-- End .module-body -->

	</div>
	<!-- End .module -->
	<div style="clear: both;"></div>
</div>
