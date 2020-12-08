<?php
if (!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $message = $_POST["message"];

    $toEmail = "placeholder@yopmail.fr";
    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    if (mail($toEmail, "[Site Web BPM] Nouveau message", $message, $mailHeaders)) {
        header("Location: index.php");
    } else {
        print("Erreur :'( Contactez le webmaster !");
    }
}
