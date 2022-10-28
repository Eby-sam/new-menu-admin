<?php
    use menu\Controller\AbstractController;
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/app.js" defer></script>
</head>
<body>
    <div id="container">
            <div id="nav">
                <div class="choice">
                    <a href="https://fr.wikipedia.org/wiki/Pok%C3%A9mon">Pokemon => </a>
                </div>
                <div class="choice">
                    <a href="https://bayonetta.fandom.com/wiki/Bayonetta_(character)">Nayonetta 3 =></a>
                </div>
                <div class="choice">
                    <a href="https://fr.wikipedia.org/wiki/Digimon">Digimon =></a>
                </div>
                <div class="choice">
                    <a href="https://fr.wikipedia.org/wiki/Seven_Deadly_Sins#:~:text=Seven%20Deadly%20Sins%20(%E4%B8%83%E3%81%A4%E3%81%AE,quarante%2Det%2Dun%20tomes.">Seven Deadly sins =></a>
                </div>
                <div class="choice">
                    <a href="https://fr.wikipedia.org/wiki/Seven_Deadly_Sins#:~:text=Seven%20Deadly%20Sins%20(%E4%B8%83%E3%81%A4%E3%81%AE,quarante%2Det%2Dun%20tomes.">Naruto =></a>
                </div>
            </div>
            <div class="sidebar"></div>
            <div class="container">
                <?= $html ?>
            </div>

    </div>
</body>
</html>
