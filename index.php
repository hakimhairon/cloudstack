<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Hi Hakim</h1>
  
<?php
$dbhost = $_SERVER['hakimdb.cedtk3g7pkh0.us-east-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['hakimdb'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['admin'];
$password = $_SERVER['admin123'];

$pdo = new PDO($dsn, $username, $password);

// Check connection
if ($pdo->connect_error) {
  die("Connection failed: " . $pdo->connect_error);
}
echo "Connected successfully";
  
?>
  
</body>
</html>
