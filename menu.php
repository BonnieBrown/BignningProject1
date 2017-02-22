<?php
session_start();
require 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dazzle Menu</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

<!-- head -->

<div class="container-menu">
	
	<div class="picLogo"><img src="logo.png"></div>
	<div class="menu" style="margin-left: 700px; margin-top: 10px;" >
		<ul>
			<li><a href="menu.php" class="btnhead" >เมนู</a></li>
			<li><a href="cart.php" class="btnhead" >คำสั่งซื้อ</a></li>
			<li><a href="#" class="btnhead" >โปรโมชั่น</a></li>
			<li><a href="#" class="btnhead" >ตรวจสอบสถานะ</a></li>
			<li><a href="#" class="btnhead" >เข้าสู่ระบบ | สมัครสมาชิก</a></li>
		</ul>
	</div>

</div>

<!-- Board Ad -->

<div class="container-board">
	
	<div class="picBoard"><img src="img/bosrdAd.png"></div>

</div>

<!-- Menu -->

<div class="container-menuProduct">
	
	<div class="nameMenuProduct" style="margin-left: 380px; margin-top: 30px; margin-bottom: 50px;">
		<ul>
			<li><a href="#" class="btnmenu" style="margin-left: 20px; color: #000;">Pork</a></li>
			<li><a href="#" class="btnmenu" style="margin-left: 20px;color: #000;">Chicken</a></li>
			<li><a href="#" class="btnmenu" style="margin-left: 20px;color: #000;">Fish</a></li>
			<li><a href="#" class="btnmenu" style="margin-left: 20px;color: #000;">Sausage</a></li>
			<li><a href="#" class="btnmenu" style="margin-left: 20px;color: #000;">Recomended</a></li>
			<li><a href="#" class="btnmenu" style="margin-left: 20px;color: #000;">Combination</a></li>
		</ul>
	</div>

	<div class="product">

	<?php

		$meSql = "SELECT * FROM products ";
		$meQuery = mysqli_query($meConnect,$meSql);

        while ($meResult = mysqli_fetch_assoc($meQuery))
            {
                ?>
		<div class="MenuProduct">
			
			<div class="picMenu">
				<img src="img/<?php echo $meResult['product_img_name']; ?>" style="width: 100%;">
			</div>

			<div class="menuDetail">
				<div class="namePrice"><?php echo $meResult['product_name']; ?> 
				<?php echo number_format($meResult['product_price'],2); ?>
				</div>

			</div>

			<div class="buttonP">
				<a class="ButtonProduct" href="updatecart.php?itemId=<?php echo $meResult['id']; ?>" role="button" style="background-color: #ad8c5e; border-radius: 10px; text-align: center; padding-top: 15px; font-size: 16px;">
					เพิ่ม +
				</a>
			</div>
		</div>
 		
 		<?php
            
            }
        
        ?>

	</div>

</div>

<div class="footer"></div>


</body>
</html>
