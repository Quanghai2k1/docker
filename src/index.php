<?php
echo "hello quanghai";

$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = '123456';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, "mysql");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
