<?php
include '../includes/header.php';
include '../db/config.php';
?>
<style>
    body {

        overflow-x: hidden;
        background-image: url("https://static.vecteezy.com/system/resources/previews/000/518/270/non_2x/curve-and-blend-light-pink-abstract-background-008-vector.jpg");
        /* background-image: url("https://static.wixstatic.com/media/ec1cb7_324067af5553483cb1bac87835fa2925~mv2.jpg/v1/fill/w_404,h_280,al_c,q_80,usm_0.66_1.00_0.01/ec1cb7_324067af5553483cb1bac87835fa2925~mv2.jpg"); */

        /* Background image is centered vertically and horizontally at all times */
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
                <h3 class="text-center text-white pt-3" style="letter-spacing:1px;">FORGOT PASSWORD</h3>
            </div>
            <div class="card-body p-3">
                <form class=" p-4" method="post" action="./loginaction.php">
                    <div class="">
                        <div class="">
                            <div class="input-group">
                                <input type="email" class="form-control input-text" id="username" name="email" placeholder="Username">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="password" class="form-control input-text" id="password" name="pass" placeholder="Password">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="password" class="form-control input-text" id="repassword" name="pass" placeholder="confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 text-end">
                        <button type="button" class="btn btn-reset-data1"> CANCEL</button>
                        <button type="submit" class="btn btn-submit-data1">RESET PASSWORD</button>
                    </div>
                    <div class="text-left">
                        <a type="btn" href="./register.php" class="btn-reset-data1">Do not have an account?</a>
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