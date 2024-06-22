<?php
    include "../../../../helper/connection.php";

    $name = $_POST["username"];
    $number = $_POST["number"];
    $default = isset($_POST["default"]) && $_POST["default"] ? 1 : 0;

    $name = mysqli_real_escape_string($connection, $name);
    $number = mysqli_real_escape_string($connection, $number);

    $stmt = $connection->prepare("INSERT INTO phones(username, number, `default`) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $number, $default);
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