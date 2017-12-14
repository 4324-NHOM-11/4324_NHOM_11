<?php
include_once 'headerDangKy.php';
include_once 'dbconnect.php';

if(isset($_POST['submit']))
{
		$Kt =true;
	
		$u = $p = $ht = $dc = $dt = $em = "";
		
		if($_POST['Use'] == "")
		{
		  echo "Vui long nhap username<br />";
			$Kt=false;
		}
		 else
		{
			$u = $mysqli->real_escape_string($_POST['Use']);
		}

		if($_POST['Pas'] == "")
		{
		  echo "Vui long nhap username<br />";
		  $Kt=false;
		}
		 else
		{
			$p =$mysqli->real_escape_string($_POST['Pas']);
		}
		 
		if($_POST['Hoten'] == "")
		{
		   echo "Vui long nhap họ tên<br />";
		   $Kt=false;
		}
		else
		{
		   $ht = $mysqli->real_escape_string($_POST['Hoten']);
		}
		 
		if($_POST['Diachi'] == "")
		{
		   echo "Vui long nhap địa chỉ<br />";
		   $Kt=false;
		}
		else
		{
		   $dc =$mysqli->real_escape_string($_POST['Diachi']);
		}
		  
		if($_POST['Dt' ]== "" )
		{
		   echo "Vui long nhap số điện thoại<br />";
		   $Kt=false;
		}
		else
		{
		  $dt = $mysqli->real_escape_string($_POST['Dt']);
		}
		  
		if($_POST['Email'] == "" )
		{
		   echo "Vui long nhap Email<br />";
		   $Kt=false;
		}
		else
		{
			$em = $mysqli->real_escape_string($_POST['Email']);
		}
				
		if($Kt==true)
		{
			$sql = "SELECT * FROM users WHERE username = '{$u}'";
			$query = $mysqli->query($sql);
				
		if(mysqli_num_rows($query)!=0)
		{
			
			echo "Username nay da ton tai roi<br />";
			
		}
		else
		{

			$queryThemTK = "INSERT INTO users (username,password,FullName,Address,Phone,Email,rights)
										VALUES ('".$u."','".$p."','".$ht."','".$dc."','".$dt."','".$em."','0')";
			$resultThemTK = $mysqli->query($queryThemTK);
					
			if ($resultThemTK)
			{		
				$queryUser = "SELECT * FROM users WHERE username = '".$u."' && password = '".$p."'";
				$resultUser = $mysqli->query($queryUser);
				$arUser = mysqli_fetch_array($resultUser);
				$_SESSION['fullname'] = $arUser['FullName'];
				header("LOCATION: TaiKhoanND.php?mgs=Thêm Thành Công");
			}
			
			else 
			{
				echo "Lỗi";
			}
		}
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
						class="input-medium" name="Use" />
				</p>
				<p>
					<label>Mật Khẩu</label> <input type="text"
						class="input-medium" name="Pas" />
				</p>
				<p>
					<label>Tên tài khoản</label> <input type="text"
						class="input-medium" name="Hoten" />
				</p>               
				<p>
					<label>Địa chĩ</label> <input type="text"
						class="input-medium" name="Diachi" />
				</p>
				<p>
					<label>Số điện thoại</label> <input type="text"
						class="input-medium" name="Dt" />
				</p>
				<p>
					<label>Email</label> <input type="text"
						class="input-medium" name="Email" />
				</p>				
				<fieldset>
					<input class="submit-green" type="submit" value="Đăng ký" name="submit" />
				</fieldset>
				<fieldset>									
					<a href="../index.php">Thoát</a>				
				</fieldset>
				
			</form>
		</div>
		<!-- End .module-body -->

	</div>
	<!-- End .module -->
	<div style="clear: both;"></div>
</div>
