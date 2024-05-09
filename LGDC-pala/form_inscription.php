<?php
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

// Préparer et exécuter la requête SQL pour récupérer les données des inscriptions
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $search_name = htmlspecialchars($_POST['search']);
    $sql = "SELECT * FROM inscriptions WHERE pseudo_minecraft LIKE '%$search_name%'";
} else {
    $sql = "SELECT * FROM inscriptions";
}

$result = $connexion->query($sql);
// Initialiser un tableau pour stocker les inscriptions
$inscriptions = [];

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Afficher les données sous forme de liste
    echo "<ul class='user-list'>";
    
    // Parcourir chaque ligne de résultat
    while($row = $result->fetch_assoc()) {
        echo "<li class='user-item'>";
        echo "<h2>" . $row['prenom'] . "</h2>";
        echo "<p>Âge : " . $row['age'] . "</p>";
        echo "<p>Profession : " . $row['profession'] . "</p>";
        echo "<p>Pseudo Minecraft : " . $row['pseudo_minecraft'] . "</p>";
        echo "<p>Pseudo Discord : " . $row['pseudo_discord'] . "</p>";
        echo "<p>Temps de jeu : " . $row['temps_jeu'] . "</p>";
        echo "<p>Expérience : " . $row['experience'] . "</p>";
        echo "<p>Motivation : " . $row['motivation'] . "</p>";
        echo "<p>Enigme : " . $row['enigme'] . "</p>";
        echo "<p>Planning : " . $row['planning'] . "</p>";
        echo "<p>Date de soumission : " . $row['date_inscription'] . "</p>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucune inscription trouvée.";
}

echo "<ul class='user-list'>";
while($row = $result->fetch_assoc()) {
    echo "<li class='user-item'>";
    echo "<h2>" . $row['prenom'] . "</h2>";
    echo "<p>Âge : " . $row['age'] . "</p>";
    echo "<p>Pseudo Minecraft : " . $row['pseudo_minecraft'] . "</p>";
    // Bouton Supprimer
    echo "<form action='supprimer_inscription.php' method='post'>";
    echo "<input type='hidden' name='inscription_id' value='" . $row['id'] . "'>";
    echo "<input type='submit' value='Supprimer'>";
    echo "</form>";
    echo "</li>";
}
echo "</ul>";


// Fermer la connexion à la base de données
$connexion->close();

?>
