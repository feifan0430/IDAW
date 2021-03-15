<!--AMSE PHP TP3 Fan_FEI-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Votre compte</title>
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
            echo "<b>Le solde de votre compte : </b><i>300 euros</i>";
            echo "<br />";
            echo "<b>Nombre de mes favoris : </b><i>3</i>";
        ?>
    </body>
</html>