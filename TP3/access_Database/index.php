<!--AMSE PHP TP3 Fan_FEI-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($servername, $username, $password);

    if (!$con) {
        die('...Could not connect: ' . mysql_error() . "<br/>");
    } else {
        echo "...Connected to MySQL Now. <br/>";
    }

    if (mysqli_query($con, "CREATE DATABASE idaw_user")) {
        echo "...Database idaw_user created.<br/>";
    } else {
        echo "...Error creating database: " . mysqli_error($con) . "<br/>";
    }

    mysqli_select_db($con, "idaw_user");
    $sql = "CREATE TABLE Users (
        id int NOT NULL AUTO_INCREMENT,
        Login varchar(15),
        Password varchar(15),
        pseudo varchar(20),
        primary key (id)
    )";
    if(mysqli_query($con, $sql)) { 
        echo "...Table Users created successfully. <br/>"; 
    } else {
        echo "...Could not create table: ". mysqli_error($con) . "<br/>"; 
    }

    $sql = "INSERT INTO Users (id, Login, Password) VALUES ('1', 'fan', 'admin')";
    mysqli_query($con, $sql);
    $sql = "INSERT INTO Users (id, Login, Password) VALUES ('2', 'fei', 'admin')";
    mysqli_query($con, $sql);
    $sql = "INSERT INTO Users (id, Login, Password) VALUES ('3', 'felix', 'admin')";
    mysqli_query($con, $sql);
    echo "...Three administrator accounts have been generated. <br/>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Access_Database</title>
    </head>
    <body>
        <p></p>
        <form id="login_form" action="connected.php" method="POST">
        <table>
            <tr>
                <th>Login :</th>
             <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Se connecter..." /></td>
            </tr>
        </table>
        </form>

        <p></p>
        <b>You can use these accounts : </b>
        <table border = "1">
            <tr>
                <th>Login</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>fan</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>fei</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>felix</td>
                <td>admin</td>
            </tr>
        </table>
    </body>
</html>