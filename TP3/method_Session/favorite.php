<!--AMSE PHP TP3 Fan_FEI-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Votre favoris</title>
    </head>
    <body>
        <?php
            echo "<h1>";
            echo "Votre nom : " . $_SESSION["user_name"];
            echo "</h1>";
        ?>
        <nav>
            <ul>
                <li><a href="account.php">Compte</a></li>
                <li><a href="favorite.php">Favori</a></li>
                <li><a href="disconnected.php">Déconnecter</a></li>
            </ul>
        </nav>
        <?php
            echo "<b>Apple ipad mini 6</b>";
            echo "<br />";
            echo "<b>Xiaomi Electric Scooter Essential</b>";
            echo "<br />";
            echo "<b>Huawei p40 pro</b>";
            echo "<br />";
        ?>
    </body>
</html>