<form>
搜尋：<input type="text" name="搜尋">
</form><?php
class SQLiteDB extends SQLite3
{
  function __construct()
  {
     $this->open('cat.db');
  }
}
$db = new SQLiteDB();

// 查詢表中的數據

echo "<b> Select Data from cat table :</b><hr/>";

$sql =<<<EOF
  SELECT * from cat WHERE Name = '步步'
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