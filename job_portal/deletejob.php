<?php
session_start();

require "conn_db.php";
// Assuming you have a database connection established
// $conn = mysqli_connect("hostname", "username", "password", "database");
$id=$_GET["id"];
if ($conn) {
    $update_query = "UPDATE `jobs` SET `status` = 1 WHERE `id`='$id'";
    
    if (mysqli_query($conn, $update_query)) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
} else {
    echo "Failed to connect to the database.";
}



?>