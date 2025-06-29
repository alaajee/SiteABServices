<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "alaejennine33@gmail.com"; // adresse à laquelle tu veux recevoir les messages
    $subject = "Nouveau message de $nom";
    $body = "Nom : $nom\nEmail : $email\nMessage :\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi.";
    }
}
?>
