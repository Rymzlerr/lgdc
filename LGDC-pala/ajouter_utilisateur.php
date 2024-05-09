<?php
// Inclure le fichier de connexion à la base de données
include('connexion.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si tous les champs requis sont remplis
    if (!empty($_POST['nom_utilisateur']) && !empty($_POST['mot_de_passe']) && !empty($_POST['role'])) {
        // Récupérer les valeurs soumises dans le formulaire
        $nom_utilisateur = $_POST['nom_utilisateur'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $role = $_POST['role'];

        // Hacher le mot de passe avant de l'insérer dans la base de données
        $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Préparer et exécuter la requête d'insertion dans la base de données
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nom_utilisateur, $hashed_password, $role);
        $stmt->execute();

        // Rediriger vers une page de succès ou afficher un message de succès
        header("Location: ajout_utilisateur_succes.php");
        exit();
    } else {
        // Si tous les champs requis ne sont pas remplis, afficher un message d'erreur
        echo "Tous les champs requis ne sont pas remplis.";
    }
}
?>
