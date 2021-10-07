<?php
//dd connnections 
include './config.php';
$genre = $_POST['genre'];

$status = "";

$sql = "INSERT INTO book_genres(book_genre) VALUES('$genre')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
        window.location.href = "../Genre/add_genre.php";
        </script>';
}
//alert when data  saving is wrong
else {
    echo '<script>
        // alert("New record Not created successfully");
        window.location.href = "../Genre/add_genre.php";
        </script>';
}
