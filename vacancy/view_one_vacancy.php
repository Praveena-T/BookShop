<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$param_id = $_GET['id'];
$sql = "SELECT * FROM job_vacancy where id = $param_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row_ = $result->fetch_assoc()) {
        $vacancy_position_ = $row_['vacancy_position'];
        $vacancy_description_ = $row_['description'];
        $vacancy_image_ = $row_['vacancy_image'];
    }
}
?>
<nav class="container" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../Admin/dashboard.php"><span class="badge bg-dark">Dashboard</span></a></li>
        <li class="breadcrumb-item"><a href="./view_table_vacancy.php"><span class="badge bg-dark">View Vacancy</span></a></li>
        <li class="breadcrumb-item active" aria-current="page"><span class="badge bg-secondary">View One Vacancy</span></li>
    </ol>
</nav>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="card mb-3 shadow p-1 bg-white rounded">
                <div class="row g-0">
                    <div class="col-4 bg-dark ">
                        <img src="<?php echo $vacancy_image_ ?>" />
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $vacancy_position_ ?></h5>
                            <p class="card-text">Description&nbsp;:<?php echo $vacancy_description_ ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
<?php
include '../includes/footer.php';
?>