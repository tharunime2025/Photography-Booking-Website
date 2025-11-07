<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "personald";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS form_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    pnumber INT(10) CHECK (pnumber >=1),
    email VARCHAR(255),
    date DATE,
    gnumber INT CHECK (gnumber > 1),
    location VARCHAR(255),
    service_type VARCHAR(255),
    sub_option VARCHAR(255),
    other_message TEXT,
    authorize BOOLEAN
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
