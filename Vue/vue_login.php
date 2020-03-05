<?php
ob_start();
$titre = "Page de connexion";
?>
<section class="sample-text-area">
    <div class="container">
    <div class="section-top-border">
        <div class="row">
        <div class="col-md-4">
            <h3 class="mb-30">Formulaire de connexion</h3>
            <form method="POST" action="index.php?action=vue_login>
                <div class="mt-10">
                    <input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
                </div>
                <div class="mt-15">
                    <input class="btn" type="submit" value="Connexion">
                </div>
            </form>
        </div>
            <div class="col-md-2"></div>
        <div class="col-md-6">
            <h3 class="mb-30">Formulaire d'inscription</h3>
            <form method="POST" action="index.php?action=vue_inscription>
                <div class="mt-10">
                    <input type="text" name="first_name" placeholder="Prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="last_name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="email" name="EMAIL" placeholder="Adresse Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="first_name" placeholder="Nom d'utilisateur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
                </div>
                <div class="mt-10">
                    <input type="text" name="first_name" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
                </div>
                <div class="mt-10">
                    <input type="text" name="first_name" placeholder="Confirmer mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
                </div>
                <div class="mt-15">
                    <input class="btn" type="submit" value="S'inscrire">
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</section>
<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
