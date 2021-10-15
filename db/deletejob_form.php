<?php
include './config.php';
$id = $_GET['id'];
$sql = "DELETE FROM job_apply WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Data Deleted');
        window.location.href = '../apply_job/view_job_form.php';
    </script>";
} else {
    echo "<script>
        alert('Data Not Deleted');
        window.location.href = '../apply_job/view_job_form.php';
        </script>";
}
$conn->close();
