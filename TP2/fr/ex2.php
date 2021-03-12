<!--AMSE PHP TP2 Fan_FEI-->
<?php
require_once "template_header.php"
?>
        <!-- <div id="header">
            <h1>IDAW TP2-ex2 Fan_FEI</h1>
        </div> -->

        <!-- <div id="nav">
            <?php
            require_once "template_menu.php";
            renderMenuToHTML('ex2','fr');
            ?>
        </div> -->

        <div id="section">
            <h2>TP2-Ex2</h2>
            <p>
            <?php
            echo "Aujourd'hui c'est " . date("Y/m/d");
            echo "<br/>";
            echo "Aujourd'hui c'est " . date("Y.m.d");
            echo "<br/>";
            echo "Aujourd'hui c'est " . date("Y-m-d");
            echo "<br/>";
            echo "<hr/>";

            function showTime() {
                echo "Maintenant c'est " . date("h:i:sa");
                echo "<br/>";
            }
            showTime();
            echo "<hr/>";

            $myBirthday = array("1998", "04", "30");
            echo "Mon anniversaire est " . $myBirthday[2] . "/" . $myBirthday[1] . "/" . $myBirthday[0] . ".";
            ?>
            </p>
        </div>

<?php
require_once "template_footer.php"
?>
