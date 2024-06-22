<?php
    include "../../../helper/connection.php";

    if(isset($_GET['information_id'])) {
        $id = $_GET['information_id'];

        $sql = "SELECT * FROM informations WHERE information_id = $id";
        $result = mysqli_query($connection, $query);

        if($row = mysqli_fetch_assoc($result)) {
            echo json_encode($row);
        } else {
            echo json_encode(["error" => "Data not found"]);
        }
    } else {
        echo json_encode(["error" => "No ID provided"]);
    }