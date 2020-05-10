<?php
    $email = $_POST["email"];
    $sifre = $_POST["sifre"];
?>

<br><p style="font-size: large;margin: 20;">Başarıyla giriş yaptınız.</p></br>

<table border="1" width="500" >
    <tr>
        <td>E-posta adresiniz:</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>Şifreniz:</td>
        <td><?php echo $sifre ?></td>
    </tr>
</table>