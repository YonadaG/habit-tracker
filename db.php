<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Step 1: Connect to MySQL (without selecting DB yet)
// $conn = new mysqli($servername, $username, $password);

// not working for unknown reason may its needs differnt file for it
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS habit_tracker";
if ($conn->query($sql) === TRUE) {
    echo " Database created or already exists.<br>";
} else {
    echo " Error creating database: " . $conn->error;
}


$conn->select_db("habit_tracker");


$tableSql = "CREATE TABLE IF NOT EXISTS habits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($tableSql) === TRUE) {
    echo "Table 'habits' created or already exists.<br>";
} else {
    echo " Error creating table: " . $conn->error;
}

$conn->close();
?>
