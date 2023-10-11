<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAP06 MOHAMMED JEBREEN</title>
</head>
<body>

<?php

$host_ip = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'db_name';


$conn = mysqli_connect($host_ip, $username, $password, $database);


if ($conn) {
     echo "Connected successfully";
} else {
    die("Connection failed:" . mysqli_connect_error());
}


$sql ="INSERT INTO table_name (col_1, col_2, col_3, col_4) VALUES (202091314, 'Mohed', 'Mjebreeiuiun', 'mj@twiinds.gg')";


if ($conn->query($sql) === True) {
echo "<br>";
echo 'Data inserted successfully';
}
else{

    echo "<br>";
    echo 'Data inserted incorrectly';
    
}


$conn->close();

?>

</body>
</html>
