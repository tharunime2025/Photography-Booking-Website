<?php
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "GallaryABC";

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement to create the wedding table
$sqlWedding = "CREATE TABLE wedding (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

if ($conn->query($sqlWedding) === TRUE) {
    echo "Table 'wedding' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL statement to create the event table
$sqlEvent = "CREATE TABLE event (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

if ($conn->query($sqlEvent) === TRUE) {
    echo "Table 'event' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL statement to create the graduation table
$sqlGraduation = "CREATE TABLE graduation (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

if ($conn->query($sqlGraduation) === TRUE) {
    echo "Table 'graduation' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL statement to create the birthday table
$sqlBirthday = "CREATE TABLE birthday (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

if ($conn->query($sqlBirthday) === TRUE) {
    echo "Table 'birthday' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL statement to create the latest table
$sqlLatest = "CREATE TABLE latest (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

if ($conn->query($sqlLatest) === TRUE) {
    echo "Table 'latest' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


// Close connection
$conn->close();
?>
