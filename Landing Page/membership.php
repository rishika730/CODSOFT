<?php
// Establish a database connection (replace with your credentials)
$dbHost = 'your_database_host';
$dbUser = 'your_database_user';
$dbPass = 'your_database_password';
$dbName = 'gym_database';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Insert data into the database
    $query = "INSERT INTO members (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $query)) {
        echo "Membership successfully added!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
