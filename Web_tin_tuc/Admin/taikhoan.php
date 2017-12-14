<?php 
include_once 'header-taikhoan.php';;
?>
<div class="grid_12">
	<!-- Example table -->
	<div class="module">
	<?php 
		if (isset($_GET['mgs'])){
			$mgs = $_GET['mgs'];
			echo "<p class='notification n-success'>$mgs</p>";
		}
		?>
		<h2>
			<span>Danh Sách Tài Khoản</span>
		</h2>

		<div class="module-table-body">
		
			<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width: 4%; text-align: center;">ID</th>
							<th style="width: 10%">Tên Tài Khoản</th>
							<th style="width: 10%">Tên Đăng Nhập</th>
							<th style="width: 10%">Mật khẩu</th>
							<th style="width: 11%; text-align: center;">Địa Chỉ</th>
							<th style="width: 11%; text-align: center;">Điện thoại</th>
							<th style="width: 11%; text-align: center;">Email</th>
							<th style="width: 11%; text-align: center;">Quyền</th>
							<th style="width: 11%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$query = "SELECT * FROM users";
					$result = $mysqli->query($query);
					while ($user = mysqli_fetch_assoc($result)){
						$iduser = $user['IdUser'];
						$name = $user['FullName'];
						$diachi = $user['Address'];
						$username = $user['username'];
						$pass = $user['password'];
						$DT = $user['Phone'];
						$Email = $user['Email'];
						$Quyen = $user['rights'];
					?>
						<tr>
							<td class="align-center"><?=$iduser?></td>
							<td><?=$name?></td>
							<td><?=$username?></td>
							<td><?=$pass?></td>
						    <td><?=$diachi?></td>
							<td><?=$DT?></td>
							<td><?=$Email?></td>
							<td><?=$Quyen?></td>
							<td align="center"><a href="suaTaiKhoan.php?id=<?=$iduser?>">Sửa <img src="images/pencil.gif"
									alt="edit" /> </a> <a href="xoaTaiKhoan.php?id=<?=$iduser?>">Xóa <img src="images/bin.gif"
									width="16" height="16" alt="delete" /> </a>
							</td>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</form>
		</div>
		<!-- End .module-table-body -->
	</div>
	<!-- End .module -->
</div>
</div>
