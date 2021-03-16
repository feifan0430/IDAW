<!--AMSE PHP TP3 Fan_FEI-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, "idaw_user");

    $sql = "SELECT * FROM Users";
    $getUsers = mysqli_query($con, $sql);
    echo "<table border='1'><caption><b>All existing accounts</b></caption><tr><th>ID</th><th>User Name</th><th>Password</th><th>Pseudo</th></tr>";
    while($row = mysqli_fetch_array($getUsers, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Login'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['pseudo'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br/>";

    echo "<b>You can now create a new account. <a href = 'pre_inscription.php'>Create now!</a></b>";

    mysqli_close($con);

?>