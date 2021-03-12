<!--AMSE PHP TP2 Fan_FEI-->
<?php
require_once "template_header.php" ;
require_once "template_menu.php" ;
$currentPageId = 'accueil';
$currentLanguage = 'en';
if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
}
if(isset($_GET['lang'])) {
    $currentLanguage = $_GET['lang'];
}
?>
<header id="header">
    <h1>IDAW TP2 Fan_FEI</h1>
</header>

<div id="nav">
<?php
renderMenuToHTML($currentPageId, $currentLanguage);
?>
</div>

<section class="corps">

<?php
$pageToInclude = $currentLanguage . "/" . $currentPageId . ".php";
if(is_readable($pageToInclude))
    require_once($pageToInclude);
else {
    //require_once("error.php");
}
?>

</section>

<?php
require_once("template_footer.php");
?>