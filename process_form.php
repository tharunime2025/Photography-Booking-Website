<?php
session_start(); // Start the session if not already started

$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "personald";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$pnumber = $_POST['pnumber'];
$email = $_POST['email'];
$date = $_POST['date'];
$gnumber = $_POST['gnumber'];
$location = $_POST['location'];
$service_type = $_POST['service_type'];
$sub_option = $_POST['sub_option_' . $service_type];
$other_message = $_POST['message'];
$authorize = isset($_POST['authorize']) ? 1 : 0;

$sql = "INSERT INTO form_data (name, pnumber, email, date, gnumber, location, service_type, sub_option, other_message, authorize) 
        VALUES ('$name', '$pnumber', '$email', '$date', $gnumber, '$location', '$service_type', '$sub_option', '$other_message', $authorize)";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    
    // Store form data in session
    $_SESSION['form_data'] = $_POST;

    header('Location: thank_you.php'); // Redirect to thank you page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>