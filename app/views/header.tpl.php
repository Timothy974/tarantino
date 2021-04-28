<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $this->generateUrl('/CSS/style.css')?>">
    <title>Tarantino</title>
</head>

<body>
<header>
        <nav class="navbar">
            <ul>
                <li><a href="<?= $this->generateUrl('')?>">Accueil</a></li>
                <li><a href="<?= $this->generateUrl('biographie/')?>">Biographie</a></li>
                <li><a href="<?= $this->generateUrl('tarantiquiz/')?>">TarantiQuiz</a></li>
            </ul>
        </nav>
</header>