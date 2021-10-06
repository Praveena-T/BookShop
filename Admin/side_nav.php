<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/side_nav.css" type="text/css">
    <link rel="stylesheet" href="../css/book_form.css" type="text/css">
    <link rel="stylesheet" href="../css/contact_us.css" type="text/css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- sweet alert -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>
    <!-- <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css"> -->
</head>

<body>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

        <a href="./admin_home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="./admin_services.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
        <a href="./admin_contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="./admin_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
        <a class="dropdown-btn"><i class="fa fa-fw fa-book"></i> Books
            <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-container">
            <a href="../Book/add_book.php"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
            <a href="../Book/view_book.php"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
        </div>
        <a class="dropdown-btn"><i class="fa fa-fw fa-file-text"></i> Genre
            <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-container">
            <a href="../Book/add_book.php"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
            <a href="../Book/view_book.php"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
        </div>
        <!-- <div class="btn-group dropup">
            <button type="button" class="btn btn-secondary">Action</button>
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>

        </div> -->
    </div>

    <button class="openbtn" onclick="openNav()">☰</button>
    <!-- <h2>Collapsed Sidepanel</h2>
    <p>Click on the hamburger menu/bar icon to open the sidepanel.</p> -->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "25vh";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
    <div class="container-responsive">

        <?php
        include './admin_footer.php'
        ?>