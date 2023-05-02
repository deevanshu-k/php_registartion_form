<?php
$servername = "127.0.0.1";
$username = "root2";
$password = "SdbcServer@125502";
$dbname = "firstyearinfo";


// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn)
{
    // echo"Connection Done";
}
else
{
    echo"Connection Failed" .mysqli_connect_error();
}
?>
