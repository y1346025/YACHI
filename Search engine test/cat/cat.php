<form action="cat.php" method="post">
搜尋：<input type="text" name="value" placeholder="請輸入關鍵字">
<input type="submit" value="送出">
</form>

<?php

class SQLiteDB extends SQLite3
{ 
  function __construct()
  {	
	
     $this->open('cat.db'); 
	
  }
}
$value = $_POST["value"];
$db = new SQLiteDB();


echo "<b> Select Data from cat table :</b><hr/>";
echo $value."<br/>";

$sql =<<<EOF
  SELECT * from cat ;
EOF;
$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ 

  echo "Name = ". $row['Name'] ."<br/>\n";
  echo "Age = ". $row['Age'] . "<br/>\n";
  echo "Color = ". $row['Color'] ."<br/>\n";
  echo "Appearence =  ".$row['Appearence'] ."<br/>\n\n";
  echo '----------------------------------<br/>';
}

$db->close();
?>
