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
            renderMenuToHTML('projets','fr');
            ?>
        </div> -->

        <div id="section">
            <h2>
                <img src="images/IMT_Lille_Douai_Logo_WEB.png" alt="IMT_Lille_Douai_Logo" align="right" height="130px">
                HTML / CSS / PHP
            </h2>
            <p>
                <b>index.php</b> constitue la page point d'entrée du site.
                <br/>
                <b>cv.php</b> est une page détaillant votre cv.
                <br/>
                <b>projets.php</b> est une page détaillant vos projets (ouverts, associations, ...).
                <br/>
                <b>ex2.php</b> est le dossier de l'exercice deux.
            </p>
            <p>
                
            </p>
            <p> 
                <b>template_header.php</b> contient du code PHP factorisant l’en-tête de toutes vos pages.
                <br/>
                <b>template_footer.php</b> contient du code PHP factorisant le bas de page de toutes vos pages.
                <br/>
                <b>template_menu.php</b> contient du code PHP (dont la fonction renderMenuToHTML) permettant de générer le menu pour toutes vos pages Web.
            </p>
        </div>

<?php
require_once "template_footer.php"
?>