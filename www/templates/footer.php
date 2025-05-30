<footer class="c-footer || u-anim-scroll-parent" data-scroll data-scroll-repeat data-scroll-offset="10%, 0%">
    <div class="o-container">
        <h2 class="c-heading -h2 || u-anim-scroll -parent -delay-0">Prêt à vous lancer ?</h2>
        <div class="c-text -subtitle || u-anim-scroll -parent -delay-1">Prenez contact et réservez votre session de coaching.</div>
        <button class="c-button -stroke || u-anim-scroll -parent -delay-2" data-button="contact">
            <span class="c-button_bg"></span>
            <span class="c-button_label">Me contacter</span>
            <span class="c-button_icon o-icon">
                <svg class="svg-arrow-right" focusable="false" aria-hidden="true">
                    <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#arrow-right"></use>
                </svg>
            </span>
        </button>
        <div class="c-footer_logo">
            <span class="o-icon">
                <svg class="svg-logo-footer" focusable="false" aria-hidden="true">
                    <use xlink:href="assets/images/sprite.svg?<?=V_ASSETS?>#logo"></use>
                </svg>
            </span>
        </div>
        <div class="c-footer_nav">
            <div class="c-footer_nav_left || u-anim-scroll -parent -delay-3">
                &copy; <?=date('Y')?> Karim Ourabah — Koaching.fr
            </div>
            <div class="c-footer_nav_right || u-anim-scroll -parent -delay-4">
                <ul class="c-footer_nav_list">
                    <li><a href="<?=URL?>mentions-legales" title="Mentions légales">Mentions légales</a></li>
                    <li><a data-load="false" href="https://www.nextad.fr" title="Agence web Landes">Réalisation: Nextad</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

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
                        <input placeholder="Nom & prénom" class="c-form_input" type="text" value="" id="name" name="name" required>
                    </div>
                    <div class="c-form_label">
                        <label class="c-form_label || u-screen-reader-text" for="phone" >
                            Votre numéro de téléphone <span aria-hidden="true">*</span>
                        </label>
                        <input placeholder="Numéro de téléphone" class="c-form_input" type="tel" id="phone" name="phone">
                    </div>
                    <div class="c-form_label">
                        <label class="c-form_label || u-screen-reader-text" for="ville" >
                            Votre ville de résidence <span aria-hidden="true">*</span>
                        </label>
                        <input placeholder="Ville de résidence" class="c-form_input" type="text" id="ville" name="ville">
                    </div>
                    <div class="c-form_label">
                        <label class="c-form_label || u-screen-reader-text" for="email">
                            Votre adresse e-mail <span aria-hidden="true">*</span>
                        </label>
                        <input placeholder="Adresse e-mail" class="c-form_input" type="email" value="" id="phone" name="email" required>
                    </div>
                    <div class="c-form_label">
                        <label class="c-form_label || u-screen-reader-text" for="message">
                            Votre message <span aria-hidden="true">*</span>
                        </label>
                        <textarea class="c-form_textarea" name="message" required placeholder="Message"></textarea>
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