<?php

// ==========================================================================
// Config / Assets naming (prevent cache)
// ==========================================================================
define ('V_ASSETS', time());

// ==========================================================================
// Config / Directories
// ==========================================================================
define ('DIR_IMG', 'assets/images/');
define ('DIR_VIDEOS', 'assets/videos/');
define ('DIR_JS', 'assets/scripts/');
define ('DIR_CSS', 'assets/styles/');
define ('DIR_FONTS', 'assets/fonts/');

define ('URL', '/');
//define ('URL', 'https://www.koaching.fr/');


// ==========================================================================
// Config / Services array
// ==========================================================================
$services = array (
    array (
        'name' => 'Bien-être',
        'description' => '<p>Le sport est un pilier essentiel de votre bien-être, tant physique que mental. Que vous soyez passionné de sport ou totalement novice, je suis là pour vous guider, vous aider à découvrir une activité qui vous plaît et à la pratiquer en toute sécurité, à votre rythme. Bien dans son corps, bien dans sa tête.</p>',
    ),
    array (
        'name' => 'Remise en forme',
        'description' => '<p>Se remettre au sport seul, ce n’est pas toujours évident. Lors de notre première rencontre, nous réaliserons un bilan complet de vos capacités, de votre passé sportif et de vos attentes. Celui-ci permettra d’ajuster les exercices pour qu’ils soient en phase avec vos besoins physiques.</p>',
    ),
    array (
        'name' => 'Renforcement musculaire',
        'description' => '<p>Le renforcement musculaire est une activité essentielle pour tous. Des muscles plus forts ne servent pas seulement à améliorer vos performances sportives, mais aussi à booster votre santé au quotidien. Je propose une large gamme d’exercices pour vous muscler, que ce soit avec le poids de votre corps ou de petits équipements.</p>',
    ),
    array (
        'name' => 'Prise de masse',
        'description' => '<p>Trois règles fondamentales : entraînement, récupération, alimentation. Je suis là pour vous aider à atteindre vos objectifs grâce à un programme sur mesure, conçu pour réussir durablement votre prise de masse.</p>',
    ),
    array (
        'name' => 'Perte de poids',
        'description' => '<p>Déficit calorique, cardio HIIT (entraînement par intervalles à haute intensité), lipolyse… Pas facile de s’y retrouver avec toutes ces approches ! Ensemble, nous identifierons la méthode la plus adaptée à vos besoins pour maximiser votre perte de poids.</p>',
    ),
    array (
        'name' => 'Conseils en nutrition',
        'description' => '<p>Ensemble, nous analyserons votre métabolisme de base et déterminerons votre apport calorique idéal en fonction de votre activité physique quotidienne. Ces recommandations vous aideront à équilibrer vos macronutriments et à optimiser votre alimentation.</p>',
    ),
    array (
        'name' => 'Bilan corporel',
        'image' => 'balance_inbody.jpg',
        'description' => '<p>Découvrez votre corps sous un nouveau jour avec un bilan corporel complet grâce à la balance impédancemètre InBody ! Déterminez votre composition corporelle précise : analysez muscle, eau, graisse et bien plus. Avec plus de 50 données détaillées, obtenez un aperçu clair pour optimiser votre bien-être et atteindre vos objectifs.</p>',
    )
);



$formules = array (
    array(
        'name' => 'Coaching Solo/Couple',
        'excerpt' => 'Seul, on avance plus vite, mais à deux, on va toujours plus loin.',
        'price' => '40/70€',
        'price_qty' => '1h',
    ),
    array(
        'name' => 'Bilan corporel + coaching',
        'excerpt' => 'Bilan complet de votre composition corporelle (balance impédancemètre inBody) suivi d\'une heure de coaching.',
        'price' => '55€',
        'price_qty' => '30 minutes + 1h',
    ),
    array(
        'name' => 'Coaching + conseils nutritionnels',
        'excerpt' => 'Coaching d\'une heure suivi de 30 minutes dédiées aux conseils nutritionnels',
        'price' => '50€',
        'price_qty' => '1h + 30 minutes',
    ),
    array(
        'name' => 'Coaching en ligne',
        'excerpt' => 'Une solution pratique pour travailler à distance, sans contraintes d’horaires.',
        'price' => '35€',
        'price_qty' => '1h',
    ),
    array(
        'name' => 'Programme seul',
        'excerpt' => 'Un programme qui vous guide pour optimiser vos séances, que ce soit à la salle ou à la maison, et vous permet de devenir autonome dans votre entraînement.',
        'price' => '20€',
        'price_qty' => '',
    ),
    array(
        'name' => 'Conseils nutritionnels',
        'excerpt' => 'Que ce soit pour la perte de poids, la prise de masse ou d’autres objectifs, tout commence dans l’assiette. Une bonne alimentation est la clé pour soutenir vos efforts et atteindre vos résultats de manière durable.',
        'price' => '20€',
        'price_qty' => '30 minutes',
    ),
    array(
        'name' => 'Devis personnalisé',
        'excerpt' => 'Tarif dégressif en fonction du nombre de séances',
        'price' => 'Sur-mesure',
    ),
);