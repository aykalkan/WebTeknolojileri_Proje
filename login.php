<?php
    echo"<br>Şifre alındı</br>";
    $ad = $_POST["ad"];
    $sifre = $_POST["sifre"];
    $cinsiyet = $_POST["cinsiyet"]=="1" ? "Erkek":"Kadın";

    echo "Adınız : ".$_POST["ad"]."<br>";
    echo "Şifreniz : ".$_POST["sifre"]."<br>";
    echo ($_POST["cinsiyet"]=="1" ? "Erkek":"Kadın")."<br>";
?>

<table border="1" width="200" height="40">
    <tr>
        <td>Adınız:</td>
        <td><?php echo $ad ?></td>
    </tr>
    <tr>
        <td>Sifre:</td>
        <td><?php echo $sifre ?></td>
    </tr>
    <tr>
        <td>Cinsiyet:</td>
        <td><?php echo $cinsiyet ?></td>
    </tr>
</table>