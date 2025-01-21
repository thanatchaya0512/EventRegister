<?php
$servername = "127.0.0.1:3308";  // Hostname และพอร์ต
$username = "root";             // Database username
$password = "";                 // Database password (ถ้าไม่มี ให้ใส่ "")
$dbname = "eventhu";            // Database name

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>
