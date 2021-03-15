<!--AMSE PHP TP3 Fan_FEI-->
<?php
    session_start();
    $_SESSION["user_name"] = $_POST["login"];
    header("Location: account.php");
?>