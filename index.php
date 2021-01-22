<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>hi hakimhairon</h1>


<?php
$servername = "localhost";
$username = "admin";
$password = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,no FROM info WHERE name = 'hakimhairon'";
$result = $conn->query($sql);
  
echo $result

$conn->close();
?>
?>

</body>
</html>

