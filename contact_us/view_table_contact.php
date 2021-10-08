<?php
include '../Admin/side_nav.php';
?>
<div class="container-responsive">
    <div class="row">
        <div class="col-sm-10 container">
            <table class="table table-sm table-responsive table-hover">
                <thead>
                    <?php
                    include '../db/config.php';
                    $sql = "select * from contact_us";
                    $result = $conn->query($sql);
                    $i = 1;
                    echo "<tr class='bg-white' style='color: #e44379'>";
                    echo "<th>" . 'No' . "</th>";
                    echo "<th>" . 'Name' . "</th>";
                    echo "<th>" . 'Email'  . "</th>";
                    echo "<th><p>" . 'Comment' . "</p></th>";
                    echo "<th>" . 'Action' . "</th>";
                    echo "</tr>";
                    ?>
                </thead>
                <tbody>
                    <?php

                    while ($row = $result->fetch_assoc()) {
                        echo "</tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        if (strlen($row['comment']) > 80) {
                            echo "<td> 
                            <div class='' style='overflow-x:scroll; height:60px; width:450px;'>" . $row['comment'] .
                                "</div></td>";
                        } else {
                            echo "<td> 
                            <div >" . $row['comment'] .
                                "</div></td>";
                        }
                        echo "<td>";
                        echo '<a type="button" href="view_one_contact_us.php?id=' . $row['id'] . '" class="btn-sm mx-2" title="View Record" data-toggle="tooltip" style="background:#3d3d3d"><span><i class="text-white fa fa-file-o"></i></span></a>';
                        echo '<a type="button" href="../db/delete_contact_us.php?id=' . $row['id'] . '"  class="btn-sm mx-1" title="Delete Record" data-toggle="tooltip" style="background:#ff4242"><span><i class="text-white fa fa-trash-o"></i></span></a>';
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