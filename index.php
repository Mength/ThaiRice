<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "thairice";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
    echo "id: " . $row["adm_id"] . " Name: " . $row["adm_name"] . "<br>";
  }
} 






$conn->close();


?>