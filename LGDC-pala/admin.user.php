<?php
// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs sont définis et non vides
    if (isset($_POST['username'], $_POST['password'])) {
        // Récupérer les données du formulaire
        $username = $_POST['username'];
        $password = $_POST['password'];

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

        // Préparer la requête SQL pour vérifier les informations de connexion
        $sql = "SELECT user_id, role, mot_de_passe FROM utilisateurs WHERE nom_utilisateur = ?";
        $stmt = $connexion->prepare($sql);
        
        // Liaison des paramètres
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Vérifier si l'utilisateur existe dans la base de données
        if ($result->num_rows == 1) {
            // Récupérer les données de l'utilisateur
            $row = $result->fetch_assoc();
            $stored_password = $row['mot_de_passe'];

            // Vérifier si le mot de passe correspond
            if (password_verify($password, $stored_password)) {
                // Mot de passe correct, récupérer le rôle de l'utilisateur
                $role = $row['role'];

                // Stocker les informations de l'utilisateur dans la session
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;

                // Rediriger vers la page admin.php
                header('Location: admin.php');
                exit();
            } else {
                // Mot de passe incorrect
                header('Location: login.php?error=Identifiant ou mot de passe incorrect.');
                exit();
            }
        } else {
            // Utilisateur non trouvé dans la base de données
            header('Location: login.php?error=Identifiant ou mot de passe incorrect.');
            exit();
        }
    } else {
        // Champs manquants dans le formulaire
        header('Location: login.php?error=Veuillez remplir tous les champs.');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Faction Paladium</title>
    <style>
        /* Vos styles CSS */
    </style>
</head>
<body>

<div class="container">
    <h1>Connexion à l'espace admin</h1>
    <?php
    // Afficher un message d'erreur s'il y a lieu
    if (!empty($_GET['error'])) {
        echo '<div class="error">' . htmlspecialchars($_GET['error']) . '</div>';
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>

        <input type="submit" value="Se connecter">
    </form>
</div>

</body>
</html>
