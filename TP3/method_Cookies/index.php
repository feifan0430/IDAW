<!--AMSE PHP TP3 Fan_FEI-->
<?php
    if(isset($_COOKIE["usercss"])) {
        setcookie("usercss", "", time() - 10);
        setcookie("usercss", "css_default", time() + 3600);
    } else {
        setcookie("usercss", "css_default", time() + 3600);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            if(isset($_COOKIE["usercss"])) {
                $stylesheetname = "'" . $_COOKIE["usercss"] . ".css'";
            } else {
                $stylesheetname = "'css_default.css'";
            }
            echo "<link rel='stylesheet' href=" . $stylesheetname .">";
        ?>
        <title>TP3 Fan FEI</title>
    </head>
    <body>
        <form id="style_form" action="getCookie.php" method="POST">
            <select name="css">
                <option value="yellow">Yellow</option>
                <option value="blue">Blue</option>
                <option value="css_default">Default</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>

        <div id="cssfile">
        <?php
            if(isset($_COOKIE["usercss"])) {
                echo "We now use the .css file : " . $_COOKIE["usercss"] .".css";
            } else {
                echo "We now use the .css file : css_default.css";
            }
        ?>
        </div>

        <div id="footer">
            Copyright © fan.fei@etu.imt-lille-douai.fr
        </div>
    </body>
</html>