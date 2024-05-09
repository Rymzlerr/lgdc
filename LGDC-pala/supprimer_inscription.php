<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inscription_pseudo'])) {
    // Récupérer l'ID de l'inscription à supprimer
    $inscription_pseudo = $_POST['inscription_pseudo'];

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

    // Préparer et exécuter la requête SQL pour supprimer l'inscription
    $sql = "DELETE FROM inscriptions WHERE pseudo_minecraft = ?";
    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("i", $inscription_pseudo);

    if ($stmt->execute()) {
        echo "L'inscription a été supprimée avec succès.";
    } else {
        echo "Une erreur s'est produite lors de la suppression de l'inscription : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    // Redirection vers la page d'administration si le formulaire n'a pas été soumis correctement
    header("Location: admin.php");
    exit();
}
?>
