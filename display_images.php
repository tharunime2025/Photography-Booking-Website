<?php
include_once 'gallery_dbConfig.php';

if(isset($_GET['category'])) {
    $category = $_GET['category'];

    $result = $db->query("SELECT file_name FROM $category");
    $images = array();

    while($row = $result->fetch_assoc()) {
        $images[] = $row['file_name'];
    }

    echo json_encode($images);
} else {
    echo json_encode(array());
}
?>
