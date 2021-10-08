<?php
// include '../Admin/side_nav.php';
include '../includes/header.php';
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
        /* Font Colour */
        color: white;
    }
</style>

<div class="jumbotron jumbotron-fluid">
    <div class="row ">
        <div class="">
            <div class="card" style="background: #252325; border: none;">
                <h1 class="display-5 text-center">Contact Us</h1>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <h6 class="text-light "><i class="text-light fa fa-phone" aria-hidden="true"></i>&nbsp;0779090998</h6>
                            <center>
                    </div>
                    <div class="col-4">
                        <center>
                            <h6 class="text-light"><i class="text-light fa fa-map-marker" aria-hidden="true"></i>&nbsp;No&nbsp;23 Main&nbsp;Street<br /> Colombo&nbsp;7</h6>
                            <center>
                    </div>
                    <div class="col-4">
                        <center>
                            <h6 class="text-light"><i class="text-light fa fa-link" aria-hidden="true"></i>&nbsp;onlinebooks.lk</h6>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="card m-0 shadow p-3 mb-1 bg-white rounded my-3">
                <div class="card-header" style="background:#e44379">
                    <h3 class="text-center text-white pt-2" style="letter-spacing:1px;">CONTACT US FORM</h3>
                </div>
                <div class="card-body p-3">
                    <form class="p-4" method="post" action="../db/contact_us_action.php" name="add_contact_form" onsubmit="return validateForm(this)">
                        <div class="">
                            <div class="mt-0">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-text" id="contact_name" name="contact_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="form-control input-text" id="contact_email" name="contact_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="input-group">
                                    <textarea type="text" class="form-control input-text" id="contact_comment" name="contact_comment" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="mt-4">

                            </div>
                        </div>
                        <div class="mb-0 text-end">
                            <!-- <input type="reset" class="btn btn-reset-data1" value="RESET"> -->
                            <button type="submit" name="submit" id="submit" class="btn_submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>
<script>
    function validateForm() {
        let contact_name = document.forms["add_contact_form"]["contact_name"].value.trim();
        let contact_email = document.forms["add_contact_form"]["contact_email"].value.trim();
        let contact_comment = document.forms["add_contact_form"]["contact_comment"].value.trim();
        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;
        var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (contact_name == "" || contact_comment == "" || contact_email == "") {
            // alert("Fill the empty fields");
            Swal.fire({
                icon: 'warning',
                title: "Check Fields",
                text: 'Fill the empty fields'
            })
            return false;
        } else if (contact_name <= 2 || contact_name.match(uppercaseOnly) || contact_name.match(lowercaseOnly) || contact_comment < 3 || contact_comment.match(uppercaseOnly) || contact_comment.match(lowercaseOnly)) {
            // alert("Please enter a valid price");
            Swal.fire({
                icon: 'warning',
                title: "Check services",
                text: 'Please enter a valid data, follow sentecte case'
            })
            return false;
        } else if (!contact_email.match(email_format)) {
            // alert("Please enter a valid price");
            Swal.fire({
                icon: 'warning',
                title: "Check email",
                text: 'Please enter a valid email'
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
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_comment = $_POST['contact_comment'];
}
include '../includes/footer.php';
?>