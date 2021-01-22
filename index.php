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
$dbname='hakimdb'; 

// Create connection 
$conn = mysqli_connect($servername, $username, $password); 

// Check connection 
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
myFunction()
?>
 
<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>
</body>
</html>
