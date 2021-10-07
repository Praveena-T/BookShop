<?php
include './config.php';
$id = $_GET['id'];
$sql = "DELETE FROM book_genres WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Data Deleted');
        window.location.href = '../Genre/add_genre.php';
    </script>";
} else {
    echo "<script>
        alert('Data Not Deleted');
        window.location.href = '../Genre/add_genre.php';
        </script>";
}
$conn->close();
