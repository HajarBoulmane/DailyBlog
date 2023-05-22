<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap:wght@100&family=Cutive+Mono&family=Darker+Grotesque:wght@300&family=Gruppo&family=Lilita+One&family=Rajdhani:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/48e236d0cb.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>DAILYBLOG</title>
</head>

<body>
    <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <div class="offcanvas-title">
                <b>DAILY BLOG</b>
            </div>
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container  canvalist">
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3" href="#">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <nav>
        <ul class="nav bg-dark fixed-top">
            <div class="logo">
                <a href="index.php" class="logo"><b>DAILY BLOG</b></a>
            </div>
            <li class="nav-item nav1">
                <button class="btn menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                    <i class="fas fa-bars"></i> MENU
                </button>
            </li>
            <li class="nav-item nav1">
                <a class="nav-link text-white" href="index.php">HOME</a>
            </li>
            <li class="nav-item nav1">
                <a class="nav-link text-white" href="#">ABOUT</a>
            </li>
            <li class="nav-item nav1">
                <a class="nav-link text-white" href="#">BLOG</a>
            </li>
            <li class="nav-item nav1">
                <a class="nav-link text-white" href="#">CONTACT</a>
            </li>
            <li>
                <div class="search-container">
                    <input type="text" placeholder="Search">
                    <a href="#"><i class="fas fa-search"></i></a>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-sm nav2 ">
        <div class="container-fluid">
            <ul class="navbar-nav ">
                <li class="nav-item n2">
                    <a class="nav-link fb " href="#"><i class="fa-brands fa-facebook-f "></i></a>
                </li>
                <li class="nav-item n2">
                    <a class="nav-link tw" href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li class="nav-item n2">
                    <a class="nav-link pintr" href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </li>
                <li class="nav-item n2">
                    <a class="nav-link insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="nav-item n2">
                    <a class="nav-link gg" href="#"><i class="fa-brands fa-google"></i></a>
                </li>
                <li class="nav-item n2">
                    <a class="nav-link ytb" href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
                <li class="nav-item n2">
                    <a class="nav-link in" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
    </nav>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="index.php" class="carousel-caption">Daily blog</a>
                <img src="images/banner3.png" alt="banner6" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <a href="index.php" class="carousel-caption">Daily blog</a>
                <img src="images/banner2.png" alt="banner2" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <a href="index.php" class="carousel-caption">Daily blog</a>
                <img src="images/banner1.png" alt="banner3" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <div class="row">
        <div class="col text-center ">
            <div class="card-container">
                <div class="image-container">
                    <h3 class="mt-3 header"><b>Recipes</b></h3>
                    <img src="images/img5.jpg" class="imgcard" alt="images">
                </div>
                <div class="description-container">
                    <p><b>Discover new tips and recipes that will blow up your mind </b></p>
                    <button class="read-more">Read More</button>
                </div>
            </div>
        </div>
        <div class="col text-center ">
            <div class="card-container">
                <div class="image-container">
                    <h3 class="mt-3 header"><b>Travel</b></h3>
                    <img src="images/img7.jpg" class="imgcard" alt="images">
                </div>
                <div class="description-container">
                    <p><b>Discover the world </b></p>
                    <button class="read-more">Read More</button>
                </div>
            </div>
        </div>
        <div class="col text-center ">
            <div class="card-container">
                <div class="image-container">
                    <h3 class="mt-3 header"><b>Science and technology</b></h3>
                    <img src="images/img8.jpg" class="imgcard" alt="images">
                </div>
                <div class="description-container">
                    <p><b>Discover the latest technologies and science topics </b></p>
                    <button class="read-more">Read More</button>
                </div>
            </div>
        </div>
    </div>

    
    <footer class="bg-dark text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list-inline list2 ">
                        <li class="d-inline-block listicons "><a class="nav-link fb " href="#"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="d-inline-block listicons"><a class="nav-link tw" href="#"><i
                                    class="fa-brands fa-twitter"></i></a></li>
                        <li class="d-inline-block  listicons"><a class="nav-link pintr" href="#"><i
                                    class="fa-brands fa-pinterest-p"></i></a></li>
                        <li class="d-inline-block listicons"><a class="nav-link insta" href="#"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                        <li class="d-inline-block listicons"><a class="nav-link gg" href="#"><i
                                    class="fa-brands fa-google"></i></a></li>
                        <li class="d-inline-block listicons"><a class="nav-link ytb" href="#"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                        <li class="d-inline-block listicons"><a class="nav-link in" href="#"><i
                                    class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="nav-link" href="index.php">HOME</a></li>
                        <li class="list-inline-item"><a class="nav-link" href="#">ABOUT</a></li>
                        <li class="list-inline-item"><a class="nav-link" href="#">ENTERTAINMENT</a></li>
                        <li class="list-inline-item"><a class="nav-link" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>© 2018 DAILYBLOG</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>