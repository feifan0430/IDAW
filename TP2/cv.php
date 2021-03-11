<!--AMSE PHP TP2 Fan_FEI-->
<?php
require_once "template_header.php"
?>
        <div id="header">
            <h1>CV</h1>
        </div>

        <div id="nav">
            <?php
            require_once "template_menu.php";
            renderMenuToHTML('cv');
            ?>
        </div>

        <div id="section">
            <h2>
                Fan FEI
                <img src="images/feifan.jpg" alt="Fan_FEI" align="right" height="130px">
            </h2>
            <p>
                <b>Tel : </b>(+33) 07 63 71 30 64 
                <br />
                <b>E-mail : </b>fan.fei@etu.imt-lille-douai.fr
                <br /> 
                <b>Adresse : </b>Résidence Condorcet, 27 place de Mons, Douai 59500
            </p>
            <hr / color="brown">
            <h3>
                Formation
            </h3>
            <p>
                <b>IMT Lille Douai</b> <i>sept. 2020 – présent</i>
                <br />
                <b>Xidian Université</b> <i>août 2016 – juin 2020</i>
                <br />
                <b>Collège affilié à l'Université normale d'Anhui</b> <i>août 2013 - juin 2016</i>
            </p>
            <hr / color="brown">
            <h3>
                Expériences Professionnelles
            </h3>
            <p>
                <b>Shanghai Degaen Entreprises Co., Ltd</b> <i>juil. 2019 - août 2019</i>
            </p>
        </div>

<?php
require_once "template_footer.php"
?>
