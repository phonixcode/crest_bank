<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crest_bank";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS admin_table (
        admin_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pass VARCHAR(50) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table \"admin\" created successfully <br />";
    } else {
        echo "Error creating table: " . $conn->error . "<br />";
    }

    $conn->close();
?>