<?php
include '../includes/header.php';
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
        /* border-radius: 20px; */
        /* border: 0.1px solid var(--dark-color); */
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
                <h1 class="display-4 text-center">Purchase your books.</h1>
                <h2 class="lead_ text-center mt-3">Available categories</h2>
                <div class="mt-4">
                    <center>
                        <a class="book-link mx-2">Story</a>
                        <a class="book-link mx-2">Activity</a>
                        <a class="book-link mx-2">Drawing</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-3">
    <h3>Offers</h3>
    <div class=" owl-carousel owl-theme" id="offer-container">

        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <!-- <h4 class="text-dark bg-warning">1</h4> -->
            <img src="https://th.bing.com/th/id/OIP.og9moohwcJ-lrbSCJvnn8wHaJx?pid=ImgDet&w=193&h=254&c=7">
        </div>
        <div class="item shadow-sm p-3 mb-5 bg-white rounded">
            <!-- <h4>2</h4> -->
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
        </div>
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