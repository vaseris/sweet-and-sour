<?php
session_start();

// Simpele gebruikersgegevens (in werkelijkheid zou je deze uit een database halen)
$ingeschreven_email = "gebruiker@example.com";
$ingeschreven_wachtwoord = "wachtwoord123"; // In echte code: gebruik gehashte wachtwoorden!

// Gegevens uit het formulier
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

// Controleer of email en wachtwoord kloppen
if ($email === $ingeschreven_email && $wachtwoord === $ingeschreven_wachtwoord) {
    $_SESSION['ingelogd'] = true;
    $_SESSION['gebruiker'] = $email;
    echo "Welkom, je bent succesvol ingelogd!";
    // Je kunt hier ook doorverwijzen naar een beveiligde pagina:
    // header("Location: beveiligde_pagina.php");
} else {
    echo "Oeps! Verkeerde e-mail of wachtwoord.";
}
?>
