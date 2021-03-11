<!DOCTYPE html>
<html>
<body>
    <h1>TP2 index.php</h1>

    <?php

    echo "Today is " . date("Y/m/d");
    echo "<br/>";
    echo "Today is " . date("Y.m.d");
    echo "<br/>";
    echo "Today is " . date("Y-m-d");
    echo "<br/>";
    echo "<hr/>";

    function showTime() {
        echo "Now is " . date("h:i:sa");
        echo "<br/>";
    }
    showTime();
    echo "<hr/>";

    $myBirthday = array("1998", "04", "30");
    echo "My birthday is " . $myBirthday[2] . "/" . $myBirthday[1] . "/" . $myBirthday[0] . ".";

    ?>

</body>
</html>