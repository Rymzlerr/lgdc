<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeGangDesChatons</title>
    <style>
        body {
            font-family: 'Minecraftia', Arial, sans-serif; /* Utilisation de la police Minecraftia */
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .ruban-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #1a1a1a; /* Couleur du ruban du site Paladium-PVP */
            padding: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .logo {
            margin-right: 20px;
        }

        .logo img {
            height: 80px; /* Hauteur de votre logo */
            border-radius: 30px; /* Rayon pour arrondir les coins */
        }

        .ruban-left {
            display: flex;
            align-items: center;
        }

        .ruban-right {
            display: flex;
            align-items: center;
            margin-right: 60px;
            justify-content: space-between;
        }

        .ruban .options {
            margin: 0 auto;
            max-width: 1200px;
        }

        .ruban a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .ruban a::before, .ruban a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #FF6400; /* Couleur du trait orange */
            bottom: 0;
            transition: width 0.3s;
        }

        .ruban a::before {
            left: 0;
        }

        .ruban a::after {
            right: 0;
        }

        .ruban a:hover::before, .ruban a:hover::after {
            width: 50%; /* Longueur du trait orange au survol */
        }

        .banniere-container {
            text-align: center;
            margin-top: 150px; /* Marge entre le ruban et la bannière */
            margin-bottom: 20px; /* Marge en dessous de la bannière */
            background-repeat: no-repeat; /* Empêcher la répétition du GIF */
        }

        .banniere-container img {
            width: 700px; /* Taille initiale de l'image */
            height: auto;
            border-radius: 30px; /* Rayon pour arrondir les coins */
        }

        /* Styles supplémentaires pour les formulaires et autres éléments si nécessaire */
    </style>
</head>
<body>

<div class="ruban-container">
    <div class="ruban-left">
        <div class="logo">
            <img src="./image/logo.jpg" alt="Logo de votre faction">
        </div>
        <div class="ruban">
            <div class="options">
                <a href="index.php">Accueil</a>
                <a href="inscription.php">Inscription</a>
                <a href="alliance.php">Demande d'alliance</a>
                <a href="notre_faction.php">Notre faction</a>
            </div>
        </div>
    </div>
    <div class="ruban-right">
        <div class="discord">
            <a href="https://discord.gg/Z3Ds4hnnju" target="_blank">
                <img src="./image/discord-logo.png" alt="Logo Discord" style="width: 60px; height: auto; margin-right: 60px;">
            </a>
        </div>
        <div class="login">
        <a href="login.php" style="background-color: #FF6400; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Connexion</a>
        </div>

    </div>
</div>

<div class="banniere-container">
    <img src="./image/LGDC.gif" alt="banniere fac" loop>
</div>

</body>
</html>
