<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$fetch_book_genre = "SELECT * FROM book_genres";
$result_fetch_book_genre = mysqli_query($conn, $fetch_book_genre);
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
        /* Font Colour */
        color: white;
    }
</style>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="card m-0 shadow p-3 mb-1 bg-white rounded">
                <div class="card-header" style="background:#e44379">
                    <h3 class="text-center text-white pt-2" style="letter-spacing:1px;">ADD NEW BOOK</h3>
                </div>
                <div class="card-body p-3">
                    <form class="p-4" method="post" action="../db/add_book_action.php" name="add_book_form" onsubmit="return validateForm(this)">
                        <div class="">
                            <div class="mt-0">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-txt" id="book_number" name="book_number" placeholder="Book Number">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <input type="text" class="form-control input-txt" id="book_name" name="book_name" placeholder="Book Name">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <input type="text" class="form-control input-txt" id="book_author" name="book_author" placeholder="Author Name">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <input type="text" class="form-control input-txt" id="book_price" name="book_price" placeholder="Price">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <p><input type="file" class="" accept="image/*" name="image" id="file" onchange="load_image(event)" style="display: none;"></p>
                                    <p><label for="file" class="form-control" style="cursor: pointer;"><i class="fa fa-upload text-center" aria-hidden="true"></i></label></p>
                                    <!-- <input type="image" class="form-control input-txt" name="book_image" id="book_image"> -->
                                </div>
                            </div>
                            <div class="">
                                <div class="input-group">
                                    <select class="form-select form-select mb-3 input-txt" aria-label=".form-select example" name="book_genre" id="book_genre">
                                        <option>Select Genre</option>
                                        <?php while ($genre = mysqli_fetch_array($result_fetch_book_genre)) :; ?>
                                            <option value="<?php echo $genre[1]; ?>">
                                                <?php echo $genre[1]; ?> </option>
                                        <?php endwhile;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="input-group">
                                    <select class="form-select form-select mb-3 input-txt" aria-label=".form-select example" name="book_offer" id="book_offer">
                                        <option selected>Offer</option>
                                        <option value="Available">Available</option>
                                        <option value="Unavailable">Unavailable</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-1 text-end">
                            <!-- <input type="reset" class="btn btn-reset-data1" value="RESET"> -->
                            <a type="button" href="./Genre/add_genre.php" class="btn-reset-data1 mx-5">ADD GENRE</a>
                            <button type="submit" name="submit" id="submit" class="btn_submit"> ADD BOOK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p><img id="loaded_image" width="300" /></p>
        </div>
    </div>
</div>
<script>
    var load_image = function(event) {
        var image = document.getElementById('loaded_image');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<script>
    function validateForm() {
        let book_number = document.forms["add_book_form"]["book_number"].value.trim();
        let book_name = document.forms["add_book_form"]["book_name"].value.trim();
        let book_author = document.forms["add_book_form"]["book_author"].value.trim();
        let book_price = document.forms["add_book_form"]["book_price"].value.trim();
        let book_image = document.forms["add_book_form"]["image"].value;
        let book_genre = document.forms["add_book_form"]["book_genre"].value;
        let book_offer = document.forms["add_book_form"]["book_offer"].value;
        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;

        if (book_number == "" || book_name == "" || book_author == "" || book_price == "" || book_image == "" || book_offer == "") {
            // alert("Fill the empty fields");
            Swal.fire({
                icon: 'warning',
                title: "Check Fields",
                text: 'Fill the empty fields'
            })
            return false;
        } else if (book_number <= 0 || book_number.match(uppercaseOnly) || book_number.match(lowercaseOnly)) {
            // alert("Please enter a valid price");
            Swal.fire({
                icon: 'warning',
                title: "Check Book Number",
                text: 'Please enter a valid book number'
            })
            return false;
        } else if (book_price <= 0.00 || book_price.match(stringOnly) || book_price.match(lowercaseOnly) || book_price.match(uppercaseOnly)) {
            // alert("Please enter a valid price");
            Swal.fire({
                icon: 'warning',
                title: "Check Price",
                text: 'Please enter a valid price'
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
    $book_number = $_POST['book_number'];
    $book_name = $_POST['book_name'];
    $book_author = $_POST['book_author'];
    $book_price = $_POST['book_price'];
    $book_image = $_POST['book_image'];
    $book_genre = $_POST['book_genre'];
    $book_offer = $_POST['book_offer'];
}
include '../includes/footer.php';
?>