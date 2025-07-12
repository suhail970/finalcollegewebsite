<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password,"collegea");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<center><h1>Registered successfully</h1><center>";

$f = $_POST["fname"];
$l = $_POST["lname"];
$reg = $_POST["reg"];
$gen = $_POST["gender"];
$blood = $_POST["bloodv"];
$dep = $_POST["dep"];
$ph = $_POST["ph"];
$gmaila = $_POST["gm"];
$parnam = $_POST["parentname"];
$parnum = $_POST["parentnum"];
$cou = $_POST["country"];
$cit = $_POST["city"];
$add = $_POST["address"];
$cbus = $_POST["cbus"];




$sql = "insert into student values('$reg','$f','$l','$gen', '$blood', '$dep', '$ph', '$gmaila', '$parnam', '$parnum', '$cou', '$cit', '$add', '$cbus' )";

$result = $conn->query($sql);

?>