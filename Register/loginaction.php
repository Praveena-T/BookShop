<?php
include '../db/config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT id FROM users WHERE email = '$email' and password = '$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if ($count == 1) {


   header("location: welcome.php");
} else {
   $error = "Your Login Name or Password is invalid";
}
