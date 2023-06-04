<?php


$vt_sunucu="localhost";
$vt_kullanici="u9176804_user259";
$vt_sifre="6w=j2U_9Bmv.N_T0";
$vt_adi="u9176804_db259";


$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);


if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız" .mysqli_connect_error());
}



?>
