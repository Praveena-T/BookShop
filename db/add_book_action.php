<?php
//dd connnections 
include './config.php';
$book_number = $_POST['book_number'];
$book_name = $_POST['book_name'];
$book_author = $_POST['book_author'];
$book_price = $_POST['book_price'];
$book_image = $_POST['book_image'];
$book_genre = $_POST['book_genre'];
$book_offer = $_POST['book_offer'];

$status = "";

$sql = "INSERT INTO book(book_number, book_name, book_author, book_price, book_image, book_genre, book_offer)
        VALUES('$book_number', '$book_name', '$book_author', '$book_price', '$book_image', '$book_genre', '$book_offer')";

if (mysqli_query($conn, $sql)) {
    $status = "save";
} else {
    $status = "error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($status) {
    echo '<script>
        window.location.href = "../Book/add_book.php";
        </script>';
}
//alert when data  saving is wrong
else {
    echo '<script>
        // alert("New record Not created successfully");
        window.location.href = "../Book/add_book.php";
        </script>';
}
