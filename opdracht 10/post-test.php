<!DOCTYPE html>
<html>
<head>
    <title>POST test</title>
</head>
<body>

<h2>POST formulier</h2>

<form method="POST">
    <label>Titel:</label>
    <input type="text" name="titel">
    <button type="submit">Verstuur</button>
</form>

<h3>Resultaat:</h3>

<pre>
<?php
print_r($_POST);
?>
</pre>

<p>
<?php
if (isset($_POST['titel'])) {
    echo "Titel is: " . $_POST['titel'];
}
?>
</p>

</body>
</html>