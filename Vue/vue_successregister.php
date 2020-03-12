<?php
ob_start();
$titre = "Page de connexion";
?>
<section class="sample-text-area">
    <div class="container">
        <h3 class="mb-30">Vous avez réussi à vous inscrire</h3>
    </div>
</section>
<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
