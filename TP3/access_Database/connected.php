<!--AMSE PHP TP3 Fan_FEI-->
<?php
    
    $errorText = "";
    $successfullyLogged = false;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, "idaw_user");

    $sql = "SELECT * FROM Users WHERE Login='" . $_POST['login'] ."'";
    $getUsers = mysqli_query($con, $sql);
    if($row = mysqli_fetch_array($getUsers, MYSQLI_ASSOC)) {
        if($row['Password'] == $_POST['password']) {
            $successfullyLogged = true;
        } else {
            $errorText = "Erreur de password";
        }
    } else {
        $errorText = "Erreur de login";
    }

    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<b>Bienvenu ". $_POST['login'] ."</b><br/>";
        echo "You can now test your <a href = 'testConnexion.php'>testConnexion.php</a>.";
    }
    
?>