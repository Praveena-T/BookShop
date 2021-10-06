<?php
$SERVER_NAME = "localhost";
$USER_NAME =  "root";
$PASSWORD = "host@123";
$DATABASE = "book_shop";

$conn =  new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connection succeeded";
}
