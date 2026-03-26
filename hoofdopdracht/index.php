<?php
// Mijn mini-app wordt een: Workout tracker

$appNaam = "FitTrack";
$trackerType = "Workout tracker";
$tagline = "Blijf sterk, blijf consistent.";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?= $appNaam ?></title>
</head>
<body>

<h1>Welkom bij <?= $appNaam ?></h1>
<p>Dit is mijn <?= $trackerType ?></p>
<p><?= $tagline ?></p>

<footer>
    <p>© <?= date("Y") ?> <?= $appNaam ?></p>
</footer>

</body>
</html>