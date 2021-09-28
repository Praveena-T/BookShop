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
                <!-- <form class=" p-4" name="forgot_password_form" method="post" action=""> -->
                <form class=" p-4" name="forgot_password_form" method="post" action="./loginaction.php" onsubmit="return validateForm(this)">
                    <div class="">
                        <div class="">
                            <span id='result' class=""></span>
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="email" name="email" placeholder="Username" onmouseleave="validate()">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="password" name="pass" onkeyup="CheckPasswordStrength(this.value)" placeholder="Password">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="text" class="form-control input-text" id="repassword" name="repass" placeholder="confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 text-end">
                        <button type="button" class="btn btn-reset-data1"> CANCEL</button>
                        <button type="submit" id="submit" class="btn btn-submit-data1">SUBMIT</button>
                    </div>
                    <div class="text-left">
                        <a type="btn" href="./register.php" class="btn-reset-data1">New member?</a>
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

<script>
    // function CheckPasswordStrength(pass) {
    //     var password_strength = document.getElementById("password_strength");

    //     //TextBox left blank.
    //     if (pass.length == 0) {
    //         password_strength.innerHTML = "";
    //         return;
    //     }

    //     //Regular Expressions.
    //     var regex = new Array();
    //     regex.push("[A-Z]"); //Uppercase Alphabet.
    //     regex.push("[a-z]"); //Lowercase Alphabet.
    //     regex.push("[0-9]"); //Digit.
    //     regex.push("[$@$!%*#?&]"); //Special Character.

    //     var passed = 0;

    //     //Validate for each Regular Expression.
    //     for (var i = 0; i < regex.length; i++) {
    //         if (new RegExp(regex[i]).test(pass)) {
    //             passed++;
    //         }
    //     }

    //     //Validate for length of Password.
    //     if (passed > 2 && pass.length > 8) {
    //         passed++;
    //     }

    //     //Display status.
    //     var color = "";
    //     var strength = "";
    //     switch (passed) {
    //         case 0:
    //         case 1:
    //             strength = "Weak";
    //             color = "red";
    //             break;
    //         case 2:
    //             strength = "Good";
    //             color = "darkorange";
    //             break;
    //         case 3:
    //         case 4:
    //             strength = "Strong";
    //             color = "green";
    //             break;
    //         case 5:
    //             strength = "Very Strong";
    //             color = "darkgreen";
    //             break;
    //     }
    //     password_strength.innerHTML = strength;
    //     password_strength.style.color = color;
    // }

    function validateEmail(email) {
        let res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return res.test(email);
    }


    var number = /([0-9])/;
    var alphabets = /([a-zA-Z])/;
    var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

    function validate() {
        let result = $("#result");
        let email = $("#email").val();
        result.text("");
        if (validateEmail(email)) {
            result.text("Correct Email");
            result.css("color", "green");
        } else {
            result.text("Wrong Email");
            result.css("color", "red");
            // result.css("background-image", "url('https://th.bing.com/th/id/OIP.9p3FxYYJ1eEOMNDX-1KLngHaIe?pid=ImgDet&rs=1')");
        }
        return false;
    }
    // $("#submit").on("click", validate);

    function validateForm() {
        let email = document.forms["forgot_password_form"]["email"].value;
        let pass = document.forms["forgot_password_form"]["pass"].value;
        let repass = document.forms["forgot_password_form"]["repass"].value;
        var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

        // validate text field input
        if (email == "" || pass == "" || repass == "") {
            // alert("Fill the empty fields");
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Fill the empty fields',
            })
            return false;
            // validate email
        } else if (!validateEmail(email)) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Email validation is wrong',
            })
            return false;
            // validate password strength
        } else if (!$('#password').val().match(number) || !$('#password').val().match(alphabets) || !$('#password').val().match(special_characters) || pass.length < 8) {
            Swal.fire({
                icon: 'error',
                title: 'Check your password strength',
                text: 'Capital letters, simple letters, special characters, numbers and, atleast 8 characters needed.',
            })
            return false;
        } else if (pass != repass) {
            // alert("Passwords did not match");
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Passwords did not match!',
            })
            return false;
        } else {
            // alert("Data entered successfully");
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Password reset is successful',
                showConfirmButton: true
            })
            return true;
        }
    }
</script>