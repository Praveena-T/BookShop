<?php
include './config.php';
$id = $_GET['id'];
$sql = "DELETE FROM book WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Data Deleted');
        window.location.href = '../Book/view_book.php';
    </script>";
} else {
    echo "<script>
        alert('Data Not Deleted');
        window.location.href = '../Book/view_book.php';
        </script>";
}
$conn->close();
