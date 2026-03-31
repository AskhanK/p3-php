<?php include '../includes/header.php'; ?>

<h1>Nieuw item toevoegen</h1>

<form action="verwerk.php" method="POST">
    <div>
        <label for="titel">Titel:</label>
        <input type="text" id="titel" name="titel" required>
    </div>

    <div>
        <label for="categorie">Categorie:</label>
        <input type="text" id="categorie" name="categorie">
    </div>

    <button type="submit">Verzenden</button>
</form>

<p><a href="../index.php">Terug naar home</a></p>

<?php include '../includes/footer.php'; ?>