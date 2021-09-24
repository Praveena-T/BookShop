<?php
include './header.php';
?>
<div class="jumbotron jumbotron-fluid">
    <div class="row ">
        <div class="">
            <div class="card" style="background: #252325; border: none;">
                <h1 class="display-4 text-center">Contact Us</h1>
                <center>
                    <h4 class="text-light my-3"><i class="text-light fa fa-phone" aria-hidden="true"></i> - 0779090998</h4>
                </center>
                <h5 class="text-light text-center">or fill the form below</h5>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <form class="bg-light p-5" method="post" action="">
        <h3 class="text-center">Contact Form</h3>
        <div class="container col-5">
            <div class="row">
                <div class="input-group ">
                    <span class="input-group-text input-icon-background" id=""><i class="fa fa-user input-icon" aria-hidden="true"></i></span>
                    <input type="text" class="form-control input-text" id="name" placeholder="Name">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <span class="input-group-text input-icon-background" id=""><i class="fa fa-envelope input-icon" aria-hidden="true"></i></span>
                    <input type="email" class="form-control input-text" id="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <span class="input-group-text input-icon-background" id=""><i class="fa fa-comments input-icon" aria-hidden="true"></i></span>
                    <textarea class="form-control input-text" id="comment" placeholder="Comment" rows="5" cols="50"></textarea>
                </div>
            </div>
        </div>
        <div class="mT-3">
            <center>
                <input type="reset" value="RESET" class="fa fa-repeat  btn btn-reset-data mx-3 py-2 px-3 " />
                <button type="submit" class="btn btn-submit-data"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>
            </center>
        </div>
    </form>
</div>
<?php
include './footer.php';
?>