<?php
include_once 'gallery_dbConfig.php';

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (isset($_POST['submit'])) {

    // Store the selected category in a session variable
    $_SESSION['selected_category'] = $_POST['category'];

    $category = $_POST['category'];
    $targetDir = "uploads/";

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    $uploadedFiles = array();
    $successMessages = array();
    $errorMessages = array();

    foreach ($_FILES['files']['name'] as $key => $val) {
        $fileName = basename($_FILES['files']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                $uploadedFiles[] = $fileName;
                $uploaded_on = date("Y-m-d H:i:s");
                $sql = "INSERT INTO $category (file_name, uploaded_on) VALUES ('$fileName', '$uploaded_on')";
                if (mysqli_query($conn, $sql)) {
                    $successMessages[] = "The file $fileName has been uploaded successfully to the $category category.";
                } else {
                    $errorMessages[] = "Error uploading $fileName: " . mysqli_error($conn);
                }
            }
        } else {
            $errorMessages[] = "Invalid file type for $fileName. Only JPG, PNG, JPEG, and GIF files are allowed.";
        }
    }

    if (!empty($successMessages)) {
        // Display success messages in an alert box
        echo '<script>alert("' . implode('\n', $successMessages) . '");</script>';
    }
    if (!empty($errorMessages)) {
        // Display error messages in an alert box
        echo '<script>alert("' . implode('\n', $errorMessages) . '");</script>';
    }
}
?>
