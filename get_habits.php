<?php
require 'connect.php';


$sql = "SELECT * FROM habits ORDER BY created_at DESC";
$result = $conn->query($sql);

$habits = [];
while ($row = $result->fetch_assoc()) {
    $habits[] = $row;
}

echo json_encode($habits);
$conn->close();
?>
