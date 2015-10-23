<meta charset="utf-8">

<?php
$conn = mysql_connect("localhost", "root", "root") or exit("database link error");
echo "$conn<br>";
mysql_select_db("db") or die("select error");

$result = mysql_query("select * from table");
if(!$result){
    echo "SQL error";
    exit;
}
?>
