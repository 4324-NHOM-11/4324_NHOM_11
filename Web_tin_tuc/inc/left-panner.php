<div class="body-left fl">
	<div class="left-menu">
		<ul>
		<?php 
			$queryDM = "SELECT * FROM theloai";
			$resultDM = $mysqli->query($queryDM);
			while ($arDM = mysqli_fetch_assoc($resultDM)){
				$name = $arDM['tenTheLoai'];
				$id = $arDM['maTheLoai'];
		?>
			<li class="parent"><a href="danhmuc.php?id=<?=$id?>"><?=$name?></a>
			</li>
		<?php }?>
		</ul>
		<div class="clr"></div>
	</div>

	<div class="support" style="height:120px;">
		<p>Tư Vấn Bạn Đọc </p>
	
		
		<div class="skype">
			<ul>
				<li><a href="Skype:saccerwin101?chat" title="Hữu Thuấn">Lê Hữu Thuấn</a>
				</li>
				
			</ul>
			<div class="clr"></div>
		</div>

		<div class="orther">
			<p>
				Email: <span>lehuuthuan292@gmail.com</span>
			</p>
			<p>
				Số điện thoại: <span>0969854561</span>
			</p>
		</div>
	</div>

	<div class="advs">
	
	<a href="" title=""> <img src="images/quangcao1.jpg" alt="" /> </a>
	</div>
</div>
