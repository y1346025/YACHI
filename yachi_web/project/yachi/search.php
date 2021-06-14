<form action="search.php" method="post">
搜尋：<input type="text" name="value" placeholder="請輸入關鍵字">
<input type="submit" value="送出">
</form>

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


echo "<b> Select Data from yachi table :</b><hr/>";
//echo "搜尋結果:$value<br/>";

$sql =<<<EOF
  SELECT * from yachi WHERE 店家 = '$value' OR 品項 = '$value' OR 吃喝玩樂 = '$value' OR K1 = '$value' OR K2 = '$value' OR K3 = '$value' OR K4 = '$value' OR K5 = '$value' OR K6 = '$value' OR K7 = '$value' OR K8 = '$value' OR K9 = '$value' OR K10 = '$value' OR K11 = '$value' OR K12 = '$value' OR K13 = '$value' OR K14 = '$value' OR K15 = '$value' OR K16 = '$value' OR K17 = '$value' OR K18 = '$value' OR K19 = '$value' OR K20 = '$value' OR K21 = '$value' OR K22 = '$value' OR K23 = '$value' OR K24 = '$value' OR K25 = '$value' OR K26 = '$value' OR K27 = '$value' OR K28 = '$value' OR K29 = '$value' OR K30 = '$value' ;
EOF;
$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ 
  
  echo "店家 : ". $row['店家'] ."<br/>\n";
  echo "品項 : ". $row['品項'] . "<br/>\n";
  echo "➤➤". $row['吃喝玩樂'] ."<br/>\n";
  echo '----------------------------------<br/>';
  
}

$db->close();
?>
