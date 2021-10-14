<?php
include '../Admin/side_nav.php';
include '../db/config.php';

?>
<style>
    /* body {
        overflow-x: hidden;
        background-image: url("https://th.bing.com/th/id/R.238bff8e7227c8dc691891f3bde28e36?rik=v%2bFNBiPxvCvqOg&pid=ImgRaw&r=0");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        Font Colour
        color: white;
    } */

    nav ol li a {
        color: black;
        text-decoration: none;
    }

    nav ol li a:hover {
        color: var(--primary-color);
        text-decoration: 1px blue solid;
    }
</style>
<nav class="container" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../Admin/dashboard.php"><span class="badge bg-dark">Dashboard</span></a></li>
        <li class="breadcrumb-item"><a href="../service/view_table_service.php"><span class="badge bg-dark">View Services</span></a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Services</li>
    </ol>
</nav>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="card m-0 shadow p-3 mb-1 bg-white rounded">
                <div class="card-header" style="background:#e44379">
                    <h3 class="text-center text-white pt-2" style="letter-spacing:1px;">ADD NEW SERVICE</h3>
                </div>
                <div class="card-body p-3">
                    <form class="p-4" method="post" action="../db/add_service_action.php" name="add_book_form" onsubmit="return validateForm(this)">
                        <div class="">
                            <div class="mt-0">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-txt" id="service" name="service" placeholder="Service">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <textarea type="text" class="form-control input-txt" id="description" name="description" placeholder="Description"></textarea>
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

if (isset($_POST['submit'])) {
    $service = $_POST['service'];
    $description = $_POST['description'];
    $service_image = $_POST['service_image'];
}
include '../includes/footer.php';
?>