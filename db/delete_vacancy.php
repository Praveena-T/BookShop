<?php
include './config.php';
$id = $_GET['id'];
$sql = "DELETE FROM job_vacancy WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Data Deleted');
        window.location.href = '../vacancy/view_table_vacancy.php';
    </script>";
} else {
    echo "<script>
        alert('Data Not Deleted');
        window.location.href = '../vacancy/view_table_vacancy.php';
        </script>";
}
$conn->close();
