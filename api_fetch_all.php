<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    include("config.php");

    $sql = "SELECT * FROM student_info";
    $result = mysqli_query($conn, $sql) or die("SQL query failed.");

    if (mysqli_num_rows($result) > 0) {
        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output, JSON_PRETTY_PRINT);
    } else {
        echo json_encode(array("message" => "No record found.", "status" => false));
    }

?>