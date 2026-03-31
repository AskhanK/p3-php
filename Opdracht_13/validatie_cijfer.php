<?php

// Ongeldige waarde (tekst)
$aantal = "tien";

// Controle
if (is_numeric($aantal)) {
    echo "Correct ingevoerd.";
} else {
    echo "Voer een geldig getal in.";
}

?>