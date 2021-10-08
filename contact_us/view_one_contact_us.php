<?php
include '../Admin/side_nav.php';
include '../db/config.php';

$param_id = $_GET['id'];
$sql = "SELECT * FROM contact_us where id = $param_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row_ = $result->fetch_assoc()) {
        $contact_name_ = $row_['name'];
        $contact_email_ = $row_['email'];
        $contact_comment_ = $row_['comment'];
    }
}
?>
<div class="container-responsive">
    <div class="row text-left">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-5">
            <div class="card mb-3 shadow p-3 bg-white rounded">
                <div class="row g-1">
                    <p class="fw-normal"><strong class="text-italic">Name&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo $contact_name_ ?></p>
                    <p class="fw-normal"><strong class="text-italic">Email&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><?php echo $contact_email_ ?></p>
                    <p class="fw-normal"><strong class="text-italic">Comment:&nbsp;</strong><?php echo $contact_comment_ ?></p>
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