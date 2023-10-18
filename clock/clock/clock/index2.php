<?php 
include"baglan.php";
if (!isset($_SESSION['oturum'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Zamanın tek kanıtı saattir.</span>
                <span class="site-heading-lower">Logo</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index2.php">Anasayfa</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">Hakkında</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Ürünler</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Mağaza</a></li>
                        <li class="nav-item px-lg-4">
                        <h6 class = "text-light"><i class="flaticon-profile"></i><?php echo $_SESSION["email"] ?></h6></li>
                        <li class="nav-item px-lg-4"><a href="cikis.php" class = "text-danger"><b>Çıkış Yap</b></a><br></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro2.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Basic Clock</span>
                            <span class="section-heading-lower">Very Cool</span>
                        </h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra nulla ac purus tempor tristique. Proin luctus lacus eleifend convallis ultricies. </p>
                        <div class="intro-button mx-auto"><a href = "store.php" class="btn btn-primary btn-xl" href="#!">Hemen Satın Al</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Our Promise</span>
                                <span class="section-heading-lower">To You</span>
                            </h2>
                            <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
        <div class="container"><p class="m-0 small">Hakları Saklıdır. &copy;  2022</p></div>
            <div class="container"><a href = "#"class="m-0 small">Bize Ulaşın &copy; 02322563654</a></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
