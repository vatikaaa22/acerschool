<?php
    include "../../../../helper/connection.php";

    $address = $_POST["address_name"];
    $default = isset($_POST["default"]) && $_POST["default"] ? 1 : 0;
    $user_id = 1;

    $address = mysqli_real_escape_string($connection, $address);

    $stmt = $connection->prepare("INSERT INTO address(address_name, `default`) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $address,  $default, $user_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => "Data inserted successfully"]);
        header('Location: ../../contact.php');
    } else {
        echo json_encode(["error" => "Failed to insert data"]);
    }

    $stmt->close();
    $connection->close();
?>