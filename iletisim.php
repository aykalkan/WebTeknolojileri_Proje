<?php
    $email = $_POST["email"];
    $isim = $_POST["isim"];
    $cinsiyet = $_POST["cinsiyet"]=="e" ? "Erkek":"Kadın";
    $sebep = $_POST["sebep"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    
    $secili_sayfalar = " ";
    if(empty($_POST["sayfa"])) 
    {
      $secili_sayfalar = "Herhangi bir sayfa dolaşmamışsınız.";
    } 
    else 
    {
        foreach($_POST["sayfa"] as $s)
        {
            $secili_sayfalar .= $s.", ";
        }
        $secili_sayfalar = substr($secili_sayfalar, 0, -2);

    }

    $secili_sebep=" ";
    switch ($sebep) {
        case '0':
            $secili_sebep = "Teşekkür";
            break;
        
        case '1':
            $secili_sebep = "Şikayet";
            break;
        
        case '2':
            $secili_sebep = "Hal hatır sorma";
            break;
        
        case '3':
            $secili_sebep = "İş";
            break;
        
        case '4':
            $secili_sebep = "Diğer";
            break;
        
        default:
            break;
    }


?>

<br><p style="font-size: large;margin: 20;">Mesajınız başarıyla alındı. En kısa zamanda dönüş yapılacaktır.</p></br>

<table border="1" width="500">
    <tr>
        <td>Adınız:</td>
        <td><?php echo $isim ?></td>
    </tr>
    <tr>
        <td>E-postanız:</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>Cinsiyet:</td>
        <td><?php echo $cinsiyet ?></td>
    </tr>
    <tr>
        <td>Gezdiğiniz sayfalar:</td>
        <td><?php echo $secili_sayfalar ?></td>
    </tr>
    <tr>
        <td>İletişim sebebiniz:</td>
        <td><?php echo $secili_sebep ?></td>
    </tr>
    <tr>
        <td>Konu:</td>
        <td><?php echo $konu ?></td>
    </tr>
    <tr>
        <td>Mesajınız:</td>
        <td><?php echo $mesaj ?></td>
    </tr>
</table>

<br>

<a href="iletisim.html">Siteye geri dön</a>