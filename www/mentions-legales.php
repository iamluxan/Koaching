<?php require_once ('config/config.php'); ?>
<!doctype html>
<html class="is-loading" lang="fr" data-page="mentions-legales">
<head>
    <meta charset="utf-8">
    <title>Mentions légales</title>
    <meta name="description" content="Mentions légales du site Koaching.fr">
    <?php include ('templates/headers.php'); ?>
</head>

<body data-module-load>
    <div class="c-loader"></div>
    <div class="c-spinner -circle"></div>
    <div data-load-container>
        <div data-module-scroll="main">
            <header>
                <?php include ('templates/header.php'); ?>
            </header>
            <?php include ('templates/menu.php'); ?>
            <div class="c-page-head || u-margin-top-lg u-margin-bottom-lg"
                 data-scroll
                 data-scroll-repeat>
                <div class="o-container -lg">
                    <div class="c-page-head_content u-anim-scroll-parent" data-scroll data-module-contact>
                        <div class="c-page-head_title">
                            <h1 class="c-heading -h1 || u-anim-scroll -parent">Mentions légales</h1>
                        </div>
                        <div class="c-page-head_intro">
                            <div class="c-text -large u-anim-scroll -delay-2 is-inview">
                                En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site nextad.fr l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-container">

                <div class="u-margin-top-lg u-margin-bottom-lg">
                    <div class="o-grid -col-2 -gutters">
                        <div class="o-grid_item u-gc-1/2@from-xs"><strong>Propriétaire</strong></div>
                        <div class="o-grid_item u-gc-2/2@from-xs">Karim Ourabah<br>Siret: 939292355</div>
                        <div class="o-grid_item u-gc-1/2@from-xs"><strong>Directeur de la publication</strong></div>
                        <div class="o-grid_item u-gc-2/2@from-xs">Karim Ourabah</div>
                        <div class="o-grid_item u-gc-1/2@from-xs"><strong>Hébergeur</strong></div>
                        <div class="o-grid_item u-gc-2/2@from-xs">OVH SAS<br>2 rue Kellermann<br>59100 Roubaix</div>
                        <div class="o-grid_item u-gc-1/2@from-xs"><strong>Crédits</strong></div>
                        <div class="o-grid_item u-gc-2/2@from-xs">Conception.<br>Création graphique.<br>Contenu Karim Ourabah.</div>
                    </div>
                </div>
            </div>
            <?php include ('templates/footer.php'); ?>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfnQG4qAAAAAHlspyHFi7Pg6Q974ZzHCiFP8-PB"></script>
    <script src="<?=DIR_JS?>vendors.js?<?=V_ASSETS?>" defer></script>
    <script src="<?=DIR_JS?>app.js?<?=V_ASSETS?>" defer></script>
</body>

</html>
