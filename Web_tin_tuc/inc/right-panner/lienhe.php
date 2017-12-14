<?php
if(isset($_POST['submit'])){
	$ten = $_POST['ten'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$mota = $_POST['mota'];
	$now = date_default_timezone_set('UTC');
	$now = getdate();
	$Date = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
	
	$queryThemLH = "INSERT INTO lienhe (hoTen,Email,Phone,noiDung,thoiGian)
					VALUES ('{$ten}','{$email}','{$phone}','{$mota}','{$Date}')";
	$resultThemLH = $mysqli->query($queryThemLH);
	if ($resultThemLH){
		header("LOCATION: lienhe.php?mgs=Gửi Thành Công"); exit();
	}else {
		echo "Lỗi"; 
	}
}
?>

<div class="news-block">
	<h2 class="title-cat">Liên hệ</h2>
	<div class="content-cat1">
		<div class="content-detail">
			<div class="FromBox">
				<?php 
					if (isset($_GET['mgs'])){
						$mgs = $_GET['mgs'];
						echo "<p class='success'>$mgs</p>";
					}
				?>
				<form name="fcontact" method="post" action="" id="fcontact"
					enctype="multipart/form-data" >

					<div class="FieldRow">
						<label>Họ và tên:<span class="RSM_form_star_color">(*)</span>
						</label> <input type="text" value="" class="" maxlength="50"
							name="ten" id="HO_VA_TEN" required='required' />
					</div>

					<div class="FieldRow">
						<label>Email:<span class="RSM_form_star_color">(*)</span>
						</label> <input type="text" value="" class="" maxlength="50"
							name="email" id="EMAIL" required='required' />
					</div>

					<div class="FieldRow">
						<label>Điện thoại:</label> <input type="text" value="" class=""
							maxlength="50" name="phone" id="PHONE" required='required' />
					</div>

					<div class="FieldRow">
						<label>Nội dung:<span class="RSM_form_star_color">(*)</span>
						</label>
						<textarea class="" style="width: 100%; height: 140px;"
							name="mota" id="CONTENT" required='required' ></textarea>
					</div>


					<div class="FieldRow" style="margin-top: 24px;">
						<input class="button_submit" type="submit" id="submit"
							name="submit" value="Gửi liên hệ"> <input class="button_submit"
							type="reset" id="submit" name="submit" value="Nhập lại">
					</div>

				</form>
			</div>


		</div>
	</div>
</div>
