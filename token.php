<?php
$servername = "mysql.hostinger.co.uk";
$username = "u822806530_test";
$password = "qwerty";
$dbname = "u822806530_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO token (token, count)
VALUES ('ef7e3c7a84649ef2bb34a5f38548db629660b2071461d5bcad8ac2f2d801b11d', '5')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>