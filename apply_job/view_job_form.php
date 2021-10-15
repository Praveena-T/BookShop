<?php
include '../Admin/side_nav.php';
?>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-10 container">
            <table class="table table-sm table-responsive table-hover">
                <thead>
                    <?php
                    include '../db/config.php';
                    $sql = "select * from job_apply";
                    $result = $conn->query($sql);
                    $i = 1;
                    echo "<tr class='bg-white' style='color: #e44379'>";
                    echo "<th>" . 'No' . "</th>";
                    echo "<th>" . 'Name1' . "</th>";
                    echo "<th>" . 'Name2' . "</th>";
                    echo "<th>" . 'Email'  . "</th>";
                    echo "<th>" . 'Phone' . "</th>";
                    echo "<th>" . 'Aaddress' . "</th>";
                    echo "<th>" . 'Gender' . "</th>";
                    echo "<th>" . 'Job Role' . "</th>";
                    echo "<th>" . 'Sinhala' . "</th>";
                    echo "<th>" . 'Tamil' . "</th>";
                    echo "<th>" . 'English' . "</th>";
                    echo "<th>" . 'Skills' . "</th>";
                    echo "<th>" . 'CV' . "</th>";
                    echo "<th>" . 'Status' . "</th>";
                    echo "<th>" . 'Action' . "</th>";
                    echo "</tr>";
                    ?>
                </thead>
                <tbody>
                    <?php

                    while ($row = $result->fetch_assoc()) {
                        echo "</tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . $row['fname'] . "</td>";
                        echo "<td>" . $row['lname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['seeking_job'] . "</td>";
                        echo "<td>" . $row['sinhala'] . "</td>";
                        echo "<td>" . $row['tamil'] . "</td>";
                        echo "<td>" . $row['english'] . "</td>";
                        echo "<td>" . $row['skill'] . "</td>";
                        echo "<td>" . $row['cv'] . "</td>";
                        // echo "<td>" . ' Pending' . "</td>";
                        if ($row['status'] == "Pending") {
                            echo "<td><span class='badge  rounded-pill bg-warning'>" . $row['status'] . "</span></td>";
                        } else if ($row['status'] == "Cancelled") {
                            echo "<td><span class='badge  rounded-pill bg-danger'>" . $row['status'] . "</span></td>";
                        } else {
                            echo "<td> <span class='badge rounded-pill bg-success'>" . $row['status'] . "</span></td>";
                        }
                        echo "<td>";
                        echo '<a type="button" href="view_one_job_form.php?id=' . $row['id'] . '" class="btn-sm mx-0" title="View Record" data-toggle="tooltip" style="background:#3d3d3d"><span><i class="text-white fa fa-file-o"></i></span></a>';
                        echo '<a type="button" href="edit_job_form.php?id=' . $row['id'] . '" class="btn-sm mx-0" title="Update Record" data-toggle="tooltip" style="background:#008b8b"><span><i class="fa fa-pencil-square-o text-white"></i></span></a>';
                        echo '<a type="button" href="../db/deletejob_form.php?id=' . $row['id'] . '"  class="btn-sm mx-0" title="Delete Record" data-toggle="tooltip" style="background:#ff4242"><span><i class="text-white fa fa-trash-o"></i></span></a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include '../includes/footer.php';
?>