<?php
require "baglan.php";


if(isset($_POST['giris'])){
    
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    if(!$email){
        echo " e-mail girin.";
    }elseif(!$sifre){
        echo "yanlış sifre";
    }else{
        $kullanici_sor = $db->prepare('SELECT *  FROM admin WHERE email = ? && sifre = ? ');
        $kullanici_sor->execute([
            $email, $sifre
        ]);
        $say = $kullanici_sor->rowCount();
        if($say==1){
            
            $_SESSION['email']=$email;
            header('refresh:0;admin.php');
        
        }else{
            echo " bir hata oluştu";
            header('location:giris.php');
            
        }
    }
}


