<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Hi Hakim</h1>
  
<?php
$con = mysqli_connect("hakimdb.cedtk3g7pkh0.us-east-1.rds.amazonaws.com", "admin", "admin123", "hakimdb", "3306");
if($con){
echo "Connection Success";
}
else
{
    echo "Error";
}

?>
  
</body>
</html>
