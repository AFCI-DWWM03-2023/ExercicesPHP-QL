<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $titre ?></title>
</head>
<body>
<header>
    <img src="img/PHP-logo.svg.png" alt="">
    <div>
        <h1>PHP procédural</h1>
        <h2>Créer le back-end permettant de sauvegarder des données en sessions à travers un formulaire</h2>
        <p>J'apprends et je me perfectionne</p>
    </div>
</header>
<section>
    <nav>
        <ul>
            <li><a href="."><span class="link link1">Home</span></a></li>
            <?= $nav?>
        </ul>
    </nav>
    <?= $content ?>
</section>
<footer>Quentin Leclaire</footer>
</body>
</html>