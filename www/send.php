<?php

function isValid($post)
{
    $required_fields = ['name', 'email', 'ville', 'message'];
    foreach ($required_fields as $field) {
        if (empty($post[$field])) {
            return false;
        }
    }
    return true;
}

$success_output = '';
$error_output = '';

if (isValid($_POST)) {

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcaHIAqAAAAAHJxtWpONFhKhUD1nBxMbdlx_wbS';
    $recaptcha_response = $_POST['recaptchaResponse'] ?? '';

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->success === true && $recaptcha->score >= 0.5 && $recaptcha->action === "contact") {

        // Récupération sécurisée des champs
        $name = strip_tags($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $ville = strip_tags($_POST['ville']);
        $phone = strip_tags($_POST['phone'] ?? '');
        $message_content = htmlspecialchars($_POST['message']);
        $services = isset($_POST['service']) && is_array($_POST['service']) ? $_POST['service'] : [];

        $needs = !empty($services) ? implode(", ", array_map('strip_tags', $services)) : '';

        $subject = 'Koaching.fr – Demande de contact';

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Reply-To:' . $email . "\r\n";
        $headers .= 'From: Karim Ourabah <contact@koaching.fr>' . "\r\n";
        $headers .= 'Content-Type: text/html; charset="utf-8"; DelSp="Yes"; format=flowed ' . "\r\n";
        $headers .= 'Content-Disposition: inline' . "\r\n";
        $headers .= 'Content-Transfer-Encoding: 7bit' . "\r\n";
        $headers .= 'X-Mailer:PHP/' . phpversion();

        $to = "contact@koaching.fr";

        $message = '<html><body>';
        $message .= '<h1>Nouveau message reçu depuis le site koaching.fr</h1><hr><h2>Informations du contact</h2><ul>';
        $message .= '<li><b>Nom</b> : ' . $name . '</li>';
        $message .= '<li><b>Email</b> : ' . $email . '</li>';
        $message .= '<li><b>Ville</b> : ' . $ville . '</li>';
        if (!empty($phone)) {
            $message .= '<li><b>Téléphone</b> : ' . $phone . '</li>';
        }
        if (!empty($needs)) {
            $message .= '<li><b>Services souhaités</b> : ' . $needs . '</li>';
        }
        $message .= '<li><b>Message</b> : ' . $message_content . '</li>';
        $message .= '</ul></body></html>';

        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            $success_output = '<div class="c-heading -h4 || u-margin-bottom-sm">Merci, votre message est bien arrivé !</div><p>Laissez-moi le temps de prendre connaissance de votre demande, je vous recontacterai dans les prochains jours. À très bientôt !</p><div class="u-margin-top-md">— Karim Ourabah</div>';
        } else {
            $error_output = 'Le message n\'a pas pu être envoyé, veuillez réessayer plus tard.';
        }
    } else {
        $error_output = 'Erreur de vérification reCAPTCHA.';
    }
} else {
    $error_output = 'Merci de compléter tous les champs du formulaire.';
}

$output = [
    'error' => $error_output,
    'success' => $success_output
];

header('Content-Type: application/json; charset=utf-8');
echo json_encode($output, JSON_UNESCAPED_UNICODE);