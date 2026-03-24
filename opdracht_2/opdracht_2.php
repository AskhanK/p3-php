<?php
$ingelogd = true;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 2</title>
</head>
<body>

<?php if ($ingelogd): ?>
    <p>Welkom terug!</p>
<?php else: ?>
    <p>Log eerst in.</p>
<?php endif; ?>

</body>
</html>