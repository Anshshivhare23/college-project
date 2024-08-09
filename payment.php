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
    $cardno = $_POST["cardno"]; // Corrected input field name
    $expmonth = $_POST["expmonth"];
    $expyear = $_POST["expyear"];
    $cvv = $_POST["cvv"];

    $sql = "INSERT INTO Payment (name, cardno, expmonth, expyear, cvv) VALUES ('$name', '$cardno', '$expmonth', '$expyear', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank You for Selecting Our plan!!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
