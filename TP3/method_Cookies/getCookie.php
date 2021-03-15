<!--AMSE PHP TP3 Fan_FEI-->
<?php
    if(isset($_COOKIE["usercss"])) {
        setcookie("usercss", "", time() - 10);
    }
    $user_css = $_POST["css"];
    setcookie("usercss", $user_css, time() + 3600);
    echo $_COOKIE["usercss"];

    header("location: index.php");
?>