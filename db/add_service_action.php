<?php
//dd connnections 
include './config.php';
$service = $_POST['service'];
$description = $_POST['description'];
$service_image = $_POST['service_image'];
$status = "";

$sql = "INSERT INTO shop_service(service, description, service_image)
        VALUES('$service', '$description', '$service_image')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
        window.location.href = "../service/add_service.php";
        </script>';
}
//alert when data  saving is wrong
else {
    echo '<script>
        // alert("New record Not created successfully");
        window.location.href = "../service/add_service.php";
        </script>';
}
