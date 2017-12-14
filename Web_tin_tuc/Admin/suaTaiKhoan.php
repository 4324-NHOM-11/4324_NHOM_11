<?php
include_once 'header-taikhoan.php';
include_once 'dbconnect.php';

$id = $_GET['id'];

$queryTK = "SELECT * FROM users WHERE IdUser={$id}";
$resultTK = $mysqli->query($queryTK);
$arTK = mysqli_fetch_assoc($resultTK);

if (isset($_POST['submit'])){
	$Use = $mysqli->real_escape_string($_POST['Use']);
	$Pas = $mysqli->real_escape_string($_POST['Pas']);
	$Hoten = $mysqli->real_escape_string($_POST['Hoten']);
	$Diachi = $mysqli->real_escape_string($_POST['Diachi']);
	$Dt = $mysqli->real_escape_string($_POST['Dt']);
	$Email = $mysqli->real_escape_string($_POST['Email']);
	
	$querySuaTK = "UPDATE users SET username='{$Use}',password='{$Pas}'}',FullName='{$Hoten}'}',Address='{$Diachi }'}',Phone='{$Dt}',Email='{$Email}' WHERE IdUser={$id}";
	$resultSuaTK = $mysqli->query($querySuaTK);
	if ($resulSuaTK)
	{
		header("LOCATION: taikhoan.php?mgs=Sửa Thành Công");
	}
	else 
	{
		echo "Lỗi";
	}
}
?>
<div class="grid_12">

	<div class="module">
		<h2>
			<span>Thêm tài khoản</span>
		</h2>

		<div class="module-body">

			<form action="" method="post">
				<p>
					<label>Tên đăng nhập</label> <input type="text"
						class="input-medium" name="Use" value="<?=$arTK['username']?>" required/>
				</p>
				<p>
					<label>Mật Khẩu</label> <input type="text"
						class="input-medium" name="Pas" value="<?=$arTK['password']?>" required/>
				</p>
				<p>
					<label>Tên tài khoản</label> <input type="text"
						class="input-medium" name="Hoten" value="<?=$arTK['FullName']?>" required/>
				</p>               
				<p>
					<label>Địa chĩ</label> <input type="text"
						class="input-medium" name="Diachi" value="<?=$arTK['Address']?>"  required/>
				</p>
				<p>
					<label>Số điện thoại</label> <input type="text"
						class="input-medium" name="Dt" value="<?=$arTK['Phone']?>" required/>
				</p>
				<p>
					<label>Email</label> <input type="text"
						class="input-medium" name="Dt" value="<?=$arTK['Email']?>" required/>
				</p>
				<fieldset>
					<input class="submit-green" type="submit" value="Sửa tài khoản" name="submit" />
				</fieldset>
			</form>
		</div>
		<!-- End .module-body -->

	</div>
	<!-- End .module -->
	<div style="clear: both;"></div>
</div>