
<!DOCTYPE html>
<html>
	<head>
		<title> 
			YACHI MAP
		</title>
		<link rel="stylesheet" href="stylesheet/main.css">		
		<script src="javascript/main.js"></script>
	</head>	
	
	<body>
		<div class="Header">
			<div class = "YACHI_YA"><div class="YACHI">&emsp;&emsp;&emsp;
			<a href="yachi2.php" title="進入網站"><img src="photo/YACHI.jpg" width='37%'></a></div></div>
			
			<div class="container-1">
				<span class="icon"><i class="fa fa-search"></i></span>
				
				<form action="search.php" method="post">
				<input type="text" name="value" placeholder="Search">
				<input type="submit" value="搜尋">
				</form>
				
			</div>
			<div class = "Map_1"><div class="Map">&emsp;&emsp;&emsp;<a href="map.php" title="進入網站">
			<img src="photo/map.jpg" width='35%'></div></div>
		</div>
		<div class="Body">
		<div class="Sidebar">
		<nav>
		<li><a href="tw.php">台灣必吃</a></li>
		<li><a href="yilan.php">宜蘭必吃</a></li>
		<li><a href="play.php">好玩的攤</a></li>
		<li><a href="drink.php">好喝的飲料</a></li>
		<li><a href="dessert.php">"點"亮你的"心"</a></li></nav><br><br><br>
		</div>
		<?php
		echo "<br><hr/>";
		?>
		<img src="photo/YACHI_MAP.jpg" width='80%'>
		
		</div>
		<div class="Footer">Creator: 408850435盧佳馨 408850260楊思妤 408850112劉姿妤</div>
	</body> 
</html>
