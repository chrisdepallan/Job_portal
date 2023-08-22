<?php
session_start();

require "conn_db.php";
// Assuming you have a database connection established
// $conn = mysqli_connect("hostname", "username", "password", "database");
$id=$_GET["id"];
if ($conn) {
    $update_query = "UPDATE `applications` SET `status` = 1 WHERE `id`='$id'";
    echo $update_query;    
    if (mysqli_query($conn, $update_query)) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
} else {
    echo "Failed to connect to the database.";
}


header("location:admin.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
</head>
<body>
    dsadsadsadasdasdas
</body>
</html>