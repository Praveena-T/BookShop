<?php
include '../Admin/side_nav.php';
include '../db/config.php';

?>
<style>
    body {
        overflow-x: hidden;
        background-image: url("https://th.bing.com/th/id/R.238bff8e7227c8dc691891f3bde28e36?rik=v%2bFNBiPxvCvqOg&pid=ImgRaw&r=0");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        color: white;
    }
</style>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-1">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="card-header" style="background:#e44379">
                                <h5 class="modal-title">EDIT GENRE</h5>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body p-3">
                                <?php
                                $param_id = $_GET['id'];
                                $sql_genre = "SELECT * FROM book_genres where id = $param_id";
                                $result_genre = $conn->query($sql_genre);
                                if ($result_genre->num_rows > 0) {
                                    while ($row_ = $result_genre->fetch_assoc()) {
                                        $book_genre_ = $row_['book_genre'];
                                    }
                                }
                                if (isset($_POST['update'])) {
                                    $book_genre = $_POST['book_genre_'];
                                    $edit = mysqli_query($conn, "update book_genres set
                                    book_genre= '$book_genre' 
                                    where id=$param_id");
                                    if ($edit) {
                                        mysqli_close($conn);
                                        echo '<script>
                                        Swal.fire({
                                            icon: "success",
                                            title: "Data Successfully Added",
                                            text: "Done",
                                        })
                                        window.location.href = "add_genre.php";
                                        </script>';
                                        exit;
                                    }
                                }
                                ?>
                                <form class="p-4" method="post">
                                    <div class="">
                                        <div class="mt-0">
                                            <div class="input-group">
                                                <input type="text" autocomplete="off" class="form-control input-txt" id="book_genre_" name="book_genre_" placeholder="Genre" value="<?php echo $book_genre_; ?><?php $row['genre']  ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" name="update" id="update" class="btn_submit mt-4">EDIT GENRE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="">
                <table class="table table-responsive-sm table-hover table-light">
                    <thead>
                        <tr style='color: #e44379'>
                            <th>No</th>
                            <th>Genre</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from book_genres";
                        $result = $conn->query($sql);
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "</tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $row['book_genre'] . "</td>";
                            echo "<td>";
                            echo '<a type="button" class="btn-sm btn-primary mx-1" title="Update Record" data-toggle="tooltip"  style="background:#008b8b" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <span><i class="fa fa-pencil-square-o text-white"></i></span>
                            </a>';
                            echo '<a type="button" href="../db/delete_genre.php?id=' . $row['id'] . '"  class="btn-sm btn-danger mx-1" title="Delete Record" data-toggle="tooltip" style="background:#ff4242"><span><i class="text-white fa fa-trash-o"></i></span></a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
            <div class="card m-0 shadow p-3 mb-1 bg-white rounded">
                <div class="card-header" style="background:#e44379">
                    <h5 class="modal-title" id="exampleModalLabel">ADD NEW GENRE</h5>
                </div>
                <div class="card-body p-3">
                    <form class="p-4" method="post" action="../db/add_genre_action.php" name="add_genre_form" onsubmit="return validateForm(this)">
                        <div class="">
                            <div class="mt-0">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-txt" id="genre" name="genre" placeholder="Genre">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <!-- <input type="reset" class="btn btn-reset-data1" value="RESET"> -->
                            <button type="submit" name="submit" id="submit" class="btn_submit mt-4">ADD GENRE</button>
                            <a type="button" href="../Book/add_book.php" class="btn-reset-data1 mx-5 mb-3">ADD BOOK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</div>
<script>
    function validateForm() {
        let genre = document.forms["add_genre_form"]["genre"].value.trim();
        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;

        if (genre === "") {
            // alert("Fill the empty fields");
            Swal.fire({
                icon: 'warning',
                title: "Check Fields",
                text: 'Fill the empty fields'
            })
            return false;
        } else if (genre.match(numbersOnly) || genre.match(decimalOnly)) {
            // alert("Please enter a valid genre");
            Swal.fire({
                icon: 'warning',
                title: "Check",
                text: 'Please enter a valid genre'
            })
            return false;
        } else {
            // alert("Added");
            Swal.fire({
                icon: 'success',
                title: "Data Successfully Added",
                text: 'Done'
            })
        }
    }
</script>
<?php

if (isset($_POST['submit'])) {
    $genre = $_POST['genre'];
}
include '../includes/footer.php';
?>