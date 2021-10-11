<?php
include '../Admin/side_nav.php';
?>
<nav class="container" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../Admin/dashboard.php"><span class="badge bg-dark">Dashboard</span></a></li>
        <li class="breadcrumb-item active" aria-current="page"><span class="badge bg-secondary">View Vacancies</span></li>
    </ol>
</nav>
<div class="container-responsive">
    <div class="row p-3">
        <div class="col-sm-8 container">
            <h4 class="text-left pt-1" style="letter-spacing:1px; color:#e44379;">VIEW VACANCIES</h4>
            <table class="table table-sm table-responsive table-hover">
                <thead>
                    <?php
                    include '../db/config.php';
                    $sql = "select * from job_vacancy";
                    $result = $conn->query($sql);
                    $i = 1;
                    echo "<tr class='bg-white' style='color: #e44379'>";
                    echo "<th>" . 'No' . "</th>";
                    echo "<th>" . 'Vacancy' . "</th>";
                    echo "<th>" . 'Description'  . "</th>";
                    // echo "<th>" . 'Image' . "</th>";
                    echo "<th>" . 'Action' . "</th>";
                    echo "</tr>";
                    ?>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "</tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . $row['vacancy_position'] . "</td>";
                        echo "<td>" . $row['vacancy_description'] . "</td>";
                        echo "<td>";
                        echo '<a type="button" href="view_one_vacancy.php?id=' . $row['id'] . '" class="btn-sm mx-1 mb-1" title="View Record" data-toggle="tooltip" style="background:#3d3d3d"><span><i class="text-white fa fa-file-o"></i></span></a>';
                        echo '<a type="button" href="edit_available_vacancy.php?id=' . $row['id'] . '" class="btn-sm mx-1 mb-1" title="Update Record" data-toggle="tooltip" style="background:#008b8b"><span><i class="fa fa-pencil-square-o text-white"></i></span></a>';
                        echo '<a type="button" href="../db/delete_vacancy.php?id=' . $row['id'] . '"  class="btn-sm mx-1" title="Delete Record" data-toggle="tooltip" style="background:#ff4242"><span><i class="text-white fa fa-trash-o"></i></span></a>';
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