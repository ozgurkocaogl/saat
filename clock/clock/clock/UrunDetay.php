<?php 
include"baglan.php";
$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));

if($Urun->rowCount()==1)
{
	$Urun=$Urun->fetch();
	$db->query("UPDATE urun SET urun_gosterilme=(urun_gosterilme+1) WHERE urun_id=".$Urun['urun_id']);
}
else
{
	header("Location:./");
	exit;
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
                        <li class="nav-item px-lg-4"><?php if (!isset($_SESSION['oturum'])){
								?><li class="nav-item px-lg-4 bg-warning"><a class="nav-link text-uppercase" href="giris.php">Giriş Yap</a></li>
                                <li class="nav-item px-lg-4 bg-warning "><a class="nav-link text-uppercase" href="kayit.php">Kayıt Ol</a></li><?php
									}else{?><h6 class = "text-light">
									<?php
										echo $_SESSION["email"]; ?>
									</h6><li class="nav-item px-lg-4"><a href="cikis.php" class = "text-danger"><b>Çıkış Yap</b></a><br>
									<?php	} ?></li>
                    </ul>
                </div>
            </div>
        </nav>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0 text-right" src="<?php echo $Urun['resim']   ?>" alt="..." width = "50%" />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-5">
                                    <span class="section-heading-lower"><?php echo $Urun['urun_marka']   ?></span>
                                    <span class="section-heading-lower"><?php echo $Urun['urun_model']   ?></span>
                                    <span class="section-heading-upper">Adet | <?php echo $Urun['urun_stok']   ?> </span>
                                    
                                </h2>
                                <p><?php echo $Urun['urun_aciklama']   ?></p>
                                <div class="row">
                                <h2 class="section-heading mb-5 float-right" >
                                    <?php echo number_format($Urun['urun_fiyat'],2,",",".")." TL" ?>
                                    <input type="button"  class="btn btn-warning" value = "Satın Alım için ulaşın"/>
                                    </h2>
                                </div>
                                
                            </div>
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
