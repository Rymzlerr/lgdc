<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php');// Inclure le code de connexion à la base de données et le code pour récupérer les données des inscriptions
include('inscription_traitement.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription LGDC</title>
    <style>
        body {
            font-family: 'Minecraftia', Arial, sans-serif; /* Utilisation de la police Minecraftia */
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 70px auto 20px; /* Marge ajustée avec 70px en haut, 20px en bas et auto pour les côtés */
            padding: 20px;
            background-color: #3d3d3d;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .form-group {
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: calc(100% - 40px); /* Largeur du formulaire moins les marges */
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            margin-left: 20px;
            margin-right: 20px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            width: calc(100% - 40px); /* Largeur du bouton moins les marges */
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #FF6400;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 20px;
            margin-right: 20px;
        }

        input[type="submit"]:hover {
            background-color: #FF8A3F;
        }
    </style>
</head>
<body>

<div class="container">
<h1>Répondez au formulaire sérieusement</h1>
    <form action="inscription_traitement.php" method="post">
        <!-- Champ caché pour l'identifiant de l'inscription -->
        <input type="hidden" name="inscription_id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div class="form-group">
            <label for="age">Âge :</label>
            <input type="number" id="age" name="age" required>
        </div>

        <div class="form-group">
            <label for="profession">Profession :</label>
            <input type="text" id="profession" name="profession" required>
        </div>

        <div class="form-group">
            <label for="pseudo_minecraft">Pseudo Minecraft :</label>
            <input type="text" id="pseudo_minecraft" name="pseudo_minecraft" required>
        </div>

        <div class="form-group">
            <label for="pseudo_discord">Pseudo Discord :</label>
            <input type="text" id="pseudo_discord" name="pseudo_discord" required>
        </div>

        <div class="form-group">
            <label for="temps_jeu">À quelle saison avez vous commencé:</label>
            <input type="text" id="temps_jeu" name="temps_jeu" required>
        </div>

        <div class="form-group">
            <label for="experience">Expérience sur le jeu et avec d'autres factions :</label>
            <textarea id="experience" name="experience" required></textarea>
        </div>

        <div class="form-group">
            <label for="motivation">Pourquoi notre faction et pas une autre :</label>
            <textarea id="motivation" name="motivation" required></textarea>
        </div>

        <div class="form-group">
            <label for="enigme">Trouvez le résultat de ce calcul : 2+2*2! :</label>
            <textarea id="enigme" name="enigme" required></textarea>
        </div>

        <div class="form-group">
            <label for="planning">Disponibilité (planning) :</label>
            <textarea id="planning" name="planning" required></textarea>
        </div>

        <input type="submit" value="Envoyer">
    </form>
</div>


</body>
</html>
