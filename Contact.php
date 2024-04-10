<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'elm.massage53@gmail.com';
$subject = 'Nouveau message depuis le formulaire de contact';

$body = "Nom: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message";

$headers = "From: $name <$email>";

if (mail($to, $subject, $body, $headers)) {
    echo "Votre message a été envoyé avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}

?>