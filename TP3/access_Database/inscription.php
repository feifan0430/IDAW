<!--AMSE PHP TP3 Fan_FEI-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, "idaw_user");


    $sql = "INSERT INTO Users (Login, Password) VALUES ('" . $_POST['new_login'] . "', '" . $_POST['new_password'] . "')";
    mysqli_query($con, $sql);

    echo "...A new account has been generated! <br/>";
    echo "<b><a href = 'testConnexion.php'>Return!</a></b>";
?>