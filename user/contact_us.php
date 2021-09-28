<?php
include '../includes/header.php';
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
                <!-- <h5 class="text-light text-center">or fill the form below</h5> -->
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
                <form class="p-4" name="login_form" method="post" action="./loginaction.php" onsubmit="return validateForm(this)">
                    <div class="">
                        <div class="">
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div class="input-group">
                                <input type="email" class="form-control input-text" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div class="input-group">
                                <textarea class="form-control input-text" id="comment" placeholder="Comment" rows="5" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <center>
                            <input type="reset" value="RESET" class="fa fa-repeat btn btn-reset-data" />
                            <button type="submit" class="btn btn-submit-data"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>

<?php
include '../includes/footer.php';
?>