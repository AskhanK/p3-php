<?php include '../includes/header.php'; ?>

<?php
if (isset($_POST['titel'])) {
    $titel = $_POST['titel'];
    $categorie = $_POST['categorie'] ?? '';
    ?>

    <h1>Item succesvol ontvangen</h1>

    <p><strong>Titel:</strong> <?php echo htmlspecialchars($titel); ?></p>
    <p><strong>Categorie:</strong> <?php echo htmlspecialchars($categorie); ?></p>

    <p><a href="toevoegen.php">Nog een item toevoegen</a></p>
    <p><a href="../index.php">Terug naar home</a></p>

    <?php
} else {
    ?>
    <h1>Geen formulier verzonden</h1>
    <p>Je bent niet via het formulier op deze pagina gekomen.</p>
    <p><a href="toevoegen.php">Ga naar toevoegen</a></p>
    <p><a href="../index.php">Terug naar home</a></p>
    <?php
}
?>

<?php include '../includes/footer.php'; ?>