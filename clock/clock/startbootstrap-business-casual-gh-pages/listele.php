<?php 
include"baglan.php";
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
                <span class="site-heading-lower">Admin By</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">

                       <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Siteye Dön</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="listele.php">Listele-Sil</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                <form action="ilan_ekle.php" method="POST" class="m-5" name="form1" enctype="multipart/form-data">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Admin Paneli</span>
                                <span class="section-heading-lower">İlan Listeleme-Silme</span>
                            </h2>
                            <ul class="list-unstyled ">
                            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Ürün İD</th>
                  <th>Ürün marka</th>
                  <th>Ürün Model</th>
                  <th>Adet</th>
                  <th>Fiyat</th>
                  <th>Açıklama</th>
                  <th>Sil</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                            <?php 
                $Urunler=$db->query("SELECT * FROM urun ORDER BY urun_id");

                while($Urun=$Urunler->fetch())
                {
                  $IndirimliFiyat="";
                  if($Urun['urun_indirim']>0)
                  {
                    $IndirimliFiyat=$Urun['urun_fiyat']-($Urun['urun_fiyat']*$Urun['urun_indirim']/100);
                    $IndirimliFiyat="<br>".number_format($IndirimliFiyat,2,",",".")." TL";
                  }
                  $Urun['urun_fiyat']=number_format($Urun['urun_fiyat'],2,",",".")." TL";

                  if($Urun['urun_indirim']>0)
                  {
                    $Urun['urun_fiyat']="<del>".$Urun['urun_fiyat']."</del>";
                  }
                  ?>
                  <tr>
                  <td><?php echo $Urun['urun_id'] ?></td>
                    <td><?php echo $Urun['urun_marka'] ?></td>
                    <td style="text-align: right;"><?php echo $Urun['urun_model'] ?></td>
                    <td><?php echo $Urun['urun_stok'] ?></td>
                    <td><?php echo $Urun['urun_fiyat'] ?></td>
                    <td><?php echo $Urun['urun_aciklama'] ?></td>
                    
                    <td><a href="urun_sil.php?id=<?php echo $Urun['urun_id'] ?>"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php 
                }
                ?>
                </tbody>
            </table>
                                
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
