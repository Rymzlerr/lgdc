<?php
// Vérification des données envoyées par le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $prenom = ($_POST['prenom']);
    $age = ($_POST['age']);
    $profession = ($_POST['profession']);
    $pseudo_minecraft = ($_POST['pseudo_minecraft']);
    $pseudo_discord = ($_POST['pseudo_discord']);
    $temps_jeu = ($_POST['temps_jeu']);
    $experience = ($_POST['experience']);
    $motivation = ($_POST['motivation']);
    $enigme = ($_POST['enigme']);
    $planning = ($_POST['planning']);

    // Connexion à la base de données
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "lgdc";

    $connexion = new mysqli($servername, $db_username, $db_password, $database);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Préparer et exécuter la requête SQL pour insérer les données dans la table
    $sql = "INSERT INTO inscriptions (prenom, age, profession, pseudo_minecraft, pseudo_discord, temps_jeu, experience, motivation, enigme, planning) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("sissssssss", $prenom, $age, $profession, $pseudo_minecraft, $pseudo_discord, $temps_jeu, $experience, $motivation, $enigme, $planning);
    
    // Exécuter la requête
    if ($stmt->execute()) {
        // Redirection vers une page de confirmation si l'insertion est réussie
        header("Location: reussite_inscription.php");
        exit;
    } else {
        // En cas d'erreur lors de l'exécution de la requête
        echo "Erreur lors de l'insertion des données : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}
?>
