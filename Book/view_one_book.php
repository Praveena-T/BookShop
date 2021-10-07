<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$param_id = $_GET['id'];
$sql = "SELECT * FROM book where id = $param_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row_ = $result->fetch_assoc()) {
        $book_number_ = $row_['book_number'];
        $book_name_ = $row_['book_name'];
        $book_author_ = $row_['book_author'];
        $book_price_ = $row_['book_price'];
        $book_image_ = $row_['book_image'];
        $book_genre_ = $row_['book_genre'];
        $book_offer_ = $row_['book_offer'];
    }
}
?>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="card mb-3 shadow p-1 bg-white rounded">
                <div class="row g-0">
                    <div class="col-4 bg-dark ">
                        <img src="..." class="mg-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $book_name_ ?></h5>
                            <p class="card-text">BookID&nbsp;&nbsp;:<?php echo $book_number_ ?></p>
                            <p class="card-text">Author&nbsp;&nbsp;:<?php echo $book_author_ ?></p>
                            <p class="card-text">Price&nbsp;&nbsp;: LKR.<?php echo $book_price_ ?></p>
                            <p class="card-text">Genre&nbsp;&nbsp;: <?php echo $book_genre_ ?></p>
                            <?php
                            if ($book_offer_ == 'Available') {
                                echo '<p class="card-text">Offer&nbsp;&nbsp;: <span class="badge rounded-pill bg-danger">' . $book_offer_ . '</span></p>';
                            } else {
                                echo '<p class="card-text">Offer&nbsp;&nbsp;: <span class="badge rounded-pill bg-warning">' . $book_offer_ . '</span></p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
<?php
include '../includes/footer.php';
?>