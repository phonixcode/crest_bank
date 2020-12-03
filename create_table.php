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
    $sql = "CREATE TABLE IF NOT EXISTS customers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(10) NOT NULL,
        first_name VARCHAR(50) NOT NULL,
        other_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        maiden VARCHAR(50) NOT NULL,
        gender VARCHAR(50) NOT NULL,
        marital VARCHAR(50) NOT NULL,
        dob VARCHAR(50) NOT NULL,
        pob VARCHAR(50) NOT NULL,
        nationality VARCHAR(50) NOT NULL,
        soo VARCHAR(50) NOT NULL,
        con_address VARCHAR(200) NOT NULL,
        tin VARCHAR(50) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        bvn VARCHAR(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table \"customers\" created successfully <br />";
    } else {
        echo "Error creating table: " . $conn->error . "<br />";
    }

    $conn->close();
?>
