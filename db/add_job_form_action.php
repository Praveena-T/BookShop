<?php
//db connnections 
include './config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$seeking_job = $_POST['seeking_job'];
$sinhala = $_POST['sinhala'];
$tamil = $_POST['tamil'];
$english = $_POST['english'];
$skill = $_POST['skill'];
$cv = $_POST['cv'];
$status = "";

$sql = "INSERT INTO job_apply(fname, lname, email, phone, address, gender, seeking_job, sinhala, tamil, english, skill, cv)
VALUES('$fname', '$lname', '$email', '$phone', '$address', '$gender', '$seeking_job', '$sinhala', '$tamil', '$english', '$skill', '$cv')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
        window.location.href = "../apply_job/job_form.php";
        </script>';
} else {
    echo '<script>
        window.location.href = "../apply_job/job_form.php";
        </script>';
}
