<?php
//db connections 
include './config.php';
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_comment = $_POST['contact_comment'];

$status = "";

$sql = "INSERT INTO contact_us(name, email, comment) VALUES('$contact_name', '$contact_email', '$contact_comment')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
    // alert("New record created successfully");
        window.location.href = "../contact_us/add_contact_us.php";
        </script>';
}
//alert when data  saving is wrong
else {
    echo '<script>
        alert("New record Not created successfully");
        window.location.href = "../contact_us/add_contact_us.php";
        </script>';
}
