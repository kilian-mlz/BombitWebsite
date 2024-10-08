<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="style_accueil.css" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>

<a href="index.php">
    <div class="navbar">
        <p>Menu</p>
    </div>
</a>
<div class="acc">
    <h1>Bienvenue sur le site officiel de Bombit !</h1>
    <div class="pres">
        <p>Bombit Man est un jeu rétro développé en 2024 par 2 étudiants en première année de l'École-IT qui sont Kilian Milliez et Enzo Poussin. Le jeu est développé en python en utilisant les librairies graphiques de pygame et de Tkinter. <br> Bombit Man reprend les caractéristiques du célébre jeu BomberMan. Préparez vous à jouer à un jeu explosif!</p>
    </div>

    <div class="card-container">
        <a href="BOMBIT.zip">
            <div class="card">
                <p>Téléchargement</p>
            </div>
        </a>
        <a href="#rule">
            <div class="card">
                <p>Règles</p>
            </div>
        </a>
        <a href="#dl_contact">
            <div class="card">
                <p>Contacts</p>
            </div>
        </a>
    </div>
</div>
<div id="rules"></div>
<div id="rule">
    <h2>REGLES</h2>
    <div class="text">
        <p id="left">1. Les murs: <br> Il existe 2 types de murs, des cassables et des incassables. Vous pouvez les casser en utilisant les bombes. <br><br> Les déplacements:
            <br> Pour vous déplacer vous dévez utiliser les <strong>4 fléches directionnelles</strong> pour soit aller à gauche en bas vers le haut ou encore à droite.
            <br><br> LES BOMBES: <br> Les bombes sont mortelles pour le joueur. Elles le tueront si il se situe dans son rayon d'explosion qui est de <strong>
                2 blocs dans toutes les directions</strong> Vous pouvez placer une bombe en pressant la touche <strong>space</strong></p>
        <p id="right">Les bombes exploseront 2 secondes après avoir étaient posées. <br><br> Les ennemies: <br> Si vous entrez en collision avec des ennemies vous perdez automatiquement. Vous pouvez tuer les ennemies avec vos bombes. Une fois tous les ennemies morts vous gagnez la partie.
            <br><br> La map: <br> La map est générée automatiquement. Une seule instance du jeu n'est pas générée aléatoirement ce sont les murs incassables.
            <br><br> Autre: <br> Si vous voulez quitter le jeu en cours de partie, appuyez sur <strong>ECHAP</strong></p>
    </div>
</div>

<div class="dl_contact" id="dl_contact">
    <div class="dl">
        <h2>Téléchargement</h2>
        <a href="BOMBIT.zip">
            <div class="card">
                <p>Télécharger</p>
            </div>
        </a>
    </div>
    <div class="contact">
        <h2>Contacts</h2>
        <div class="person">
            <h4>KILIAN MILLIEZ</h4>
            <p>kilian.milliez@ecole-it.com</p>
        </div>
        <div class="person">
            <h4>ENZO POUSSIN</h4>
            <p>enzo.poussin@ecole-it.com</p>
        </div>
    </div>
</div>
</body>
</html>
