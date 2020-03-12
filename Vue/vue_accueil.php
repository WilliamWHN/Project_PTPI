<?php
ob_start();
?>
<?php
$contenuaccueil = ob_get_clean();
require "gabaritaccueil.php";
