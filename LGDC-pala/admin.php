<?php
    // Démarrez la session
    session_start();
    
    // Vérifiez si l'utilisateur est connecté et a le rôle d'administrateur
    if(isset($_SESSION['role']) && $_SESSION['role'] === "admin") {
        // L'utilisateur est connecté en tant qu'administrateur, affichez le contenu de la page d'administration
    
    
    } else {
        // Redirigez l'utilisateur vers une page d'erreur ou affichez un message d'interdiction
        header("Location: page-d-interdiction.php");
        exit(); // Assurez-vous de quitter le script après la redirection
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - LGDC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #1a1a1a;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #3d3d3d;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .container input[type="text"] {
            padding: 5px;
            width: 200px;
            border: none;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        .container input[type="submit"] {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            background-color: #FF6400;
            color: #fff;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .container input[type="submit"]:hover {
            background-color: #FF8A3F;
        }

        .container input[type="submit"]:hover {
            background-color: #FF8A3F;
        }

        .container option {
            padding: 5px;
            width: 200px;
            border: none;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        .container-input {
            padding: 5px;
            width: 200px;
            border: none;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .user-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .user-item {
            background-color: #555;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .user-item:hover {
            background-color: #666;
        }

        .user-item h2 {
            margin: 0;
            font-size: 18px;
        }

        .user-item p {
            margin: 5px 0;
        }

        .search-form {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

<div class="header">
    <h1>Administration - Faction Paladium</h1>
</div>

<div class="container">
    <!-- Formulaire pour ajouter manuellement un utilisateur -->
    <form action="ajouter_utilisateur.php" method="post">
        <h2>Ajouter un utilisateur</h2>
        <div>
            <label for="nom_utilisateur">Nom d'utilisateur :</label>
            <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
        </div>
        <div>
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="text" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <div>
            <label for="role">Rôle :</label>
            <select id="role" name="role" class="container-input">
                <option value="admin">Admin</option>
                <option value="moderateur">Modérateur</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>

    <!-- Formulaire pour voir les inscriptions -->
    <h2>Liste des inscriptions</h2>

    <!-- Formulaire pour rechercher par pseudo Minecraft -->
    <form action="" method="post" class="search-form">
        <label for="search">Rechercher par pseudo Minecraft :</label>
        <input type="text" id="search" name="search">
        <input type="submit" value="Rechercher">
    </form>
        <!-- Formulaire pour supprimer l'inscription -->
    <form action="supprimer_inscription.php" method="post">
        <label for="inscription_pseudo">Pseudo de l'inscription à supprimer :</label>
        <input type="text" id="inscription_pseudo" name="inscription_pseudo" required>
        <input type="submit" value="Supprimer l'inscription">
    </form>

    <div class="user-list">
        <?php 
        // Inclure le code PHP pour récupérer et afficher les inscriptions
        include('form_inscription.php');

        // Vérifier si une recherche a été effectuée
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
            $search_name = htmlspecialchars($_POST['search']);
            echo "Recherche effectuée avec le pseudo Minecraft : $search_name <br>";

            $matching_inscriptions = array_filter($inscriptions, function($inscription) use ($search_name) {
                return strtolower($inscription['pseudo_minecraft']) === strtolower($search_name);
            });

            echo "Nombre de résultats correspondant à la recherche : " . count($matching_inscriptions) . "<br>";

            if (!empty($matching_inscriptions)) {
                foreach ($matching_inscriptions as $inscription) {
        ?>
        <?php
                }
            } else {
                echo "Aucune inscription trouvée pour ce pseudo Minecraft.";
            }
        } else {
            // Afficher tous les formulaires par défaut
            foreach ($inscriptions as $inscription) {
        ?>
                <div class="user-item">
                    <h2><?= $inscription['prenom'] ?></h2>
                    <p>Age : <?= $inscription['age'] ?></p>
                    <!-- Formulaire pour supprimer l'inscription -->
                    <form action="supprimer_inscription.php" method="post">
                        <input type="hidden" name="inscription_id" value="<?= $inscription['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </div>
        <?php
            }
        }
        
        ?>
    </div>
</div>

</body>
</html>
