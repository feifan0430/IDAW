<!--AMSE PHP TP3 Fan_FEI-->
<?php
    unset($_SESSION["user_name"]);
    session_destroy();
    header("Location: index.php");
?>