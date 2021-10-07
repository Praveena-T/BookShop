<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$param_id = $_GET['id'];
$sql = "SELECT * FROM shop_service where id = $param_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row_ = $result->fetch_assoc()) {
        $service_ = $row_['service'];
        $description_ = $row_['description'];
        $service_image_ = $row_['service_image'];
    }
}
?>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="card mb-3 shadow p-1 bg-white rounded">
                <div class="row g-0">
                    <div class="col-4 bg-dark ">
                        <img src="..." class="mg-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $service_ ?></h5>
                            <p class="card-text">Description&nbsp;:<?php echo $description_ ?></p>
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