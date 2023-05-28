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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Italianno&family=La+Belle+Aurore&family=Monsieur+La+Doulaise&family=Moon+Dance&family=Parisienne&family=Tangerine&display=swap"
        rel="stylesheet">
    <script src="js/index.js"></script>
    <link href="css/index.css" rel="stylesheet">
    <title>DAILYBLOG</title>
</head>

<body>

    <div class="offcanvas offcanvas-start" id="democanva">
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
                        <a class="nav-link mt-3" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <nav>
        <ul class="nav fixed-top bg-light">
            <div class="logo">
                <a href="index.php" class="logo text-dark">DAILY BLOG</a>
            </div>
            <li class="nav-item">
                <button class="btn menu text-dark font-weight-bold" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#democanva">
                    <i class="fas fa-bars"></i> MENU
                </button>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-dark font-weight-bold" href="index.php">HOME</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-dark font-weight-bold" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="blog.php" id="navbarDropdown "
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">BLOG</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="blog.php?theme=food">Recipes</a></li>
                        <li><a class="dropdown-item" href="blog.php?theme=travel">Travel</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-dark font-weight-bold" href="contact.php">CONTACT</a>
            </li>
        </ul>
    </nav>

    <div id="demo" class="carousel slide overflow-hidden" data-bs-ride="carousel" data-bs-interval="2000">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="d-block w-100" autoplay loop muted>
                        <source src="images/banner1.mp4" type="video/mp4">
                    </video>
                    <a href="index.php" class="carousel-caption">DailyBlog</a>
                </div>
                <div class="carousel-item">
                    <video class="d-block w-100" autoplay loop muted>
                        <source src="images/banner2.mp4" type="video/mp4">
                    </video>
                    <a href="index.php" class="carousel-caption">DailyBlog</a>
                </div>
            </div>
        </div>
    </div>

    <div class="imggroup-container">
        <div class="row">
            <div class="col">
                <div class="img-container">
                    <img src="images/img1.jpg" alt="food" class="imggroup1">
                    <div class="img-overlay">
                        <h2 class="img-caption">Traditional Food</h2>
                    </div>
                </div>
                <div class="img-container">
                    <img src="images/img5.jpg" alt="food" class="imggroup1">
                    <div class="img-overlay">
                        <h2 class="img-caption">Street Food</h2>
                    </div>
                </div>
            </div>
            <div class="col">
                <h1 class="head-img">Recipes</h1>
                <i class="falfa-hat-chef"></i>
                <p class="desc-img1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nam, ab delectus
                    eligendi atque odio eos cum facilis debitis culpa iure nisi perspiciatis! Voluptate sit pariatur
                    atque, modi nam asperiores?</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="img-container">
                    <img src="images/img3.jpg" alt="food" class="imggroup1">
                    <div class="img-overlay">
                        <h2 class="img-caption">Delicious Food</h2>
                    </div>
                </div>
                <div class="img-container">
                    <img src="images/img12.jpg" alt="food" class="imggroup1">
                    <div class="img-overlay">
                        <h2 class="img-caption">Healthy Food</h2>
                    </div>
                </div>
            </div>
            <div class="col">
                <p class="desc-img1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nam, ab delectus
                    eligendi atque odio eos cum facilis debitis culpa iure nisi perspiciatis! Voluptate sit pariatur
                    atque, modi nam asperiores?</p>
            </div>
        </div>

        <div class="img-container-banner">
            <img src="images/recipes.png" alt="My Image" class="img-layer">
            <div class="img-overlay-banner">
                <button class="img-button text-white"><a href="blogs.php?theme=food"><b>Discover our
                            Recipes</b></a></button>
            </div>
        </div>

        <div class="imggroup-container">
            <div class="row">
                <div class="col">
                    <h1 class="head-img2">Trips</h1>
                    <p class="desc-img2">Here where you can find variety of food recipes that will make your life
                        easier and live different feelings throught different recipes,Here where you can find
                        variety of food recipes that will make your life
                        easier and live different feelings throught different recipes </p>
                </div>
                <div class="col ">
                    <div class="img-container">
                        <img src="images/img1.jpg" alt="food" class="imggroup1">
                        <div class="img-overlay">
                            <h2 class="img-caption">Traditional Food</h2>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="images/img1.jpg" alt="food" class="imggroup1">
                        <div class="img-overlay">
                            <h2 class="img-caption">Traditional Food</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-container-banner">
                <img src="images/img10.jpg" alt="My Image" class="img-layer">
                <div class="img-overlay-banner">
                    <button class="img-button"><a href="blogs.php?theme=travel">Discover our Trips</a></button>
                </div>
            </div>
            <h3 class="trends text-center"><i class="fa fa-newspaper fa-spin fa-sm color"></i> Decouvrer les differents sujet avec DailyBlog</h3>
            <?php
require('connection.php');
$req1 = "SELECT * FROM article";
$res1 = $con->query($req1);
echo '<div class="container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="scrolling-container">';

while ($row = $res1->fetch_assoc()) {
    $title = $row['title'];
    $image = $row['image'];
    $description = $row['description'];
    $date = $row['date'];
    $idauteur = $row['id_auteur'];
    $req2 = "SELECT nom FROM auteur WHERE id = $idauteur";
    $res2 = $con->query($req2);
    $row = $res2->fetch_assoc();
    $nom = $row['nom'];

    echo '<div class="photo-container">
            <div class="card">
                <img src="' . $image . '"  alt="images">
                    <p class="text-wrap addit "><a href="" class="title"><b>' . $title . '</b></a> By <a href="" class="nom">' . $nom . '</a> </p>
                    <p class="text-wrap description">' . $description . '</p>
                    <p class="date"> ' . $date . '</p>
                    <button class="read-more"><a> Read more </a></button>
                    </div>
        </div>';
}

echo '          </div>
            </div>
        </div>
    </div>
</div>';
?>
            <footer class="bg-dark text-white text-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="list-inline m-4">
                                <li class="d-inline-block fb m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline-block tw  m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="d-inline-block pintr  m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-pinterest-p"></i></a></li>
                                <li class="d-inline-block insta  m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="d-inline-block gg  m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-google"></i></a></li>
                                <li class="d-inline-block ytb  m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li class="d-inline-block in  m-2"><a class="nav-link" href="#"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <ul class="list-inline ">
                                <li class="list-inline-item"><a class="nav-link" href="#">HOME</a></li>
                                <li class="list-inline-item"><a class="nav-link" href="#">ABOUT</a></li>
                                <li class="list-inline-item"><a class="nav-link" href="#">ENTERTAINMENT</a></li>
                                <li class="list-inline-item"><a class="nav-link" href="#">CONTACT</a></li>
                            </ul>
                            <p>© 2018 DAILYBLOG</p>
                        </div>
                    </div>
                </div>
            </footer>


</body>

</html>