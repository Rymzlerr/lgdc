<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'Alliance - LGDC</title>
    
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

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 20px); /* Réduction de 20px pour tenir compte des marges ajoutées */
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            margin-bottom: 10px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            width: calc(100% - 20px); /* Réduction de 20px pour tenir compte des marges ajoutées */
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #FF6400;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #FF8A3F;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Demande d'Alliance</h1>
    <form action="reussite_alliance.php" method="post">
        <div class="form-group">
            <label for="nom_guild">Nom de votre faction :</label>
            <input type="text" id="nom_guild" name="nom_guild" required>
        </div>

        <div class="form-group">
            <label for="nom_contact">Nom du contact :</label>
            <input type="text" id="nom_contact" name="nom_contact" required>
        </div>

        <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="6" required></textarea>
        </div>

        <input type="submit" value="Envoyer">
    </form>
</div>

</body>
</html>
