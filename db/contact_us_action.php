<?php
//db connections 
include './config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$status = "";

$sql = "INSERT INTO contact_us(name, email, comment) VALUES('$name', '$email', '$comment')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
        window.location.href = "../user/contact_us.php";
        </script>';
}
//alert when data  saving is wrong
else {
    echo '<script>
        // alert("New record Not created successfully");
        window.location.href = "../user/contact_us.php";
        </script>';
}
