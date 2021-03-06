<!--AMSE PHP TP2 Fan_FEI-->
<?php
function renderMenuToHTML($currentPageId, $currentLanguage) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'projets' => array('Mes Projets'),
        'ex2' => array('TP2-ex2')
    );
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo "<li><a id='currentpage' href='http://localhost/tp2/index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href='http://localhost/tp2/index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
        }
    }
    if ($currentLanguage == "en") {
        echo "<li><a href='http://localhost/tp2/index.php?page=" . $currentPageId . "&lang=fr'>fr</a></li>";
    } else {
        echo "<li><a href='http://localhost/tp2/index.php?page=" . $currentPageId . "&lang=en'>en</a></li>";
    }
    echo "</ul>";
}
?>