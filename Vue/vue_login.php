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
                    <!-- Formulaire de login START -->
                    <form method="POST" action="index.php?action=vue_login">
                        <div class="mt-10">
                            <input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Username'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" placeholder="Password"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Password'" required class="single-input">
                        </div>
                        <div class="mt-15">
                            <input class="btn" type="submit" value="Connexion">
                        </div>
                    </form>
                    <!-- Formulaire de login END -->
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <h3 class="mb-30">Formulaire d'inscription</h3>
                    <!-- Formulaire d'inscription START' -->
                    <form method="POST" action="index.php?action=vue_inscription">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Prénom" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Prénom'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Nom" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Nom'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Adresse Email" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Adresse Email'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="username" placeholder="Username"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username" required
                                   class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" placeholder="Mot de passe"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Mot de passe'" required class="single-input-accent">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="conf_password" placeholder="Confirmer mot de passe"
                                   onfocus="this.placeholder = 'Confirmer mot de passe'" onblur="this.placeholder = 'Secondary color'"
                                   required
                                   class="single-input-secondary">
                        </div>
                        <div class="mt-15">
                            <input class="btn" type="submit" value="S'inscrire">
                        </div>
                    </form>
                    <!-- Formulaire d'inscription END -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
