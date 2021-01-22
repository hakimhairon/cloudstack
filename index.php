<?php 

$servername = "hakimdb.cedtk3g7pkh0.us-east-1.rds.amazonaws.com"; 
$username = "admin"; 
$password = "admin123"; 
$dbname='hakimdb'; 

// Create connection 
$conn = mysqli_connect($servername, $username, $password); 

// Check connection 
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
echo "success"
?>

