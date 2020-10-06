<?php

$errors = [];
$firstname = $name = $mail = $tel = $subject = $message = "";

function cleanData($param)
{
    $param = trim($param);
    return htmlspecialchars($param);
}

if (!empty($_POST)) {
    $firstname = cleanData($_POST["user_firstname"]);
    $name = cleanData($_POST["user_lastname"]);
    $tel = cleanData($_POST["user_phone_number"]);
    $subject = cleanData($_POST["mail_subject"]);
    $message = cleanData($_POST["user_message"]);
    $mail = cleanData($_POST["user_email"]);

    if (empty($firstname))
        $errors['firstname'] = 'firstname required !';
    if (empty($name))
        $errors['name'] = 'name required !';
    if (empty($tel))
        $errors['tel'] = 'phone number required !';
    if (empty($subject))
        $errors['subject'] = 'choose a subject !';
    if (empty($message))
        $errors['message'] = 'message required !';
    if (!filter_var($mail, FILTER_SANITIZE_EMAIL))
        $errors['mail'] = 'Enter a correct mail adress !';

    if (empty($errors)) {
        echo "Merci $firstname $name de nous avoir contacté à propos de “$subject\”. </br>
        Un de nos conseiller vous contactera soit à l’adresse $mail ou par téléphone au $tel dans les plus brefs délais pour traiter votre demande : </br>
        $message";
    } else {
        include ('form.php');
    }
}

