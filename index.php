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


try{ 
    $dbh = new pdo(
        'mysql:'.$servername.';dbname='.$dbname.';',
        $username,
        $password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );

    die(json_encode(array('outcome' => true))); 
} catch(PDOException $ex) { 
    echo json_encode(array('outcome' => false, 'message' => $ex->getMessage()))."\n"; 
} 

// Create connection 
$conn = mysqli_connect($servername, $username, $password); 

// Check connection 
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
echo "Connected successfully\n";
?>
  
</body>
</html>
