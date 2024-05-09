<?php
// Vérification des données envoyées par le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $profession = htmlspecialchars($_POST['profession']);
    $pseudo_minecraft = htmlspecialchars($_POST['pseudo_minecraft']);
    $pseudo_discord = htmlspecialchars($_POST['pseudo_discord']);
    $temps_jeu = htmlspecialchars($_POST['temps_jeu']);
    $experience = htmlspecialchars($_POST['experience']);
    $motivation = htmlspecialchars($_POST['motivation']);
    $enigme = htmlspecialchars($_POST['enigme']);
    $planning = htmlspecialchars($_POST['planning']);

    // Construction du message
    $message = "Inscription Faction Paladium :\n\n";
    $message .= "Prénom : " . $prenom . "\n";
    $message .= "Âge : " . $age . "\n";
    $message .= "Profession : " . $profession . "\n";
    $message .= "Pseudo Minecraft : " . $pseudo_minecraft . "\n";
    $message .= "Pseudo Discord : " . $pseudo_discord . "\n";
    $message .= "Temps de jeu : " . $temps_jeu . "\n";
    $message .= "Expérience sur le jeu et avec d'autres factions :\n" . $experience . "\n";
    $message .= "Motivation pour rejoindre notre faction :\n" . $motivation . "\n";
    $message .= "Enigme de réflexion :\n" . $enigme . "\n";
    $message .= "Disponibilité (planning) :\n" . $planning;

    // Adresse email où envoyer le message (à remplacer par ton adresse email)
    $destinataire = "mathieu.solane.dev@gmail.com";
    $sujet = "Nouvelle inscription Faction Paladium";

    // Envoi de l'email
    mail($destinataire, $sujet, $message);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
    exit;
}
?>
