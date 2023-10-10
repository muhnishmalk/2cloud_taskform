<?php
$servername = "localhost";
$username = "root";
$password = "root@1234";
$dbname = "form";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the post records
$name= $_POST['name'];     // Update field name to 'txtName'
$address = $_POST['address']; // Update field name to 'txtMessage'
// Database insert SQL code
$sql = "INSERT INTO user_table (name, address) VALUES ('$name', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

