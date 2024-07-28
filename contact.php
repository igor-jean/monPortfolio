<?php
$nom = $_GET["nom"] ?? "";
$prenom = $_GET["prenom"] ?? "";
$email = $_GET["email"] ?? "";
$tel = $_GET["telephone"] ?? "";
$message = $_GET["message"] ?? "";
$chk = $_GET["chk"] ?? "";

if ($nom && $prenom && $email && $message && $chk) {
    $to      = 'igorjean79@gmail.com';
    $subject = 'Message depuis mon Portfolio';
    $contenu = "<h1>Message depuis mon Portfolio</h1>
                <p>Nom: $nom<br>
                Prénom: $prenom<br>
                Email: $email<br>
                Téléphone: $tel<br>
                Message: $message</p>";
    $headers = 'From: contact@igor-jean.com' . "\r\n" .
        'Reply-To: contact@igor-jean.com ' . "\r\n" .
        "Content-Type: text/html; charset=UTF-8\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $contenu, $headers);
        header("Location: https://igor-jean.com/");
    } else {
        header("Location: https://igor-jean.com/");
    }
}
