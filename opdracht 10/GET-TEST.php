<!DOCTYPE html>
<html>
<head>
    <title>GET test</title>
</head>
<body>

<h2>GET formulier</h2>

<form method="GET">
    <label>Titel:</label>
    <input type="text" name="titel">
    <button type="submit">Verstuur</button>
</form>

<h3>Resultaat:</h3>

<pre>
<?php
print_r($_GET);
?>
</pre>

<p>
<?php
if (isset($_GET['titel'])) {
    echo "Titel is: " . $_GET['titel'];
}
?>
</p>

</body>
</html>