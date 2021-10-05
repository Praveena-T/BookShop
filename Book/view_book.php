<?php
include '../Admin/side_nav.php';
include '../db/config.php';
?>
<div class="container-responsive">
    <div class="row text-center">
        <div class="col-sm-10 container">
            <table class="table table-sm table-responsive table-hover">
                <thead>
                    <?php
                    echo "<tr class='bg-white' style='color: #e44379'>";
                    echo "<th>" . 'No' . "</th>";
                    echo "<th>" . 'BID' . "</th>";
                    echo "<th>" . 'Name'  . "</th>";
                    echo "<th>" . 'Author' . "</th>";
                    echo "<th>" . 'Price' . "</th>";
                    echo "<th>" . 'Image' . "</th>";
                    echo "<th>" . 'Action' . "</th>";
                    echo "</tr>";
                    ?>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from book";
                    $result = $conn->query($sql);
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "</tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . $row['book_number'] . "</td>";
                        echo "<td>" . $row['book_name'] . "</td>";
                        echo "<td>" . $row['book_author'] . "</td>";
                        echo "<td>" . $row['book_price'] . "</td>";
                        echo "<td>" . $row['book_image'] . "</td>";
                        echo "<td>";
                        echo '<a type="button" href="view_one_book.php?id=' . $row['id'] . '" class="btn-sm btn-dark mx-1" title="View Record" data-toggle="tooltip"><span><i class="text-white fa fa-file-o"></i></span></a>';
                        echo '<a type="button" href="update_book.php?id=' . $row['id'] . '" class="btn-sm btn-primary mx-1" title="Update Record" data-toggle="tooltip"><span><i class="fa fa-pencil-square-o text-white"></i></span></a>';
                        echo '<a type="button" href="../db/delete_book.php?id=' . $row['id'] . '"  class="btn-sm btn-danger mx-1" title="Delete Record" data-toggle="tooltip"><span><i class="text-white fa fa-trash-o"></i></span></a>';
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