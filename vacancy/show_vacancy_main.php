<?php
// include '../Admin/side_nav.php';
include '../includes/header.php';
// include '../../includes/header.php';
include '../db/config.php';
?>
<style>
    body {
        overflow-x: hidden;
        /* background-image: url("https://th.bing.com/th/id/R.238bff8e7227c8dc691891f3bde28e36?rik=v%2bFNBiPxvCvqOg&pid=ImgRaw&r=0");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
         Font Colour  */
        /* color: white; */
    }
</style>

<div class="jumbotron jumbotron-fluid">
    <div class="row ">
        <div class="">
            <div class="card" style="background: #252325; border: none;">
                <h1 class="display-5 text-center">Jobs Available</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-responsive">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 p-4">
            <?php
            include '../db/config.php';
            $sql = "select * from job_vacancy";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {

                echo '<div class="col-4">';
                echo '<div class="card h-100">';
                echo '<img src="..." class="card-img-top" alt="...">';
                echo '<div class="card-body p-3">';
                echo '<h5 class="card-title text-center">' . $row["vacancy_position"] . '</h5>';
                echo '<p class="card-text lh-base">' . $row["vacancy_description"] . '</p>';
                echo '</div>';
                // <div class="card-footer">
                //     <small class="text-muted">Last updated 3 mins ago</small>
                // </div>
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="card-group">
        <div class="card border border-white" style="max-width: 22rem;">
            <div class="card-body">
                <img src="../img/undraw_Co-working_re_w93t.png" class="card-img-top image-zoom" alt="...">
            </div>
        </div>
        <div class="card border border-white" style="max-width: 22rem;">
            <div class="card-body">
                <div class="">
                    <h3 class="text-center text-dark mt-5" style="letter-spacing:1px;">We are hiring!</h3>
                </div>
                <div class="card-body text-center">
                    <a class="button btn-submit-data p-2" href="./apply_job/job_form.php">APPLY NOW</a>
                </div>
            </div>
        </div>
        <div class="card  border border-white">
        </div>
    </div>

</div>
<?php
include '../includes/footer.php';
?>