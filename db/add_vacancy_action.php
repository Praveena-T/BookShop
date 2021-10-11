<?php
//dd connnections 
include './config.php';
$vacancy_position = $_POST['vacancy_position'];
$vacancy_description = $_POST['vacancy_description'];
$vacancy_description = $_POST['vacancy_image'];

$status = "";

$sql = "INSERT INTO job_vacancy (vacancy_position, vacancy_description, vacancy_image)
        VALUES('$vacancy_position', '$vacancy_description', '$vacancy_image')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
        window.location.href = "../vacancy/add_available_vacancy.php";
        </script>';
}
//alert when data  saving is wrong
else {
    echo '<script>
        // alert("New record Not created successfully");
        window.location.href = "../vacancy/add_available_vacancy.php";
        </script>';
}
