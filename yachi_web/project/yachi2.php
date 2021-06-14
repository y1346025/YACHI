<form action="search.php" method="post">
搜尋：<input type="text" name="value" placeholder="請輸入關鍵字">
<input type="submit" value="送出">
</form>
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
			<div class = "YACHI_YA"><div class="YACHI">&emsp;&emsp;&emsp;<img src="photo/YACHI.jpg" width='37%'></div></div>
			
			<div class="container-1">
				<span class="icon"><i class="fa fa-search"></i></span>
				<input type="search" id="search" placeholder="Search..." />
			</div>
			<div class = "Map_1"><div class="Map">&emsp;&emsp;&emsp;<img src="photo/map.jpg" width='35%'></div></div>
		</div>
		<div class="Body">
		<div class="Sidebar">
		<nav>
		<li><a href="#">台灣必吃</a></li>
		<li><a href="#">宜蘭必吃</a></li>
		<li><a href="#">好玩的攤</a></li>
		<li><a href="#">好喝的飲料</a></li>
		<li><a href="#">"點"亮你的"心"</a></li></nav><br><br><br>
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


		//echo "<b> Select Data from yachi table :</b><hr/>";
		//echo "搜尋結果:$value<br/>";

		$sql =<<<EOF
		SELECT * from yachi ;
EOF;
		$ret = $db->query($sql);
		while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ 
  
		echo "店家 : ". $row['店家'] ."<br>";
		echo "品項 : ". $row['品項'] . "<br>";
		echo "➤➤". $row['吃喝玩樂'] ."<br>";
		echo '----------------------------------<br/>';
  
		}

$db->close();
?>
		
		</div>
		<div class="Footer">Creator: 408850435盧佳馨 408850260楊思妤 408850112劉姿妤</div>
	</body> 
</html>
