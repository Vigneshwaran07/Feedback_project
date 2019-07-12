<html>
<body>

<?php

$servername = "localhost";
$database = "feedback";
$username = "root";
$password = "";
$arr = array("semp1","semp2","semp3","semp4","semp5");
$conn = mysqli_connect($servername, $username, $password, $database);
$name = $_POST["cname"];
$phone = $_POST["cphone"];

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
if(!($name && $phone && $_POST["semp1"] && $_POST["semp2"]&& $_POST["semp3"]&& $_POST["semp4"]&& $_POST["semp5"]))
{
    die("Enter all details");

}

$flag = 0;
foreach($arr as $i)
 {

    $temp =  $_POST[$i];
    $sql = "UPDATE scores SET $i = $i+$temp WHERE id=1";
    if (mysqli_query($conn, $sql))
    {
      $flag += 1;
    }

}
if($flag==5)
{
    include 'thankyou.html';
}
 else
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>


</body>
</html>
