<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>hi hakim</h1>


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
echo "Connected successfully";
?>

</body>
</html>

