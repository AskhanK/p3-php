<?php

$games = [
    [
        "titel" => "Grand Theft Auto V : FiveM",
        "genre" => "Adventure,Serious,Shooter",
        "platform" => "PC",
        "status" => "Uitgespeeld"
    ],
    [
        "titel" => "FIFA 23",
        "genre" => "Sport",
        "platform" => "PlayStation 5",
        "status" => "Bezig"
    ]
];

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Games</title>
</head>
<body>

<h1>Mijn Games</h1>

<h2><?php echo $games[0]["titel"]; ?></h2>
<p>Genre: <?php echo $games[0]["genre"]; ?></p>
<p>Platform: <?php echo $games[0]["platform"]; ?></p>
<p>Status: <?php echo $games[0]["status"]; ?></p>

<hr>

<h2><?php echo $games[1]["titel"]; ?></h2>
<p>Genre: <?php echo $games[1]["genre"]; ?></p>
<p>Platform: <?php echo $games[1]["platform"]; ?></p>
<p>Status: <?php echo $games[1]["status"]; ?></p>

</body>
</html>