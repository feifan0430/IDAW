<!--AMSE PHP TP2 Fan_FEI-->
<ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="cv.php">CV</a></li>
    <li><a href="hobbies.php">Hobbies</a></li>
    <li><a href="ex2.php">TP2-ex2</a></li>
</ul>

<?php
function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
    // idPage titre
    'index' => array('Accueil'),
    'cv' => array('Cv'),
    'projets' => array('Mes Projets')
    );
    foreach($mymenu as $pageId => $pageParameters) {
        echo "...";
    }
}
?>