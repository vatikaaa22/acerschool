<?php
include "../../../helper/connection.php";

$name = $_POST["name"];
$id = $_POST["update_id"];
$event_date = $_POST["event_date"];

// Update database
$sql = "UPDATE events SET 
        name = '$name', 
        event_date = '$event_date', 
        user_id = 1,  
        WHERE event_id = '$id'";

$hasil = mysqli_query($connection, $sql);

if ($hasil) {
    // echo"<script>console.log($data);</script>";
    header('Location: ../event.php');
    exit();
} else {
    echo "Error: " . mysqli_error($connection);
}
?>