<!--AMSE PHP TP2 Fan_FEI-->
<!-- <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="cv.php">CV</a></li>
    <li><a href="hobbies.php">Hobbies</a></li>
    <li><a href="ex2.php">TP2-ex2</a></li>
</ul> -->

<?php
function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        //'index' => array('Index'),
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'projets' => array('Mes Projets'),
        'ex2' => array('TP2-ex2')
    );
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo "<li><a id='currentpage' href='http://localhost/tp2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href='http://localhost/tp2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        }
    }
    echo "</ul>";
}
?>