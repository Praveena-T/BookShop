<?php
include './config.php';
$id = $_GET['id'];
$sql = "DELETE FROM contact_us WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Data Deleted');
        window.location.href = '../contact_us/view_table_contact.php';
    </script>";
} else {
    echo "<script>
        alert('Data Not Deleted');
        window.location.href = '../contact_us/view_table_contact.php';
        </script>";
}
$conn->close();
