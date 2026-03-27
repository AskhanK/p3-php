<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM games";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Database fout.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>

<h1>Games</h1>

<?php if (count($games) > 0): ?>
    <ul>
        <?php foreach ($games as $game): ?>
            <li><?php echo htmlspecialchars($game['title']); ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Er zijn nog geen games gevonden.</p>
<?php endif; ?>

</body>
</html>