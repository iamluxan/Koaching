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

        <div id="contact-door" class="c-contact" data-module-contact data-lenis-prevent>
            <video src="<?=DIR_VIDEOS?>fitness.mp4" autoplay playsinline muted loop disableRemotePlayback class="c-contact_background || u-motion-only"></video>
            <div class="c-contact_content">
                <div class="c-contact_inner">
                    <div class="c-contact_header">
                        <h2 class="c-heading -h1">Contact</h2>
                        <button class="c-button -circle" id="close-contact-door">
                    <span class="c-button_icon o-icon">
                        <svg class="svg-close" focusable="false" aria-hidden="true">
                            <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#close"></use>
                        </svg>
                    </span>
                            <span class="c-button_bg"></span>
                        </button>
                    </div>
                    <form action="" method="post" name="contact" id="contact" class="c-form || u-margin-top-md">
                        <div id="alert"></div>
                        <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
                        <div class="c-form_fields">
                            <div class="c-form_label">
                                <div class="c-text -subtitle">Je suis intéressé par...</div>
                                <div class="c-checkbox-grid">
                                    <?php foreach ($services as $service) { ?>
                                        <div class="c-checkbox">
                                            <label class="c-checkbox_label">
                                                <input type="checkbox" value="<?=$service['name']?>" name="service[]">
                                                <span class="c-checkbox_box">
                                            <span class="c-checkbox_title"><?=$service['name']?></span>
                                        </span>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="c-form_label">
                                <label class="c-form_label || u-screen-reader-text" for="name">
                                    Votre nom & prénom <span aria-hidden="true">*</span>
                                </label>
                                <input placeholder="Votre nom & prénom" class="c-form_input" type="text" value="" id="name" name="name" required>
                            </div>
                            <div class="c-form_label">
                                <label class="c-form_label || u-screen-reader-text" for="phone" >
                                    Votre numéro de téléphone <span aria-hidden="true">*</span>
                                </label>
                                <input placeholder="Votre numéro de téléphone" class="c-form_input" type="tel" id="phone" name="phone">
                            </div>
                            <div class="c-form_label">
                                <label class="c-form_label || u-screen-reader-text" for="email">
                                    Votre adresse e-mail <span aria-hidden="true">*</span>
                                </label>
                                <input placeholder="Votre adresse e-mail" class="c-form_input" type="email" value="" id="phone" name="email" required>
                            </div>
                            <div class="c-form_label">
                                <label class="c-form_label || u-screen-reader-text" for="message">
                                    Votre message <span aria-hidden="true">*</span>
                                </label>
                                <textarea class="c-form_textarea" name="message" required placeholder="Votre message"></textarea>
                            </div>
                            <div class="c-form_footer">
                                <button class="c-button -cta" type="submit">
                                    <span class="c-button_bg"></span>
                                    <span class="c-button_label">Envoyer</span>
                                    <span class="c-button_icon o-icon">
                                <svg class="svg-arrow-right" focusable="false" aria-hidden="true">
                                    <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-right"></use>
                                </svg>
                            </span>
                                </button>
                                <p class="u-margin-top-sm c-text -small">Ce site est protégé par reCAPTCHA et la <a data-load="false" href="https://policies.google.com/privacy" class="c-link -active -alpha">politique de confidentialité</a> et les <a data-load="false" href="https://policies.google.com/terms" class="c-link -active -alpha">conditions d'utilisation</a> de Google s'appliquent.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LcaHIAqAAAAAF2qMdAAljkxHtvqdW9wwZJyUGaW"></script>
<script src="<?=DIR_JS?>vendors.js?<?=V_ASSETS?>" defer></script>
<script src="<?=DIR_JS?>app.js?<?=V_ASSETS?>" defer></script>
</body>

</html>