<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$param_id = $_GET['id'];
$sql = "SELECT * FROM shop_service where id = $param_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row_ = $result->fetch_assoc()) {
        $service_ = $row_['service'];
        $description_ = $row_['description'];
        $service_image_ = $row_['service_image'];
    }
}
// else {
//     echo "No data";
// }

if (isset($_POST['update'])) {
    $service = $_POST['service'];
    $description = $_POST['description'];
    $service_image = $_POST['service_image'];

    $edit = mysqli_query($conn, "update book set
    service = '$service',
    description= '$description',
    service_image= '$service_image'
    where id=$param_id");

    if ($edit) {
        mysqli_close($conn);
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "Data Successfully Added",
            text: "Done",
        })
        window.location.href = "view_table_service.php";
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
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="card m-0 shadow p-3 mb-1 bg-white rounded">
                <div class="card-header" style="background:#e44379">
                    <h3 class="text-center text-white pt-2" style="letter-spacing:1px;">EDIT SERVICE</h3>
                </div>
                <div class="card-body p-3">
                    <form class="p-4" method="post" name="add_book_form" onsubmit="return validateForm(this)">
                        <div class="">
                            <div class="mt-0">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-txt" id="service" name="service" placeholder="Service" value="<?php echo $service_; ?><?php $row['service']  ?>">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <textarea type="text" class="form-control input-txt" id="description" name="description" placeholder="Description"><?php echo $description_; ?><?php $row['description']  ?></textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <p><input type="file" class="" accept="image/*" name="service_image" id="file" onchange="load_image(event)" style="display: none;"></p>
                                    <p><label for="file" class="form-control" style="cursor: pointer;"><i class="fa fa-upload text-center" aria-hidden="true"></i></label></p>
                                    <!-- <input type="image" class="form-control input-txt" name="book_image" id="book_image"> -->
                                </div>
                            </div>
                        </div>
                        <div class="mb-1 text-end">
                            <!-- <input type="reset" class="btn btn-reset-data1" value="RESET"> -->
                            <button type="submit" name="submit" id="submit" class="btn_submit"> ADD SERVICE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p><img id="service_image" width="300" /></p>
        </div>
    </div>
</div>
<script>
    var load_image = function(event) {
        var image = document.getElementById('service_image');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<script>
    function validateForm() {
        let service = document.forms["add_book_form"]["service"].value.trim();
        let description = document.forms["add_book_form"]["description"].value.trim();
        let service_image = document.forms["add_book_form"]["service_image"].value.trim();
        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;

        if (service == "" || description == "" || service_image == "") {
            // alert("Fill the empty fields");
            Swal.fire({
                icon: 'warning',
                title: "Check Fields",
                text: 'Fill the empty fields'
            })
            return false;
        } else if (service <= 3 || service.match(uppercaseOnly) || service.match(lowercaseOnly) || description <= 5 || description.match(uppercaseOnly) || description.match(lowercaseOnly)) {
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