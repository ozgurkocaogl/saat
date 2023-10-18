<?php
require "baglan.php";



if(isset($_POST['kaydet'])){
    $name = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    if(!$name){
        echo "lütfen adınızı giriniz";
    }elseif(!$soyad){
        echo "lütfen soyadınızı giriniz";
    }elseif(!$email){
        echo "lütfen emailinizi giriniz";
    }elseif(!$sifre){
        echo "lütfen sifrenizi giriniz";

    
}else{
    //veri tabanına kayıt işlemi
    $sorgu = $db->prepare('INSERT INTO giris SET ad = ? ,soyad = ?,
    email = ?,sifre = ? ');
    $ekle = $sorgu->execute([
        $name, $soyad, $email, $sifre
    ]);
    if($ekle){
        echo "kayıt başarılı";
        header ('location:giris.php');
    }else{
        echo "bir hata oluştu";
    }


    }
}

if(isset($_POST['giris'])){
    
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    if(!$email){
        echo " e-mail girin.";
    }elseif(!$sifre){
        echo "yanlış sifre";
    }else{
        $kullanici_sor = $db->prepare('SELECT *  FROM giris WHERE email = ? && sifre = ? ');
        $kullanici_sor->execute([
            $email, $sifre
        ]);
        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['oturum']=TRUE;
            $_SESSION['email']=$email;
            header('refresh:0;index2.php');
        
        }else{
            echo " bir hata oluştu";
            header('location:giris.php');
            
        }
    }
}


