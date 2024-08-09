<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP, usually empty
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for reaching us we will contact you shortly!!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>