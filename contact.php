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
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        "Content-Type: text/html; charset=UTF-8\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $contenu, $headers);
        echo "Votre message a été envoyé.";
    } else {
        echo "L'adresse email est invalide.";
    }
} else {
    echo "Veuillez remplir tous les champs requis.";
}
