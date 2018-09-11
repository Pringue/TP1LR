<?php
    include "cnx.php";
    $sql = $cnx->prepare("select nomJeux, imageJeux from jeux where numCateg=".$_GET["categorie"]);
    $sql->execute();

    foreach($sql->fetchall(PDO::FETCH_NUM) as $ligne)
        echo $ligne[0]."<br><img src='../".$ligne[1]."'><br>";
    ?>