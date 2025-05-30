<?php require_once ('config/config.php'); ?>
<!doctype html>
<html class="is-loading" lang="fr" data-page="home">
<head>
    <meta charset="utf-8">
    <title>Coach Sportif dans les Landes — Koaching</title>
    <meta name="description" content="Votre coach sportif dans les Landes, Hossegor Capbreton et alentours.">
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
            <div data-scroll data-scroll-repeat data-scroll-css-progress data-scroll-offset="0%,80%" class="c-hero">
                <div class="c-hero_inner" data-scroll data-scroll-repeat>
                    <div class="o-container c-hero_container">
                        <div class="c-hero_content || u-anim-scroll-parent" data-scroll data-scroll-repeat>
                            <div class="c-heading -h1 c-hero_title || u-anim-scroll -parent -delay-1">
                                Votre coach sportif<div>dans les Landes</div>
                            </div>
                            <h1 class="c-text -large || u-anim-scroll -parent -delay-2">
                                Votre coach sportif à domicile dans les landes, Hossegor, Capbreton et alentours.
                            </h1>
                            <div class="u-anim-scroll -parent -delay-3">
                                <button class="c-button -cta" data-button="contact">
                                    <span class="c-button_bg"></span>
                                    <span class="c-button_label">Me contacter</span>
                                    <span class="c-button_icon o-icon">
                                        <svg class="svg-arrow-right" focusable="false" aria-hidden="true">
                                            <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-right"></use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="c-hero_visual || u-anim-scroll-parent" data-scroll>
                            <img src="<?=DIR_IMG?>coach-karim-oubarah.png" alt="Karim Oubarah" />
                        </div>
                    </div>
                    <div class="c-bgshape">
                        <div class="c-bgshape_inner" data-scroll data-scroll-css-progress data-scroll-repeat>
                            <svg viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                                <g fill="currentColor">
                                    <path d="m447.5 231.6c-109.1 0-197.6-88.5-197.6-197.6v-385.8h-58.6v385.8.4c.1 141.4 114.8 255.9 256.2 255.8h384.1v-58.6z"/>
                                    <path d="m34.4 189.7h-386.1v58.6h386.1c109.1 0 197.6 88.5 197.6 197.6v385.8h58.6v-385.8c0-.1 0-.3 0-.4-.1-141.4-114.8-255.9-256.2-255.8z"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-about || u-anim-scroll-parent" data-scroll data-scroll-repeat data-scroll-offset="25%, 0%">
                <div class="o-container">
                    <div class="c-about_title">
                        <h2 class="c-heading -h2 || u-anim-scroll -parent -delay-0">À propos <br>de moi...</h2>
                    </div>
                    <div class="c-about_inner || u-anim-scroll-parent">
                        <div class="c-about_visual || u-anim-scroll -parent -delay-1">
                            <div class="c-image c-lazy -border-radius" data-scroll data-scroll-speed="-.06">
                                <div class="c-image_inner">
                                    <img class="c-image_img" data-scroll data-scroll-call="lazyLoad, Scroll, main"
                                         data-src="<?=DIR_IMG?>coaching-individuel-landes.jpg?<?=V_ASSETS?>"
                                         alt="Coaching individuel"
                                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                </div>
                            </div>
                        </div>

                        <div class="c-about_text || u-anim-scroll -parent -delay-2">
                            <p class="c-heading -center -h3 || u-margin-top-lg@to-sm u-margin-top-md@from-sm"><strong>Karim Ourabah</strong></p>
                            <p class="c-text -medium || u-margin-top-md@to-sm u-margin-top-sm@from-sm">Coach sportif diplômé également en nutrition sportive, j’accompagne chacun(e) dans la réalisation de ses objectifs, qu’il s’agisse de reprendre le sport, d’améliorer ses performances, ou de développer sa masse musculaire. Mon approche est personnalisée et motivante, adaptée aux débutant(e)s comme aux sportifs / sportives expérimenté(e)s. Pour moi, le sport est un mode de vie qui apporte confiance et épanouissement.</p>
                            <p class="c-text -center -large || u-margin-top-lg@to-sm u-margin-top-md@from-sm"><strong>Diplômes</strong></p>

                            <div class="c-about_diplomas || u-margin-top-lg@to-sm u-margin-top-md@from-sm">
                                <div class="c-about_diplomas_item">
                                    <div class="o-icon">
                                        <svg class="svg-diploma" focusable="false" aria-hidden="true">
                                            <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#diploma"></use>
                                        </svg>
                                    </div>
                                    <div class="c-about_diplomas_item_label">Coach<br><i>Sportif</i></div>
                                </div>
                                <div class="c-about_diplomas_item">
                                    <div class="o-icon">
                                        <svg class="svg-diploma" focusable="false" aria-hidden="true">
                                            <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#diploma"></use>
                                        </svg>
                                    </div>
                                    <div class="c-about_diplomas_item_label">Diététique<br><i>Sportive</i></div>
                                </div>
                            </div>
                            <div class="o-layout -center">
                                <button class="c-button -cta || u-margin-top-lg@to-sm u-margin-top-md@from-sm" data-button="contact">
                                    <span class="c-button_bg"></span>
                                    <span class="c-button_label">Me contacter</span>
                                    <span class="c-button_icon o-icon">
                                        <svg class="svg-arrow-right" focusable="false" aria-hidden="true">
                                            <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-right"></use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-services" data-scroll data-scroll-repeat data-scroll-offset="25%, 0%">
                <div class="c-bgshape">
                    <div class="c-bgshape_inner" data-scroll data-scroll-css-progress data-scroll-repeat>
                        <svg fill="currentColor" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                            <path d="m447.5 231.6c-109.1 0-197.6-88.5-197.6-197.6v-385.8h-58.6v385.8.4c.1 141.4 114.8 255.9 256.2 255.8h384.1v-58.6z"/>
                            <path d="m34.4 189.7h-386.1v58.6h386.1c109.1 0 197.6 88.5 197.6 197.6v385.8h58.6v-385.8c0-.1 0-.3 0-.4-.1-141.4-114.8-255.9-256.2-255.8z"/>
                        </svg>
                    </div>
                </div>
                <div class="o-container">
                    <div class="o-grid -cols -gutters">
                        <div class="o-grid_item u-gc-1/13@to-md u-gc-1/6@from-xs || u-anim-scroll-parent" data-scroll data-scroll-repeat data-scroll-offset="25%, 0%">
                            <h2 class="c-heading -h2 || u-anim-scroll -parent -delay-0">Mes<br>services</h2>
                            <p class="c-text -subtitle || u-anim-scroll -parent -delay-1">À LA SALLE<br>COMME EN DEHORS !</p>
                            <div class="c-text -medium || u-anim-scroll -parent -delay-2">
                                <p class="u-margin-bottom-xs">Prenez soin de vous et de votre bien-être ! Vous n’avez qu’un seul corps, alors faites-moi confiance pour vous accompagner vers vos objectifs, quels qu’ils soient.</p>
                                <p>Que vous soyez débutant(e), que vous cherchiez à améliorer vos performances, à perdre du poids, à faire une prise de masse, ou simplement à rester en forme et retrouver votre vitalité, je suis là pour vous aider à chaque étape.</p>
                            </div>
                        </div>
                        <div class="o-grid_item u-gc-1/13@to-md u-gc-6/13@from-xs u-margin-top-sm@to-md">
                            <div class="c-services_activities || u-anim-scroll-parent" data-scroll data-scroll-repeat data-scroll-offset="10%, 0%">
                                <div class="c-accordion u-offset-right u-offset-left@to-medium" data-module-accordion>
                                    <div class="c-accordion_list">
                                        <?php
                                        $i = 0;
                                        foreach ($services as $service) { ?>
                                            <div class="c-accordion_item || u-anim-scroll -parent -delay-<?=$i?> -left">
                                                <button class="c-accordion_toggler" type="button" data-accordion="toggler" aria-expanded="false">
                                                    <span class="c-accordion_toggler_label"><?=$service['name']?></span>
                                                    <span class="c-accordion_toggler_icon">
                                                    <svg class="c-accordion_toggler_icon_svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path class="c-accordion_toggler_icon_svg_path -vertical" vector-effect="non-scaling-stroke" d="M8 1V15" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path class="c-accordion_toggler_icon_svg_path -horizontal" vector-effect="non-scaling-stroke" d="M1 8H15" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                </button>
                                                <div class="c-accordion_item_content">
                                                    <div class="c-accordion_item_content_inner">
                                                        <div class="c-wysiwyg">
                                                            <?php if (!empty ($service['image'])) { ?>
                                                                <div class="c-image">
                                                                    <div class="c-image_inner">
                                                                        <img class="c-image_img"
                                                                             src="<?=DIR_IMG?><?=$service['image']?>?<?=V_ASSETS?>"
                                                                             alt="<?=$service['name']?>" />
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                            <?=$service['description']?>
                                                            <button class="c-button -cta" data-button="contact">
                                                                <span class="c-button_bg"></span>
                                                                <span class="c-button_label">Me contacter</span>
                                                                <span class="c-button_icon o-icon">
                                                                <svg class="svg-arrow-right" focusable="false" aria-hidden="true">
                                                                    <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-right"></use>
                                                                </svg>
                                                            </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $i++; } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-testimonials || u-anim-scroll-parent" data-scroll data-scroll-repeat data-module-testimonials data-scroll-offset="25%, 0%">
                <div class="o-container">
                    <div class="c-testimonials_title">
                        <div class="c-heading -h2 || u-anim-scroll -parent -delay-0">Ils m’ont mis au défi<br>de les mettre au défi !</div>
                        <h2 class="c-text -subtitle || u-anim-scroll -parent -delay-1">Vos témoignages sont mes plus belles récompenses !</h2>
                    </div>

                    <div class="c-testimonials_nav || u-anim-scroll -parent -delay-2">
                        <div class="c-button -circle" data-horizontal-panel="prev">
                            <span class="c-button_label u-screen-reader-text">Précédent</span>
                            <span class="c-button_icon o-icon">
                                <svg class="svg-arrow-left" aria-label="">
                                    <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-left"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="c-button -circle" data-horizontal-panel="next">
                            <span class="c-button_label u-screen-reader-text">Suivant</span>
                            <span class="c-button_icon o-icon">
                                <svg class="svg-arrow-right" aria-label="">
                                    <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-right"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="c-testimonials_slider || swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide || u-anim-scroll -parent -delay-3">
                                <div class="c-testimonials_tile">
                                    <div class="c-testimonials_desc">
                                        Grâce à Karim, j’ai retrouvé ma motivation et ma forme physique. Il sait exactement comment vous pousser sans jamais vous décourager. C’est un coach incroyable qui vous fait sentir capable de tout !
                                    </div>
                                    <div class="c-testimonials_author">Anaïs A.</div>
                                </div>
                            </div>
                            <div class="swiper-slide || u-anim-scroll -parent -delay-4">
                                <div class="c-testimonials_tile">
                                    <div class="c-testimonials_desc">
                                        J’avais du mal à me remettre au sport après une longue pause, mais Karim a su me redonner confiance. Ses séances sont variées et dynamiques, et son énergie est contagieuse. Je vois des progrès que je n’aurais jamais cru possibles !
                                    </div>
                                    <div class="c-testimonials_author">Sophie L.</div>
                                </div>
                            </div>
                            <div class="swiper-slide || u-anim-scroll -parent -delay-5">
                                <div class="c-testimonials_tile">
                                    <div class="c-testimonials_desc">
                                        Karim est bien plus qu’un coach, c’est un vrai mentor. Il adapte les entraînements à mes besoins et me soutient à chaque étape. Je n’ai jamais eu autant de résultats en si peu de temps. Je le recommande à 100 % !
                                    </div>
                                    <div class="c-testimonials_author">Julien B.</div>
                                </div>
                            </div>
                            <div class="swiper-slide || u-anim-scroll -parent -delay-6">
                                <div class="c-testimonials_tile">
                                    <div class="c-testimonials_desc">
                                        Grâce à Karim, j’ai retrouvé ma motivation et ma forme physique. Il sait exactement comment vous pousser sans jamais vous décourager. C’est un coach incroyable qui vous fait sentir capable de tout !
                                    </div>
                                    <div class="c-testimonials_author">Anaïs A.</div>
                                </div>
                            </div>
                            <div class="swiper-slide || u-anim-scroll -parent -delay-7">
                                <div class="c-testimonials_tile">
                                    <div class="c-testimonials_desc">
                                        J’avais du mal à me remettre au sport après une longue pause, mais Karim a su me redonner confiance. Ses séances sont variées et dynamiques, et son énergie est contagieuse. Je vois des progrès que je n’aurais jamais cru possibles !
                                    </div>
                                    <div class="c-testimonials_author">Sophie L.</div>
                                </div>
                            </div>
                            <div class="swiper-slide || u-anim-scroll -parent -delay-8">
                                <div class="c-testimonials_tile">
                                    <div class="c-testimonials_desc">
                                        Karim est bien plus qu’un coach, c’est un vrai mentor. Il adapte les entraînements à mes besoins et me soutient à chaque étape. Je n’ai jamais eu autant de résultats en si peu de temps. Je le recommande à 100 % !
                                    </div>
                                    <div class="c-testimonials_author">Julien B.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include ('templates/footer.php'); ?>
        </div>
    </div>
    <script src="<?=DIR_JS?>vendors.js?<?=V_ASSETS?>" defer></script>
    <script src="<?=DIR_JS?>app.js?<?=V_ASSETS?>" defer></script>
</body>

</html>
