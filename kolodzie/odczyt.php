<?php
require_once "dane.php";
$conn = new mysqli ($host,$un,$pass,$db);
if($conn->connect_error) die ("general failrule");

$query = "DESC koty";
$res = $conn -> query($query);
if(!$res) die ("Spierdoliles sprawe!");
$rows= $res -> num_rows;
echo "<table><tr><th>ID</th><th>rodzina</th><th>imie</th><th>Default</th><th>Extra</th></tr>";
for($i = 0; $i<= $rows ;++$i) {
$r = $res -> fetch_array(MYSQLI_NUM);
echo "<tr>";
for($c = 0; $c < 6;++$c){
    echo "<td>" .htmlspecialchars($r[$c]) ."</td>";
}
    echo "</tr>";
}
echo"</table>";
?>