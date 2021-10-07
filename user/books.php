<?php
include '../includes/header.php';
include '../db/config.php';
$sql = "select * from book";
$result = $conn->query($sql);

?>
<style>
    .owl-carousel .item {
        height: 20rem;
        background: var(--dark-color);
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 70px;
        margin: 5px;
        color: #fff;
    }

    img {
        width: 100%;
        height: 100%;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<div class="jumbotron jumbotron-fluid">
    <div class="row">
        <div class="jumbotron-head">
            <div class="card jumbotron-head" style="background: #252325; border: none;">
                <h1 class="display-5 text-center">Purchase your books.</h1>
                <h2 class="lead_ text-center mt-3">Available categories</h2>
                <div class="mt-4">
                    <center>
                        <a class="book-link mx-2">New Arrivals</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-3">
    <h3 class="mt-5 pt-4">Offers</h3>
    <div class=" owl-carousel owl-theme" id="offer-container">

        <?php

        while ($row = $result->fetch_assoc()) {
            echo '<div class="bg-white rounded shadow-sm p-0 mb-2">';
            echo '<div class="item shadow-sm p-3 mb-0 bg-white rounded">';
            echo '<img src="https://th.bing.com/th/id/OIP.og9moohwcJ-lrbSCJvnn8wHaJx?pid=ImgDet&w=193&h=254&c=7">';
            echo '</div>';
            echo '<div class=" p-3">';
            // echo "<p class='card-text text-dark'>" . $row['book_author']  . "</p>";
            echo "<p class='text-dark'>" . 'LKR. ' . $row['book_price']  . "</p>";
            echo "<a type='button' class='btn-lg mx-4'><i class='fa fa-shopping-cart' aria-hidden='true' style='color:#000000'></i></a>";
            echo "<a type='button' class='btn-lg'><i class='fa fa-gratipay text-danger' aria-hidden='true'></i></a>";
            echo '</div>';
            echo '</div>';
        }
        ?>
        <!-- <div class="item shadow-sm p-3 mb-5 bg-white rounded">
           
            <img src="https://th.bing.com/th/id/OIP.og9moohwcJ-lrbSCJvnn8wHaJx?pid=ImgDet&w=193&h=254&c=7">
        </div>

        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
       
            <img src="https://th.bing.com/th/id/OIP.ATXGSECrbkqlVWNSA5d-8QHaHg?pid=ImgDet&w=493&h=500&rs=1">

        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <img src="https://th.bing.com/th/id/OIP.aYq3nhbuJSUB9jZePi1YcwAAAA?pid=ImgDet&w=193&h=201&c=7">
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <img src="https://th.bing.com/th/id/OIP.n31CmoLT6RwyYtSX4mQxWQAAAA?pid=ImgDet&w=184&h=228&c=7">
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <img src="https://th.bing.com/th/id/OIP.niCRtVqDyTZVGWP_qDFTZwAAAA?pid=ImgDet&w=177&h=240&c=7">
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <img src="https://th.bing.com/th/id/OIP.MOnJY48D-Z8cUteH5fp_PQHaIh?pid=ImgDet&w=193&h=221&c=7">
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <h4>7</h4>
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <h4>8</h4>
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <h4>9</h4>
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <h4>10</h4>
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <h4>11</h4>
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <h4>12</h4>
        </div> -->
    </div>
</div>

<div class="container">

</div>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        // autoplay:true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<?php
include '../includes/footer.php';
?>