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

		class SQLiteDB extends SQLite3
		{ 
		function __construct()
		{	
	
			$this->open('yachi.db'); 
	
		}
		}
		//$value = $_POST["value"];
		$db = new SQLiteDB();


		echo "<br><hr/>";
		//echo "搜尋結果:$value<br/>";

		$sql =<<<EOF
		SELECT * from yachi WHERE 店家='巴洡雅拜 石板烤肉' OR 店家='東石' OR 店家='巴拉冠原住民' OR 店家='青蛙下蛋' OR 店家='小肥豬石板烤肉' OR 店家='芋見幸福' OR 店家='小肥豬石板烤肉' ;
EOF;
		$ret = $db->query($sql);
		while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ 
  
		echo "店家 : ". $row['店家'] ."<br>";
		echo "品項 : ". $row['品項'] . "<br>";
		echo "➤➤". $row['吃喝玩樂'] ."<br>";
		echo '﷽﷽﷽﷽﷽<br/>';
  
		}

$db->close();
?>
		
		</div>
		<div class="Footer">Creator: 408850435盧佳馨 408850260楊思妤 408850112劉姿妤</div>
	</body> 
</html>
