<!DOCTYPE html>
<html>
<head>
    <title>Reset</title>
</head>
<body>

 <?php


$servername = "localhost";
$database = "feedback";
$username = "root";
$password = "";
$arr = array("semp1","semp2","semp3","semp4","semp5");
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$flag = 0;
foreach($arr as $i)
 {

    $sql = "UPDATE scores SET $i = 0 WHERE id=1";
    if (mysqli_query($conn, $sql))
    {
      $flag += 1;
    }

}
if($flag==5)
{
    include 'reset_message.html';
}
 else
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>


</body>
</html>
