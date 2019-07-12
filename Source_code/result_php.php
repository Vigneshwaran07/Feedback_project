<!DOCTYPE html>
<html>
<head>
    <title>Reset</title>
</head>

<body style="background: LightBlue">
<b>Person with high rating : </b>
 <?php

$servername = "localhost";
$database = "feedback";
$username = "root";
$password = "";
$arr = array("semp1","semp2","semp3","semp4","semp5");
$person = array("semp1"=>"employee_one","semp2"=>"employee_two","semp3"=>"employee_three","semp4"=>"employee_four","semp5"=>"employee_five");
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$flag = 0;
$max = 0;
$min = 99999;
$minperson = "Nil";
$maxperson = "Nil";
foreach($arr as $i)
 {
$sql = "SELECT $i FROM scores where id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row[$i]<$min)
{
  $min = $row[$i];
  $minperson = $person[$i];
}
if($row[$i]>$max)
{
  $max = $row[$i];
  $maxperson = $person[$i];
}
}
echo $maxperson," (Scores $max )";
?>
<p></p>
<b>Person who needs training : </b>
<?php
echo  $minperson," (Scores $min )";
?>
<p></p>
<center><a href="feedback.html">Click here to Feedback page</a></center>
</body>
</html>
