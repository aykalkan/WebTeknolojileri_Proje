<?php
    
    /* Veritabanı bağlantısı */
    $link = mysqli_connect("localhost", "root")or die("Veritabanı bağlantısı kurulamadı.");

    mysqli_select_db($link,"kullanicilar") or die("Veritabanına bağlanılamadı.");

    $email = $_POST["email"];
    $sifre = $_POST["sifre"];
	
    $sorgu = "SELECT * FROM kullanici WHERE email='$email' AND sifre='$sifre'";
    $kullanici = mysqli_fetch_array(mysqli_query($link,$sorgu));

    $ogrenci_no = $kullanici["ogrenci_no"];
?>

<br><p style="font-size: large;margin: 20;">
Merhaba <?php echo $ogrenci_no ?>. 
<br>Başarıyla giriş yaptınız.
</p></br>

<table border="1" width="500" >
    <tr>
        <td>Öğrenci no:</td>
        <td><?php echo $ogrenci_no ?></td>
    </tr>
    <tr>
        <td>E-posta adresiniz:</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>Şifreniz:</td>
        <td><?php echo $sifre ?></td>
    </tr>
</table>
