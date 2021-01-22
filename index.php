<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Hi Hakim</h1>

<?php
$servername = "hakimdb.cedtk3g7pkh0.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
  
</body>
</html>
