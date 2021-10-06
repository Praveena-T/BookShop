<?php
include '../includes/header.php';
include '../db/config.php';
?>
<div class="jumbotron jumbotron-fluid">
    <div class="row ">
        <div class="">
            <div class="card" style="background: #252325; border: none;">
                <h1 class="display-4 text-center">Contact Us</h1>
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

<div class="row text-center rounded">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4 ">
        <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <h3 class="text-center text-dark pt-3" style="letter-spacing:1px;">CONTACT FORM</h3>
            </div>
            <div class="card-body p-3">
                <form class="p-4" name="add_contact_form" method="post" action="../db/contact_us_action.php" onsubmit="return validateForm(this)">
                    <div class="">
                        <div class="">
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div class="input-group">
                                <input type="email" class="form-control input-text" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div class="input-group">
                                <textarea class="form-control input-text" id="comment" name="comment" placeholder="Comment" rows="5" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <center>
                            <input type="reset" value="RESET" class="fa fa-repeat btn btn-reset-data" />
                            <button type="submit" name="submit" id="submit" class="btn-submit-data"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>
<script>
    function validateForm() {
        let name = document.forms["add_contact_form"]["name"].value.trim();
        let email = document.forms["add_contact_form"]["email"].value.trim();
        let comment = document.forms["add_contact_form"]["comment"].value.trim();
        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;
        var emailFormat = !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

            if (name == "" || email == "" || comment == "") {
                // alert("Fill the empty fields");
                Swal.fire({
                    icon: 'warning',
                    title: "Check Fields",
                    text: 'Fill the empty fields'
                })
                return false;
            } else if (name <= 0 || name.match(uppercaseOnly) || name.match(lowercaseOnly)) {
                // alert("Please enter a valid price");
                Swal.fire({
                    icon: 'warning',
                    title: "Check Book Number",
                    text: 'Please enter a valid book number'
                })
                return false;
            } else if (!email.preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix")) {
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
}
include '../includes/footer.php';
?>