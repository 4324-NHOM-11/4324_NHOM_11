<?php

include_once 'header-taikhoan.php';;


if (isset($_POST['submit'])){
	$mkcu   = $mysqli->real_escape_string($_POST['mkcu']);
	$mkmoi  = $mysqli->real_escape_string($_POST['mkmoi']);
	$mkmoi1  = $mysqli->real_escape_string($_POST['mkmoi1']);
	$iduser = $_SESSION['iduser'];

$query = "SELECT * FROM users WHERE IdUser = '{$iduser}'";
$result = $mysqli->query($query);
$arMK = mysqli_fetch_assoc($result);
	$pass = $arMK['password'];
	$username = $arMK['username'];
	if ($mkcu == $pass){
		if ($mkmoi == $mkmoi1){
			$queryDMK = "UPDATE users SET password='{$mkmoi}' WHERE username = '{$username}' LIMIT 1";
			$resultDKM = $mysqli->query($queryDMK);
			if ($resultDKM){
				header("LOCATION: taikhoan.php?mgs=ĐỔI MẬT kHẨU THÀNH CÔNG");
				exit();
			}else {
				echo "<p class='notification n-error'>Vui Lòng Nhập Lại Mật Khẩu, Cám Ơn!</p>";
			}
		}else {
			echo "<p class='notification n-error'>Vui Lòng Nhập Lại Mật Khẩu, Cám Ơn!</p>";
		}
	}else {
		echo "<p class='notification n-error'>Vui Lòng Nhập Lại Mật Khẩu, Cám Ơn!</p>";
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
					<label>Mật Khẩu Cũ</label> <input type="password"
						class="input-medium" name="mkcu"  />
				</p>
				<p>
					<label>Mật Khẩu Mới</label> <input type="password"
						class="input-medium" name="mkmoi"  />
				</p>
				<p>
					<label>Nhập Lại Mật Khẩu Mới</label> <input type="password"
						class="input-medium" name="mkmoi1"  />
				</p>
				<fieldset>
					<input class="submit-green" type="submit" value="Đổi Mật Khẩu" name="submit" />
					<input class="submit-gray" type="reset" value="Nhập lại" name="reset" />
				</fieldset>
			</form>
		</div>
		<!-- End .module-body -->

	</div>
	<!-- End .module -->
	<div style="clear: both;"></div>
</div>
