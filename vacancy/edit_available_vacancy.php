<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$param_id = $_GET['id'];
$sql = "SELECT * FROM job_vacancy where id = $param_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row_ = $result->fetch_assoc()) {
        $vacancy_position_ = $row_['vacancy_position'];
        $vacancy_description_ = $row_['vacancy_description'];
        $vacancy_image_ = $row_['vacancy_description'];
    }
}
// else {
//     echo "No data";
// }

if (isset($_POST['update'])) {
    $vacancy_position = $_POST['vacancy_position'];
    $vacancy_description = $_POST['vacancy_description'];
    $vacancy_description = $_POST['vacancy_description'];

    $edit = mysqli_query($conn, "update job_vacancy set
    vacancy_position = '$vacancy_position',
    vacancy_description= '$vacancy_description',
    vacancy_description= '$vacancy_description'
    where id=$param_id");

    if ($edit) {
        mysqli_close($conn);
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "Data Successfully Updated",
            text: "Done",
        })
        window.location.href = "view_table_vacancy.php";
        </script>';
        exit;
    }
}

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
<nav class="container" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../Admin/dashboard.php"><span class="badge bg-dark">Dashboard</span></a></li>
        <li class="breadcrumb-item"><a href="./view_table_vacancy.php"><span class="badge bg-dark">View Vacancy</span></a></li>
        <li class="breadcrumb-item active" aria-current="page"><span class="badge bg-secondary">Add Vacancy</span></li>
    </ol>
</nav>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="card m-0 shadow p-3 mb-1 bg-white rounded">
                <div class="card-header" style="background:#e44379">
                    <h3 class="text-center text-white pt-2" style="letter-spacing:1px;">EDIT VACANCY</h3>
                </div>
                <div class="card-body p-3">
                    <form class="p-4" method="post" name="add_available_vacancy_form" onsubmit="return validateForm(this)">
                        <div class="">
                            <div class="mt-0">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-txt" id="vacancy_position" name="vacancy_position" placeholder="Vacancy Position" value="<?php echo $vacancy_position_; ?><?php $row['vacancy_position']  ?>">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <textarea type="text" class="form-control input-txt" id="vacancy_description" name="vacancy_description" placeholder="Description"><?php echo $vacancy_description_; ?><?php $row['vacancy_description']  ?></textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <p><input type="file" class="" accept="image/*" name="vacancy_image" id="file" onchange="load_image(event)" style="display: none;" value="<?php echo $vacancy_image_; ?><?php $row['vacancy_image']  ?>"></p>
                                    <p><label for="file" class="form-control" style="cursor: pointer;"><i class="fa fa-upload text-center" aria-hidden="true"></i></label></p>
                                    <!-- <input type="image" class="form-control input-txt" name="book_image" id="book_image"> -->
                                </div>
                            </div>
                        </div>
                        <div class="mb-1 text-end">
                            <!-- <input type="reset" class="btn btn-reset-data1" value="RESET"> -->
                            <button type="submit" name="update" id="submit" class="btn_submit"> ADD SERVICE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p><img id="vacancy_image" width="300" /></p>
        </div>
    </div>
</div>
<script>
    var load_image = function(event) {
        var image = document.getElementById('vacancy_image');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<script>
    function validateForm() {
        let vacancy_position = document.forms["add_available_vacancy_form"]["vacancy_position"].value.trim();
        let vacancy_description = document.forms["add_available_vacancy_form"]["vacancy_description"].value.trim();
        let vacancy_image = document.forms["add_available_vacancy_form"]["vacancy_image"].value.trim();
        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;

        if (vacancy_position == "" || vacancy_description == "" || vacancy_image == "") {
            // alert("Fill the empty fields");
            Swal.fire({
                icon: 'warning',
                title: "Check Fields",
                text: 'Fill the empty fields'
            })
            return false;
        } else if (vacancy_position <= 3 || vacancy_position.match(uppercaseOnly) || vacancy_position.match(lowercaseOnly) || vacancy_description <= 5 || vacancy_description.match(uppercaseOnly) || vacancy_description.match(lowercaseOnly)) {
            // alert("Please enter a valid price");
            Swal.fire({
                icon: 'warning',
                title: "Check services",
                text: 'Please enter a valid data'
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
include '../includes/footer.php';
?>