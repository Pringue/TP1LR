<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../JS/mesFonctions.js"></script>
    <script src="../JQuery/jquery-3.1.1.js"></script>
    <script>
    
    $
    (
        function()
        {
            $("#btnJeux").click(AfficherLesJeux);
        }
    );
    </script>
</head>
<body>
    <?php
    include "cnx.php";

    $sql = $cnx->prepare("select idCateg, nomCateg, imageCateg from categorie");
    $sql->execute();

    foreach($sql->fetchall(PDO::FETCH_ASSOC) as $ligne)
    {
        echo "<input type='radio' value='".$ligne['idCateg']."' name='categorie'>".$ligne['nomCateg']."<br>";
        echo "<img src='../".$ligne['imageCateg']."'><br>";
    }
    echo "<input type='button' id='btnJeux' value='Afficher les jeux'>";
    ?>
    <div id="lesJeux"></div>
</body>
</html>