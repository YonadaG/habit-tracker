<?php
require 'connect.php'; 


if (isset($_POST['name']) && isset($_POST['category'])) {
    $name = trim($_POST['name']);
    $category = trim($_POST['category']);

    if (!empty($name) && !empty($category)) {
       
        $stmt = $conn->prepare("INSERT INTO habits (name, category) VALUES (?, ?)");
        
        if ($stmt) {
            $stmt->bind_param("ss", $name, $category);
            $stmt->execute();
            $stmt->close();
            echo " Habit added";
        } else {
            echo " Failed to prepare SQL statement";
        }
    } else {
        echo " Habit empty";
    }
} else {
    echo " Missing  data";
}

if ($conn && $conn->ping()) {
    $conn->close();
}
?>
