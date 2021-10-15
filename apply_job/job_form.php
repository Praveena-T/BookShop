<?php
include '../includes/header.php';
include '../db/config.php';
$fetch_job_role = "SELECT * FROM job_vacancy";
$result_fetch_job_role = mysqli_query($conn, $fetch_job_role);
?>
<div class="row text-center rounded">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
        <div class="card m-5 shadow p-3 mb-5 bg-white rounded">
            <div class="">
                <h3 class="text-center text-dark pt-3" style="letter-spacing:1px;">Job Application</h3>
            </div>
            <div class="card-body p-3">
                <form class="p-2" method="post" action="../db/add_job_form_action.php" name="add_job_form" onsubmit="return validateForm(this)">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" name="fname" id="fname">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class=" mt-2">
                            <div class="input-group">
                                <textarea class="form-control" id="address" name="address" placeholder="Home Address" rows="2" cols="30"></textarea>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select" id="gender" name="gender">
                                        <option>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="seeking_job" name="seeking_job">
                                        <option>Select job role</option>
                                        <?php while ($job_role = mysqli_fetch_array($result_fetch_job_role)) :; ?>
                                            <option value="<?php echo $job_role[1]; ?>">
                                                <?php echo $job_role[1]; ?> </option>
                                        <?php endwhile;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" mt-2">
                            <label for="inputAddress2" class="form-label">Language Fluency</label>
                            <div class="row g-2">
                                <div class="col-sm-4">
                                    <label>Sinhala</label>
                                    <select class="form-select" id="sinhala" name="sinhala">
                                        <option value="Not Known">Not Known</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label>Tamil</label>
                                    <select class="form-select" id="tamil" name="tamil">
                                        <option value="Not Known">Not Known</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label>English</label>
                                    <select class="form-select" id="english" name="english">
                                        <option value="Not Known">Not Known</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-2">
                            <div class="input-group">
                                <textarea class="form-control" id="skill" name="skill" placeholder="Other Skills" rows="5" cols="50"></textarea>
                            </div>
                        </div>

                        <div class=" mt-2">
                            <label class="form-label">Upload CV</label>
                            <div class="input-group">
                                <input type="file" name="cv" id="cv" accept="application/pdf" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <center>
                            <input type="reset" value="RESET" class="fa fa-repeat btn btn-reset-data" />
                            <button type="submit" name="submit" id="submit" class="btn_submit"> SUBMIT </button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-3">

    </div>
</div>
<script>
    function validateForm() {
        let fname = document.forms["add_job_form"]['fname'].value.trim();
        let lname = document.forms["add_job_form"]['lname'].value.trim();
        let email = document.forms["add_job_form"]['email'].value.trim();
        let phone = document.forms["add_job_form"]['phone'].value.trim();
        let address = document.forms["add_job_form"]['address'].value.trim();
        let gender = document.forms["add_job_form"]['gender'].value.trim();
        let seeking_job = document.forms["add_job_form"]['seeking_job'].value.trim();
        let sinhala = document.forms["add_job_form"]['sinhala'].value.trim();
        let tamil = document.forms["add_job_form"]['tamil'].value.trim();
        let english = document.forms["add_job_form"]['english'].value.trim();
        let skill = document.forms["add_job_form"]['skill'].value.trim();
        let cv = document.forms["add_job_form"]['cv'].value.trim();

        var numbersOnly = /^\d+$/;
        var decimalOnly = /^\s*-?[1-9]\d*(\.\d{1,2})?\s*$/;
        var uppercaseOnly = /^[A-Z]+$/;
        var lowercaseOnly = /^[a-z]+$/;
        var stringOnly = /^[A-Za-z0-9]+$/;
        var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var phone_format = /^\d{10}$/;

        if (fname == "" || lname == "" || email == "" || phone == "" || address == "" || gender == "" || seeking_job == "" || sinhala == "" || tamil == "" || english == "" || skill == "" || cv == "") {
            Swal.fire({
                icon: 'warning',
                title: "Check Fields",
                text: 'Fill the empty fields'
            })
            return false;
        } else {
            if (!email.match(email_format)) {
                Swal.fire({
                    icon: 'error',
                    title: "Check Email",
                    text: 'Enter valid email address'
                })
                return false;
            } else if (!phone.match(phone_format)) {
                Swal.fire({
                    icon: 'warning',
                    title: "Check Phone Number",
                    text: 'Make sure to enter 10 numbers'
                })
                return false;
            }
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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $seeking_job = $_POST['seeking_job'];
    $sinhala = $_POST['sinhala'];
    $tamil = $_POST['tamil'];
    $english = $_POST['english'];
    $skill = $_POST['skill'];
    $cv = $_POST['cv'];
    $status = 'pending';
}
include '../includes/footer.php';
?>