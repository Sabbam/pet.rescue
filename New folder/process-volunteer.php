<?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "Ap33a1026@#2004";
$database = "petrescue";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Handle uploaded image
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    // ... (rest of the image handling code from previous example)

    // Insert data into the database
    $insertQuery = "INSERT INTO volunteers (name, email, message, image_path, location) VALUES ('$name', '$email', '$message', '$targetFile', '$_POST[location]')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

    // Perform any other necessary actions with the form data
    // ...

} else {
    // Redirect if accessed directly
    header("Location: index.php");
    exit();
}

// Close the database connection
$conn->close();
?>
