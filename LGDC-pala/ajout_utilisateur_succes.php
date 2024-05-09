<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Utilisateur - Succès - Faction Paladium</title>
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
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #3d3d3d;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #FF6400;
        }

        p {
            margin-bottom: 20px;
        }

        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #FF6400;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .button:hover {
            background-color: #FF8A3F;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Ajout Utilisateur - Succès</h1>
</div>

<div class="container">
    <p>L'utilisateur a été ajouté avec succès.</p>
    <a href="admin.php" class="button">Retour à l'administration</a>
</div>

</body>
</html>
