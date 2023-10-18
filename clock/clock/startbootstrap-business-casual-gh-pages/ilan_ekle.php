<?php
require "baglan.php";

 if($_POST){
    if ($_FILES["resim"]["size"]<2048*2048){//Dosya boyutu  aldık ve 1Mb'tan az olmasını söyledik.
        if ($_FILES["resim"]["type"]=="image/jpeg"){
            
            $urun_marka       =     $_POST["urun_marka"];
            $urun_aciklama    =     $_POST["urun_aciklama"];
            $urun_fiyat       =     $_POST["urun_fiyat"];
            $urun_stok        =     $_POST["urun_stok"];
            $urun_model       =     $_POST["urun_model"];
            $dosya_adi        =     $_FILES["resim"]["name"];

            $uret=array("as","rt","ty","yu","fg");
            $uzanti=substr($dosya_adi,-4,4);
            $sayi_tut=rand(1,10000);
            $yeni_ad="resimler /".$uret[rand(0,4)].$sayi_tut.$uzanti;
            if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad))
            {echo 'Dosya başarıyla yüklendi.';

                $sorgu = $db->prepare("INSERT INTO urun SET 
                urun_marka=:urun_marka,
                resim=:resim,
                urun_model=:urun_model,
                urun_aciklama=:urun_aciklama,
                urun_fiyat =:urun_fiyat,
                urun_stok=:urun_stok");  

                $sorgu->execute(array(
                    
                    ':resim'=> $yeni_ad,
                    ':urun_aciklama'=>$urun_aciklama,
                    ':urun_fiyat'=>$urun_fiyat,
                    ':urun_model'=>$urun_model,
                    ':urun_stok'=>$urun_stok,
                    ':urun_marka'=>$urun_marka
                    ));    
                
                if ($sorgu)
                {header("location:admin.php");
                    }
                else{echo 'Kayıt sırasında hata oluştu!';}
            }}}}
?>