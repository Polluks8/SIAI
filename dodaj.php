<?php
require_once "dane.php";
$conn = new mysqli ($host,$un,$pass,$db);
if($conn->connect_error) die ("general failrule");
$query = "INSERT INTO koty VALUES (NULL, 'zbik', 'puszek', 3)";
$res = $conn -> query($query);
if(!$res) die ("Spierdoliles sprawe!");
?>