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
            renderMenuToHTML('ex2','en');
            ?>
        </div> -->

        <div id="section">
            <h2>TP2-Ex2</h2>
            <p>
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
            </p>
        </div>

<?php
require_once "template_footer.php"
?>
