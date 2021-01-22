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
$sql = "SELECT name,no FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["name"]. " - No: ". $row["no"]"<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
?>

</body>
</html>

