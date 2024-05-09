<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'Alliance - Succès</title>
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

        h1 {
            text-align: center;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .back-to-home {
            text-align: center;
        }

        .back-to-home a {
            color: #FF6400;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-to-home a:hover {
            color: #FF8A3F;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Votre demande a été envoyé avec succès !</h1>
    <p>Nous avons bien reçu votre demande d'alliance. Nous vous contacterons dès que possible.</p>
    <div class="back-to-home">
        <a href="index.php">Retour à l'accueil</a>
    </div>
</div>

</body>
</html>
