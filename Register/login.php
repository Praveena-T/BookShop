<?php
include '../includes/header.php';
include '../db/config.php';
?>
<style>
    body {
        overflow-x: hidden;
        background-image: url("https://static.vecteezy.com/system/resources/previews/000/518/270/non_2x/curve-and-blend-light-pink-abstract-background-008-vector.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        /* Font Colour */
        color: white;
    }
</style>
<div class="row text-center rounded">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4 ">
        <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
            <div class="card-header" style="background:#e44379">
                <h3 class="text-center text-white pt-3" style="letter-spacing:1px;">LOGIN</h3>
            </div>
            <div class="card-body p-3">
                <form class="p-4" name="login_form" method="post" action="./loginaction.php" onsubmit="return validateForm(this)">
                    <div class="">
                        <div class="">
                            <div class="input-group">
                                <input type="TEXT" class="form-control input-text" id="username" name="email" placeholder="Username">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div class="input-group">
                                <input type="password" class="form-control input-text" id="password" name="pass" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <!-- <textarea class="form-control input-text" id="comment" placeholder="Type" rows="5" cols="50"></textarea> -->
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 text-end">
                        <button type="button" class="btn btn-reset-data1"> CANCEL</button>
                        <button type="submit" class="btn btn-submit-data1"> LOGIN</button>
                    </div>
                    <div class="text-left">
                        <a type="btn" href="./register.php" class="btn-reset-data1 mx-4">New member?</a>
                        <a type="btn" href="./forgot_password.php" class="btn-reset-data1">Forgot Password?</a>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>





                    <div class="select">
                        <center>
                            <h1> Example 1 </h1>
                            <p> <b> Get Selected Value in drop-down using jQuery </b> </p>
                            <form action="#" method="post">
                                <label>
                                    <h4> Select Country from drop-down list: </h4> <br>
                                </label>
                                <select class="country">
                                    <option value="usa"> United States </option>
                                    <option value="india"> India </option>
                                    <option value="uk"> United Kingdom </option>
                                    <option value="brazil"> Brazil </option>
                                    <option value="germany"> Germany </option>
                                </select>
                            </form>
                        </center>
                    </div>





                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>

<div class="container-flex text-dark bg-white text-center fixed-bottom">
    Copyright Owned By 2021
</div>
</div>
<?php
include './includes/footer.php';
?>
<script>
    function validateForm() {
        let email = document.forms["login_form"]["email"].value;
        let pass = document.forms["login_form"]["pass"].value;
        if (email == "" || pass == "") {
            alert("Fill the empty fields");
            return false;
        }
    }
</script>