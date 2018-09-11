<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php
    include "cnx.php";

    $sql = $cnx->prepare("select idCateg, nomCateg, imageCateg from categorie");
    $sql->execute();

    echo "<form action='page2.php' method='get'>";
    foreach($sql->fetchall(PDO::FETCH_ASSOC) as $ligne)
    {
        echo "<input type='radio' value='".$ligne['idCateg']."' name='categorie'>".$ligne['nomCateg']."<br>";
        echo "<img src='../".$ligne['imageCateg']."'><br>";
    }
    echo "<input type='submit' value='Afficher les jeux'>";
    echo "</form>";
    ?>
</body>
</html>