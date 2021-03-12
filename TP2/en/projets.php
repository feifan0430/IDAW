<!--AMSE PHP TP2 Fan_FEI-->
<?php
require_once "template_header.php"
?>
        <!-- <div id="header">
            <h1>Mes Projets</h1>
        </div> -->

        <!-- <div id="nav">
            <?php
            require_once "template_menu.php";
            renderMenuToHTML('projets','en');
            ?>
        </div> -->

        <div id="section">
            <h2>
                <img src="images/IMT_Lille_Douai_Logo_WEB.png" alt="IMT_Lille_Douai_Logo" align="right" height="130px">
                HTML / CSS / PHP
            </h2>
            <p>
                <b>index.php</b> constitutes the entry point page of the site.
                <br/>
                <b>cv.php</b> is a page detailing your cv.
                <br/>
                <b>projets.php</b> is a page detailing your projects (open, associations, ...).
                <br/>
                <b>ex2.php</b> is the record of exercise two.
            </p>
            <p>
                
            </p>
            <p> 
                <b>template_header.php</b> contains PHP code factoring the headers of all your pages.
                <br/>
                <b>template_footer.php</b> contains PHP code factoring the footer of all your pages.
                <br/>
                <b>template_menu.php</b> contains PHP code (including the renderMenuToHTML function) to generate the menu for all your web pages.
            </p>
        </div>

<?php
require_once "template_footer.php"
?>