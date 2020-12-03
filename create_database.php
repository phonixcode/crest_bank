<?php
    $host = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($host, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS crest_bank";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully <br />";
    } else {
        echo "Error creating database: " . $conn->error . "<br />";
    }

    $conn->close();
?>