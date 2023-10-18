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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Anasayfa</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">Hakkında</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Ürünler</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Mağaza</a></li>
                        <li class="nav-item px-lg-4 bg">
                        <li class="nav-item px-lg-4 bg-warning"><a class="nav-link text-uppercase" href="giris.php">Giriş Yap</a></li>
                        <li class="nav-item px-lg-4 bg-warning"><a class="nav-link text-uppercase" href="kayit.php">Kayıt Ol</a></li></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                <form action="islem.php" method="POST" >
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Hoşgeldiniz</span>
                                <span class="section-heading-lower">Giriş Yapın</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                               
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    <input type="email" name="email" class="form-control mb-1" placeholder="E-mailiniz...">
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    <input type="password" name="sifre" class="form-control mb-1" placeholder="Şifreniz...">
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    
                                    <span class="ms-auto"><input type="submit" name = "giris" class="btn btn-warning  form-control mb-5" value = "Giriş Yap"></span>
                                </li>
                                
                            </p>
                        </div>
                    </div>
                  </form>
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
