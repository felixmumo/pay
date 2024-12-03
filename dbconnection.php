<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mpesa');

try {
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check if the connection is successful
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected to the database successfully.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
