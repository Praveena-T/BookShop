<?php
include '../includes/header.php';
include '../db/config.php';
?>
<style>
    body {

        overflow-x: hidden;
        background-image: url("https://th.bing.com/th/id/OIP.GSkfRGBY2VBw5vn5Rah9aQHaFj?pid=ImgDet&w=800&h=600&rs=1");
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

<div class="row text-center">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">
        <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
            <div class="card-header" style="background:#e44379">
                <h3 class="text-center text-white pt-3" style="letter-spacing:1px;">REGISTER</h3>
            </div>
            <div class="card-body p-3">
                <form class=" p-4" method="post" action="">
                    <div class="">
                        <div class="mt-0">
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="first_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="email" class="form-control input-text" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="input-group">
                                <input type="password" class="form-control input-text" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div class="input-group">
                                <input type="password" class="form-control input-text" id="repassword" placeholder="Retype Password">
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 text-end">
                        <button type="submit" class="btn btn-reset-data1"> CANCEL</button>
                        <button type="submit" class="btn btn-submit-data1"> REGISTER</button>
                    </div>
                    <div class="text-left">
                        <a type="submit" class="btn-reset-data1" href="./login.php">Already a member?</a>
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