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
			<a href="yachi2.php" title="進入網站">
			<img src="photo/YACHI.jpg" width='37%'></div></div>
			
			<div class="container-1">
				<span class="icon"><i class="fa fa-search"></i></span>
				
				<form action="search.php" method="post">
				<input type="text" name="value" placeholder="Search">
				<input type="submit" value="搜尋">
				</form>
			</div>
			<div class = "Map_1"><div class="Map">&emsp;&emsp;&emsp;<a href="map.php" title="地圖">
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
		$value = $_POST["value"];
		$db = new SQLiteDB();


		echo "<br><hr/>";
		//echo "搜尋結果:$value<br/>";

		$sql =<<<EOF
		SELECT * from yachi WHERE 店家 = '$value' OR 品項 = '$value' OR 吃喝玩樂 = '$value' OR K1 = '$value' OR K2 = '$value' OR K3 = '$value' OR K4 = '$value' OR K5 = '$value' OR K6 = '$value' OR K7 = '$value' OR K8 = '$value' OR K9 = '$value' OR K10 = '$value' OR K11 = '$value' OR K12 = '$value' OR K13 = '$value' OR K14 = '$value' OR K15 = '$value' OR K16 = '$value' OR K17 = '$value' OR K18 = '$value' OR K19 = '$value' OR K20 = '$value' OR K21 = '$value' OR K22 = '$value' OR K23 = '$value' OR K24 = '$value' OR K25 = '$value' OR K26 = '$value' OR K27 = '$value' OR K28 = '$value' OR K29 = '$value' OR K30 = '$value' ;
EOF;
		$ret = $db->query($sql);
		while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ 
  
		echo "店家 : ". $row['店家'] ."<br/>\n";
		echo "品項 : ". $row['品項'] . "<br/>\n";
		echo "➤➤". $row['吃喝玩樂'] ."<br/>\n";
		echo '﷽﷽﷽﷽﷽<br/>';
  
		}

		$db->close();
		?>
		
		</div>
		<div class="Footer">Creator: 408850435盧佳馨 408850260楊思妤 408850112劉姿妤</div>
	</body> 
</html>
