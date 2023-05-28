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
    <link href="css/blog.css" rel="stylesheet">
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
                        <a class="nav-link mt-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-3" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <nav>
        <ul class="nav fixed-top bg-dark">
            <div class="logo">
                <a href="index.php" class="logo text-white"><b>DAILY BLOG</b></a>
            </div>
            <li class="nav-item">
                <button class="btn menu text-white font-weight-bold" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#democanva">
                    <i class="fas fa-bars"></i> MENU
                </button>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white font-weight-bold" href="index.php">HOME</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white font-weight-bold" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link text-white font-weight-bold dropdown-toggle" href="#" id="navbarDropdown "
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">BLOG</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Recipes</a></li>
                        <li><a class="dropdown-item" href="#">Travel</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white font-weight-bold" href="contact.php">CONTACT</a>
            </li>
        </ul>
    </nav>


    <?php
require('connection.php');
$id1 = $_GET['idblog'];
$req1 = "SELECT * FROM article";
$res1 = $con->query($req1);

echo '
<section class="our-courses" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Our Popular Courses</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-courses-item owl-carousel">';

while ($row = $res1->fetch_assoc()) {
    $id2 = $row['id'];
    if ($id1 == $id2) {
        $title = $row['title'];
        $image = $row['image'];
        $description = $row['description'];
        $content = $row['content'];
        $date = $row['date'];
        $idauteur = $row['id_auteur'];
        $req2 = "SELECT nom FROM auteur WHERE id = $idauteur";
        $res2 = $con->query($req2);
        $row = $res2->fetch_assoc();
        $nom = $row['nom'];

        echo '
          <div class="item">
            <img src="' . $image . '" alt="Course One">
            <div class="down-content">
              <h4>' . $title . '</h4>
              <div class="info">
                <div class="row">
                  <div class="col-8">
                    <ul>
                      <li>'.$nom.'</li>
                      <li>'.$date.'</i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>';
    }
}

echo '
        </div>
      </div>
    </div>
  </div>
</section>';
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