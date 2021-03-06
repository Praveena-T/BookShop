<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact_us.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/books.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/book_form.css">
    <link rel="stylesheet" href="../css/show_vacancy_main.css">

    <!-- owl carousel link 
        -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- mdb -->
    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" /> -->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" /> -->

    <!-- sweet alert -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container-responsive">
        <!-- nav start -->
        <nav class="navbar navbar-expand-lg px-5 py-4">
            <div class="container-fluid">
                <a class="navbar-brand header-name text-dark" href="#">Online Books</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-lg-auto me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="../user/home.php">Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="../user/books.php">Books</a>
                        </li>
                        <li class="nav-item dropdown">
                            <select class="form-select form-select mb-3 input-txt" aria-label=".form-select example" name="genre" id="genre" style="border:none; outline:0px; scroll-behavior: smooth;">
                                <option class="nav-link">Category</option>
                                <?php
                                include '../db/config.php';
                                $fetch_book_genre = "SELECT * FROM book_genres";
                                $result_fetch_book_genre = mysqli_query($conn, $fetch_book_genre);
                                while ($genre = mysqli_fetch_array($result_fetch_book_genre)) :; ?>
                                    <option value="<?php echo $genre[1]; ?>">
                                        <?php echo $genre[1]; ?> </option>
                                <?php endwhile;
                                ?>
                            </select>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="../user/services.php">Services</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="../user/about_us.php">About Us</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="../contact_us/add_contact_us.php">Contact Us</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="../vacancy/show_vacancy_main.php">Vacancy</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="btn btn-warning nav-link" href="../register/login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>