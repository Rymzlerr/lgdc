<!DOCTYPE html>
<html lang="fr">
<?php include('ruban.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Faction - Paladium</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #3d3d3d;
            border-radius: 10px;
            padding: 20px;
        }

        .card img {
            width: 100%;
            border-radius: 70px;
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="section">
        <h2 class="section-title">Alliances</h2>
        <div class="grid">
            <!-- Bloc des alliances -->
            <div class="card">
                <!-- Logo ou nom de la faction alliée -->
                <div class="card-title">Anoria</div>
                <!-- Description courte -->
                <div class="card-description">
Anoria, une faction aussi malicieuse que surprenante, se positionne comme une maîtresse incontestée de la construction, tout en nourrissant une passion indéniable pour la pyromanie. Avec une réputation bien établie dans le domaine de la contrebande, Anoria jongle habilement entre l'innovation architecturale et l'audace des activités clandestines.</div>
            </div>
            <div class="card">
                <!-- Logo ou nom de la faction alliée -->
                <div class="card-title">Drakera</div>
                <!-- Description courte -->
                <div class="card-description">La Drakera, faction aux objectifs bien définis, se distingue par son efficacité et sa rigueur. Toujours paisible dans ses intentions, elle sait pourtant réagir avec force et ingéniosité lorsque la situation l'exige, réalisant des coups de maître qui imposent le respect et la crainte chez ses adversaires.</div>
            </div>
            <!-- Ajoutez d'autres alliances ici -->
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Présentation de Notre Faction</h2>
        <!-- Bloc de présentation de votre faction -->
        <div class="card">
            <!-- Logo et nom de votre faction -->
            <div class="card-title">LeGangDesChatons</div>
            <!-- Description de votre faction -->
            <div class="card-description">LeGangDesChatons est une faction emblématique qui a émergé sur Paladium dès la version 6.5. Cependant, c'est véritablement à partir de la version 7 que cette faction a su s'imposer avec éclat. Dès ses débuts, Le GangDesChatons s'est distingué en consolidant ses rangs et en renforçant son armée au fil du temps. Avec une stratégie bien élaborée et un leadership solide, la faction a rapidement acquis une réputation de force incontournable sur le serveur.

Mais Le GangDesChatons ne s'est pas contenté de se contenter de ses succès militaires. Conscient de l'importance de l'économie dans l'équilibre du serveur, la faction a pris l'initiative de créer le CocaShop. Ce commerce florissant est rapidement devenu un pilier de l'économie de Paladium, offrant une large gamme de produits et contribuant ainsi au développement économique du serveur.

Parallèlement à ses activités économiques, LeGangDesChatons s'est également investi dans le PvP (Player versus Player). Soucieux de maintenir leur suprématie sur le plan militaire, les membres de la faction ont développé leurs compétences en combat, participant à des batailles épiques et défendant avec bravoure les intérêts de leur faction.

Ainsi, tout au long de son histoire, LeGangDesChatons a su évoluer, s'adapter et prospérer, laissant une empreinte indélébile sur Paladium et marquant l'histoire du serveur de son empreinte inimitable.</div>
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Présentation des Leaders</h2>
        <div class="grid">
            <!-- Bloc de présentation des membres -->
            <div class="card">
                <!-- Image du membre -->
                <img src="./image/Herox.png" alt="Membre 1">
                <!-- Pseudo et rôle du membre -->
                <div class="card-title">_Herox - Leader</div>
                <!-- Biographie ou description courte -->
                <div class="card-description">Herox, le fondateur du GangDesChatons, est une figure emblématique connue pour son charisme inégalé et son dévouement envers sa communauté. En tant que leader, il est toujours à l'écoute des nouvelles recrues, offrant son soutien et son encouragement à ceux qui rejoignent LeGangDesChatons. Sa capacité à rassembler et à inspirer les autres est incontestée, ce qui lui permet de créer un environnement accueillant et dynamique au sein de son groupe. Au fil des années, Herox a su bâtir une véritable famille en ligne, unie par une passion commune et un esprit de camaraderie. Sa vision et son engagement ont permis au GangDesChatons de prospérer et de devenir l'une des communautés les plus respectées et influentes dans son domaine.</div>
            </div>
            <div class="card">
                <!-- Image du membre -->
                <img src="./image/rymzler.jpg" alt="Membre 2">
                <!-- Pseudo et rôle du membre -->
                <div class="card-title">Rymzler - Leader</div>
                <!-- Biographie ou description courte -->
                <div class="card-description">Rymzler, un leader respecté au sein du GangDesChatons, se distingue par son sérieux et son dévouement envers les recrues anciennes. Bien qu'il puisse sembler plus réservé avec les nouvelles recrues, son engagement envers tous les membres de la communauté reste indéfectible. En tant que figure de proue, Rymzler a joué un rôle essentiel dans la montée en puissance du GangDesChatons sur Paladium. Que ce soit par le biais de sa chaîne YouTube ou de son charisme naturel, il a su inspirer et motiver ses compagnons à donner le meilleur d'eux-mêmes. Son leadership efficace et ses efforts inlassables ont contribué à forger une communauté solide et soudée, propulsant ainsi le GangDesChatons vers de nouveaux sommets de succès et de reconnaissance.</div>
            </div>
            <!-- Ajoutez d'autres membres ici -->
        </div>
    </div>
</div>

</body>
</html>
