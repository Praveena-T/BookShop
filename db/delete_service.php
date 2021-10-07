<?php
include './config.php';
$id = $_GET['id'];
$sql = "DELETE FROM shop_service WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Data Deleted');
        window.location.href = '../service/view_table_service.php';
    </script>";
} else {
    echo "<script>
        alert('Data Not Deleted');
        window.location.href = '../service/view_table_service.php';
        </script>";
}
$conn->close();
